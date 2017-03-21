<?php
// url goes inside series objects instead of plot
// this will also get rid of data-queryParameter
$purple_url = "purple_drilldown.php";
$blue_url = "blue_drilldown.php";
$red_url = "red_drilldown.php";
$green_url = "green_drilldown.php";
$orange_url = "orange_drilldown.php";

// original drilldown series
$drilldownSeries =  array(
  array(
    "values"  =>  array(55),
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
    "values"  =>  array(155),
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
    "values"  =>  array(56),
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
    "values"  =>  array(77),
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
    "values"  =>  array(99),
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

$drilldown = array(
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
        "text" =>  "Metric Two Insights",
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
      "series" => $drilldownSeries
    )
  )
);

echo json_encode($drilldown);

?>