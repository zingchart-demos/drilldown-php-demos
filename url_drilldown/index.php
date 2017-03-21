<!DOCTYPE html>
<html>
<head>
  <title>ZC-PHP Url Drilldown</title>
  <!-- Load the ZingChart Script from the CDN -->
  <script src="//cdn.zingchart.com/zingchart.min.js"></script>
  <style>
  .chart {
    float: left;
    margin: 0;
    padding: 0;
    width: 25%;
  }
  .zc-ref {
    display: none;
  }
  </style>
</head>
<body>

  <!-- define your divs or dynamically make them first thing in php -->
  <div id='myChart'>
    <a class="zc-ref" href="https://www.zingchart.com/">Powered by ZingChart</a>
  </div>

<?php
// Composer config
require __DIR__ . '/vendor/autoload.php';


// Use the ZingChart PHP Wrapper installed via Composer
use ZingChart\PHPWrapper\ZC;

// url goes inside series objects instead of plot
// this will also get rid of data-queryParameter
$purple_url = "purple_drilldown.php";
$blue_url = "blue_drilldown.php";
$red_url = "red_drilldown.php";
$green_url = "green_drilldown.php";
$orange_url = "orange_drilldown.php";

// original drilldown series
$originalSeries =  array(
  array(
    "values"  =>  array(119968796),
    "url" => $purple_url,
    "text" => "Operating System",
    "backgroundColor" =>  "#4527A0",
    "legendText" =>  "%t<br><b>$%v</b>",
    "legendMarker" => array(
      "type" =>  "circle",
      "size" =>  7,
      "borderColor" =>  "#4527A0",
      "borderWidth" =>  4,
      "backgroundColor" => "#fff"
    ),
    "legendItem" => array(
      "backgroundColor" =>  "#4527A0"
    ),
    "tooltip" => array(
      "backgroundColor" =>  "#4527A0"
    )
  ),
  array(
    "values"  =>  array(97503958),
    "url" => $blue_url,
    "text" => "Network and Tools",
    "backgroundColor" =>  "#1565C0",
    "legendText" =>  "%t<br><b>$%v</b>",
    "legendMarker" => array(
      "type" =>  "circle",
      "size" =>  7,
      "borderColor" =>  "#1565C0",
      "borderWidth" =>  4,
      "backgroundColor" => "#fff"
    ),
    "legendItem" => array(
      "backgroundColor" =>  "#1565C0"
    )
  ),
  array(
    "values"  =>  array(85948575),
    "url" => $red_url,
    "text" => "Business Division",
    "backgroundColor" =>  "#AD1457",
    "legendText" =>  "%t<br><b>$%v</b>",
    "legendMarker" => array(
      "type" =>  "circle",
      "size" =>  7,
      "borderColor" =>  "#AD1457",
      "borderWidth" =>  4,
      "backgroundColor" => "#fff"
    ),
    "legendItem" => array(
      "backgroundColor" =>  "#AD1457"
    )
  ),
  array(
    "values"  =>  array(62096876),
    "url" => $green_url,
    "text" => "Online Services",
    "backgroundColor" =>  "#00695C",
    "legendText" =>  "%t<br><b>$%v</b>",
    "legendMarker" => array(
      "type" =>  "circle",
      "size" =>  7,
      "borderColor" =>  "#00695C",
      "borderWidth" =>  4,
      "backgroundColor" => "#fff"
    ),
    "legendItem" => array(
      "backgroundColor" =>  "#00695C"
    )
  ),
  array(
    "values"  =>  array(40467564),
    "url" => $orange_url,
    "text" => "Entertainment",
    "backgroundColor" =>  "#EF6C00",
    "legendText" =>  "%t<br><b>$%v</b>",
    "legendMarker" => array(
      "type" =>  "circle",
      "size" =>  7,
      "borderColor" =>  "#EF6C00",
      "borderWidth" =>  4,
      "backgroundColor" => "#fff"
    ),
    "legendItem" => array(
      "backgroundColor" =>  "#EF6C00"
    )
  )
);

// config for styling of chart
$originalConfig = array(
  "history" => array(
    "borderColor" =>  "#616161",
    "borderWidth" =>  3,
    "y" => 20,
    "height" =>  30,
    "width" =>  45,
    "borderRadius" =>  2,
    "item" => array(
      "backgroundColor" =>  "#616161",
      "borderColor" => "#616161",
      "text" => "Some Text",
      "fontColor" => "red",
      "fontSize" => 10
    ),
    "itemOff" => array(
      "backgroundColor" => "#f0efef",
      "borderColor" => "#bdbdbd",
      "height" =>  3,
      "width" =>  3,
      "size" =>  3
    )
  ),
  "graphset" => array(
    array(
      "type" =>  "pie", 
      "title" => array(
        "text" =>  "Earnings Insights<br>Corporate Overview",
        "align" =>  "right",
        "fontColor" =>  "#616161"
      ),
      "legend" => array(
        "text" => "%t<br>",
        "width" =>  120,
        "verticalAlign" =>  "middle",
        "borderWidth" =>  0,
        "toggleAction" =>  "remove",
        "item" => array(
          "padding" =>  5,
          "borderRadius" =>  3,
          "fontColor" =>  "#fff",
          "align" =>  "right",
          "width" =>  100
        ),
        "header" => array(
          "text" => "Business Units",
          "align" =>  "right",
          "fontSize" =>  13,
          "bold" =>  true,
          "fontColor" =>  "#616161"
        ),
        "itemOff" => array(
          "alpha" =>  0.7,
          "textAlpha" =>  1,
          "fontColor" =>  "#616161",
          "textDecoration" =>  "line-through",
          "lineWidth" =>  2
        ),
        "markerOff" => array(
          "alpha" =>  0.2
        )
      ),
      "plot" => array(
        "target" =>  "graph",
        "refAngle" =>  270,
        "decimals" =>  0,
        "thousandsSeparator" =>  ",",
        "detach" =>  false,
        "valueBox" => array(
          "decimals" =>  2
        ),
        "animation" => array(
          "effect" =>  3,
          "method" =>  1,
          "sequence" =>  1,
          "onLegendToggle" =>  false
        )
      ),
      "tooltip" => array(
        "text" => "%t<br>$%v",
        "placement" =>  "node:out",
        "offsetR" =>  10,
        "width" =>  110,
        "fontColor" =>  "#fff",
        "borderRadius" =>  3,
        "bold" =>  true,
        "align" =>  "right"
      ),
      "scale" => array(
        "sizeFactor" =>  0.75
      ),
      "series" => $originalSeries
    )
  )
);

// use level 3 php zingchart (Currently the easiest solution)
$zc = new ZC("myChart");
$zc->trapdoor(json_encode($originalConfig));
$zc->setChartHeight("400");
$zc->setChartWidth("100%");
$zc->render();

?>

</body>
</html>