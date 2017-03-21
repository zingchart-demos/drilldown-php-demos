<?php
echo json_encode(
    array(
	    "type" => "pie",
	    "title" => array(
	        "text" => "Earnings Insights<br>Online Services",
	        "align" => "right",
	        "fontColor" => "#616161"
	    ),
	    "legend" => array(
	        "text" => "%t<br>",
	        "width" => 120,
	        "verticalAlign" => "middle",
	        "borderWidth" => 0,
	        "toggleAction" => "remove",
	        "item" => array(
	            "padding" => 5,
	            "borderRadius" => 3,
	            "fontColor" => "#fff",
	            "align" => "right",
	            "width" => 100
	        ),
	        "header" => array(
	            "text" => "Online Services",
	            "align" => "right",
	            "fontSize" => 13,
	            "bold" => true,
	            "fontColor" => "#616161"
	        ),
	        "itemOff" => array(
	            "alpha" => 0.7,
	            "textAlpha" => 1,
	            "fontColor" => "#616161",
	            "textDecoration" => "line-through",
	            "lineWidth" => 2
	        ),
	        "markerOff" => array(
	            "alpha" => 0.2
	        )
	    ),
	    "plot" => array(
	        "refAngle" => 270,
	        "decimals" => 0,
	        "thousandsSeparator" => ",",
	        "valueBox" => array(
	            "decimals" => 2
	        ),
	        "animation" => array(
	            "effect" => 3,
	            "method" => 1,
	            "sequence" => 1,
	            "onLegendToggle" => false
	        )
	    ),
	    "tooltip" => array(
	        "text" => "%t<br>$%v",
	        "placement" => "node:out",
	        "offsetR" => 10,
	        "width" => 110,
	        "fontColor" => "#fff",
	        "borderRadius" => 3,
	        "bold" => true,
	        "align" => "right"
	    ),
	    "scale" => array(
	        "sizeFactor" => 0.75
	    ),
	    "series" => array(
	        array(
	            "values" => array(19357845),
	            "text" => "Search",
	            "backgroundColor" => "#00796B",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#00796B",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#00796B"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#00796B"
	            )
	        ),
	        array(
	            "values" => array(17568457),
	            "text" => "Cloud Storage",
	            "backgroundColor" => "#00897B",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#00897B",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#00897B"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#00897B"
	            )
	        ),
	        array(
	            "values" => array(12547845),
	            "text" => "Ad Revenue",
	            "backgroundColor" => "#009688",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#009688",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#009688"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#009688"
	            )
	        ),
	        array(
	            "values" => array(7045987),
	            "text" => "Mobile Delivery",
	            "backgroundColor" => "#26A69A",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#26A69A",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#26A69A"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#26A69A"
	            )
	        ),
	        array(
	            "values" => array(5576742),
	            "text" => "Developer Tools",
	            "backgroundColor" => "#4DB6AC",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#4DB6AC",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#4DB6AC"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#4DB6AC"
	            )
	        )
	    )
    )
); // end echo json
?>