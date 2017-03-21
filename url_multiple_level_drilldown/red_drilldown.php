<?php
echo json_encode(
    array(
	    "type" => "pie",
	    "title" => array(
	        "text" => "Earnings Insights<br>Business Division",
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
	            "text" => "Business<br>Products",
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
	            "values" => array(25684578),
	            "text" => "Enterprise",
	            "backgroundColor" => "#C2185B",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#C2185B",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#C2185B"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#C2185B"
	            )
	        ),
	        array(
	            "values" => array(19245687),
	            "text" => "Office Suites",
	            "backgroundColor" => "#D81B60",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#D81B60",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#D81B60"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#D81B60"
	            )
	        ),
	        array(
	            "values" => array(15457841),
	            "text" => "Consulting",
	            "backgroundColor" => "#E91E63",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#E91E63",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#E91E63"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#E91E63"
	            )
	        ),
	        array(
	            "values" => array(14985689),
	            "text" => "Mobile Products",
	            "backgroundColor" => "#EC407A",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#EC407A",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#EC407A"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#EC407A"
	            )
	        ),
	        array(
	            "values" => array(10547780),
	            "text" => "Security",
	            "backgroundColor" => "#F06292",
	            "legendText" => "%t<br><b>$%v</b>",
	            "legendMarker" => array(
	                "type" => "circle",
	                "size" => 7,
	                "borderColor" => "#F06292",
	                "borderWidth" => 4,
	                "backgroundColor" => "#fff"
	            ),
	            "legendItem" => array(
	                "backgroundColor" => "#F06292"
	            ),
	            "tooltip" => array(
	                "backgroundColor" => "#F06292"
	            )
	        )
	    )
	)
); // end echo json
?>