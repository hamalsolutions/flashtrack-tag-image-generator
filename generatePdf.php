<?php

define("DEBUG_PDF", false);
ini_set('memory_limit', '256M');
set_time_limit(60);

require_once('vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(403);
  exit();
}

if (!isset($_POST['data']) || !isset($_POST['label']) || !isset($_POST['orderNumber'])) {
  http_response_code(403);
  exit();
}

function getImageUrl($field, $label) {
  $fileName = $label;
  $params = implode('&', array_map(function ($item) use ($field) {
    return 's' . strtolower(trim($item)) . '=' . urlencode(isset($field[$item]) ? trim($field[$item]) : '');
  }, array_keys($field)));
  $imageUrl = "{$fileName}?{$params}&sample=1";
  return $imageUrl;
}

function getImageUrls($data, $label) {
  $urls = array();
  foreach ($data as $item) {
    $params = getImageUrl($item, $label);
    $urls[] = $params;
  }
  return $urls;
}

$data = json_decode($_POST['data'], true);
$label = json_decode($_POST['label'], true);
$orderNumber = json_decode($_POST['orderNumber'], true);

$labelImgSrc = $label['imgSrc'];
$imgUrls = getImageUrls($data, $labelImgSrc);

if (!isset($orderNumber) || !isset($data) || !isset($label) || !isset($imgUrls)) {
  http_response_code(403);
  die('Forbidden');
}

$unit = "cm";

$UNIT_SIZES = [
  "mm" => 25.4,
  "cm" => 2.54,
  "in" => 1,
  "px" => 1 / 72,
];

$page = [
  "orientation" => "portrait",
  "size" => "A4",
  "dpi" => 72 / $UNIT_SIZES[$unit],
];

$PAGE_SIZES = array(
  'A0'  => array( 2383.937,  3370.394),
  'A1'  => array( 1683.780,  2383.937), 
  'A2'  => array( 1190.551,  1683.780), 
  'A3'  => array(  841.890,  1190.551), 
  'A4'  => array(  595.276,   841.890), 
  'A5'  => array(  419.528,   595.276), 
  'A6'  => array(  297.638,   419.528), 
  'A7'  => array(  209.764,   297.638), 
  'A8'  => array(  147.402,   209.764), 
  'A9'  => array(  104.882,   147.402), 
  'A10' => array(   73.701,   104.882), 
  'A11' => array(   51.024,    73.701), 
  'A12' => array(   36.850,    51.024), 
);

function isLandscape($page) {
  return $page["orientation"] === "landscape";
};

function flipSizeObject($v) { 
  return [
    "width" => $v["height"], "height" => $v["width"]
  ];  
};

function getObjectSize($size) {
  global $PAGE_SIZES;
  $v = $PAGE_SIZES[strtoupper($size)];
  return [
    "width" => $v[0], "height" => $v[1] 
  ];
};

function adjustDpi ($v, $dpi) {
  return [
    "width"  => $v["width"]  ? $v["width"]  * $dpi : $v["width"],
    "height" => $v["height"] ? $v["height"] * $dpi : $v["height"],
  ];
};

function getSize($page) {
  $dpi   = $page["dpi"] ? floatval($page["dpi"]) : 72;
  $size  = $page["size"] ? getObjectSize($page["size"]) : "A4";
  $size  = adjustDpi($size, $dpi / 72);

  return isLandscape($page) ? flipSizeObject($size) : $size;
};

$px = 20; // pixels for padding
$offset = $px * 2; // padding both sides
$size = getSize($page);

$lSize = [
  "width"  => $label["size"]["wOrd"] * $page["dpi"],
  "height" => $label["size"]["hOrd"] * $page["dpi"],
];

// Subtract offset from available width and height
$availableWidth = $size["width"] - $offset;
$availableHeight = $size["height"] - $offset;

// Calculate maximum number of images that can fit horizontally and vertically
$maxHorizontalImages = floor($availableWidth / $lSize["width"]);
$maxVerticalImages = floor($availableHeight / $lSize["height"]);

$maxItemsPerPage = $maxHorizontalImages * $maxVerticalImages;
$maxPages = ceil(count($imgUrls) / $maxItemsPerPage);

// Create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// Set document information
$pdf->SetCreator("FLASHTRAK");
$pdf->SetTitle('Flastrak Samples');
// Set default header data
$pdf->SetHeaderData('', 0, '', '', array(0, 0, 0), array(255, 255, 255));
// Set fonts for the title
$pdf->setFont('helvetica', '', 20);
// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// Disable auto breaks
$pdf->setAutoPageBreak(false, 0);
// Remove default footer
$pdf->setPrintFooter(false);
// Add a page
$pdf->AddPage();
$pdf->Text(65, 5,  'Flashtrak # ' . $orderNumber);


// Set images initial position
$separator = 10 / $page["dpi"];

$x = 10;
$y = 20;

$labelWidthWithSeparator  = $lSize["width"] + 10 * $separator;
$labelHeightWithSeparator = $lSize["height"] + 10 * $separator;

$availableWidthWithMagins = $size["width"] - $offset / 2;
$availableHeightWithMagins = $size["height"] - $offset / 2;

if (DEBUG_PDF) {
  echo "Available space: [$availableWidth, $availableHeight],       " . $maxHorizontalImages . " " . $maxVerticalImages . "<br><br>";
  echo "Label size: " . $lSize["width"] . " ". $lSize["height"] . "<br><br>";
}

foreach ($imgUrls as $i => $url) {
  $currentImageNumber = $i + 1;
  $imageData = file_get_contents($url);

  $pdf->Image('@'.$imageData, $x, $y, $lSize["width"], $lSize["height"], '', '', '', true, 300, '', false, false, 0, false, false, false);
  
  if (DEBUG_PDF) {
    echo "Image [$i]:       [$x, $y],       <br>";
    echo "Label width size + separator: " . ($labelWidthWithSeparator) . "<br>";
    echo "Label height size + separator: " . ($labelHeightWithSeparator) . "<br>";
    echo "Next x: " . ($x + $labelWidthWithSeparator) . "<br>";
    if ($x > ($availableWidth - $lSize["width"])) {
      echo "Next y: " . ($y + $labelHeightWithSeparator)  . "<br><br>";
    } else {
      echo "Next y: " . $y . "<br><br>";
    }
  }
  $x += $labelWidthWithSeparator;
  

  // If there is not enough space on the current row, move to the next row
  if ($x > ($availableWidthWithMagins - $labelWidthWithSeparator)) {
    if (DEBUG_PDF) {
      echo "next row" . "<br><br>" ;
    }

      $x = 10;
      $y += $labelHeightWithSeparator;
  }

  if ($y > ($availableHeightWithMagins - $labelHeightWithSeparator)) {
    if ($currentImageNumber < ($maxItemsPerPage * $maxPages)) {
      if (DEBUG_PDF) {
        echo "[NEXT PAGE]" . "<br>";
      }

      $pdf->AddPage();
      $x = 10;
      $y = 10;
    }
  }
}


// Output the PDF as a file
if (DEBUG_PDF) {
  exit;
} else {
  // strtoupper orderNumber
  $filename = strtoupper($orderNumber);
  $pdf->Output($filename . '.pdf', 'I');
}
