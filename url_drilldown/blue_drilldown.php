<?php
echo json_encode(
    array(
		"type" => "pie",
		"title" => array(
		    "text" => "Earnings Insights<br>Network and Tools",
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
		        "text" => "Network<br>and Tools",
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
		        "values" => array(26458795),
		        "text" => "Cloud Facilities",
		        "backgroundColor" => "#1976D2",
		        "legendText" => "%t<br><b>$%v</b>",
		        "legendMarker" => array(
		            "type" => "circle",
		            "size" => 7,
		            "borderColor" => "#1976D2",
		            "borderWidth" => 4,
		            "backgroundColor" => "#fff"
		        ),
		        "legendItem" => array(
		            "backgroundColor" => "#1976D2"
		        ),
		        "tooltip" => array(
		            "backgroundColor" => "#1976D2"
		        )
		    ),
		    array(
		        "values" => array(21457845),
		        "text" => "Hardware",
		        "backgroundColor" => "#1E88E5",
		        "legendText" => "%t<br><b>$%v</b>",
		        "legendMarker" => array(
		            "type" => "circle",
		            "size" => 7,
		            "borderColor" => "#1E88E5",
		            "borderWidth" => 4,
		            "backgroundColor" => "#fff"
		        ),
		        "legendItem" => array(
		            "backgroundColor" => "#1E88E5"
		        ),
		        "tooltip" => array(
		            "backgroundColor" => "#1E88E5"
		        )
		    ),
		    array(
		        "values" => array(18541547),
		        "text" => "Software",
		        "backgroundColor" => "#2196F3",
		        "legendText" => "%t<br><b>$%v</b>",
		        "legendMarker" => array(
		            "type" => "circle",
		            "size" => 7,
		            "borderColor" => "#2196F3",
		            "borderWidth" => 4,
		            "backgroundColor" => "#fff"
		        ),
		        "legendItem" => array(
		            "backgroundColor" => "#2196F3"
		        ),
		        "tooltip" => array(
		            "backgroundColor" => "#2196F3"
		        )
		    ),
		    array(
		        "values" => array(18457845),
		        "text" => "Support Services",
		        "backgroundColor" => "#42A5F5",
		        "legendText" => "%t<br><b>$%v</b>",
		        "legendMarker" => array(
		            "type" => "circle",
		            "size" => 7,
		            "borderColor" => "#42A5F5",
		            "borderWidth" => 4,
		            "backgroundColor" => "#fff"
		        ),
		        "legendItem" => array(
		            "backgroundColor" => "#42A5F5"
		        ),
		        "tooltip" => array(
		            "backgroundColor" => "#42A5F5"
		        )
		    ),
		    array(
		        "values" => array(12587926),
		        "text" => "Security Solutions",
		        "backgroundColor" => "#64B5F6",
		        "legendText" => "%t<br><b>$%v</b>",
		        "legendMarker" => array(
		            "type" => "circle",
		            "size" => 7,
		            "borderColor" => "#64B5F6",
		            "borderWidth" => 4,
		            "backgroundColor" => "#fff"
		        ),
		        "legendItem" => array(
		            "backgroundColor" => "#64B5F6"
		        ),
		        "tooltip" => array(
		            "backgroundColor" => "#64B5F6"
		        )
		    )
		)
	)
); // end echo json
?>