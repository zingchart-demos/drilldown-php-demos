<?php
echo json_encode(
	array(
	    "type" => "pie",
	    "title" => array(
	        "text" => "Earnings Insights<br>Entertainment",
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
	            "text" => "Entertainment",
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
	        "format" => "$%v",
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
	    "series" =>  array(
	        array(
	            "values" =>  array(10987451),
	            "text" => "Console Games",
	            "backgroundColor" => "#F57C00",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#F57C00",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#F57C00"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#F57C00"
	            )
	        ),
	        array(
	            "values" =>  array(9856985),
	            "text" => "Console Hardware",
	            "backgroundColor" => "#FB8C00",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#FB8C00",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#FB8C00"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#FB8C00"
	            )
	        ),
	        array(
	            "values" =>  array(7845896),
	            "text" => "Online Services",
	            "backgroundColor" => "#FF9800",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#FF9800",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#FF9800"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#FF9800"
	            )
	        ),
	        array(
	            "values" =>  array(6965478),
	            "text" => "Mobile Devices",
	            "backgroundColor" => "#FFA726",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#FFA726",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#FFA726"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#FFA726"
	            )
	        ),
	        array(
	            "values" =>  array(4811754),
	            "text" => "Content Delivery",
	            "backgroundColor" => "#FFB74D",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#FFB74D",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#FFB74D"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#FFB74D"
	            )
	        )
	    )
	)
); // end echo json
?>