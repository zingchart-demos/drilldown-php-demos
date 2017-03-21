<?php
echo json_encode(
  	array(
	 	"type" =>  "pie", 
	 	"title" => array(
	 	  "text" =>  "Earnings Insights<br>Operating System",
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
	 	    "text" => "OS Products",
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
	 	  "refAngle" =>  270,
	 	  "decimals" =>  0,
	 	  "thousandsSeparator" =>  ",",
	 	  "format" =>  "$%v",
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
		"series"  =>  array(
			array(
				"values"  =>  array(39547895),
				"text" => "OEM Licensing",
				"backgroundColor" =>  "#512DA8",
				"legendText" =>  "%t<br><b>$%v</b>",
				"legendMarker" => array(
				  "type" =>  "circle",
				  "size" =>  7,
				  "borderColor" =>  "#512DA8",
				  "borderWidth" =>  4,
				  "backgroundColor" => "#fff"
				),
				"legendItem" => array(
	        		"backgroundColor" =>  "#512DA8"
				),
				"tooltip" => array(
	     	  		"backgroundColor" =>  "#512DA8"
	     		)
			),
			array(
				"values"  =>  array(21451879),
				"text" => "Mobile Platforms",
				"backgroundColor" =>  "#5E35B1",
				"legendText" =>  "%t<br><b>$%v</b>",
				"legendMarker" => array(
				  "type" =>  "circle",
				  "size" =>  7,
				  "borderColor" =>  "#5E35B1",
				  "borderWidth" =>  4,
				  "backgroundColor" => "#fff"
				),
				"legendItem" => array(
	        		"backgroundColor" =>  "#5E35B1"
				),
				"tooltip" => array(
	     	  		"backgroundColor" =>  "#5E35B1"
	     		)
			),
			array(
				"values"  =>  array(20457965),
				"text" => "Support Services",
				"backgroundColor" =>  "#673AB7",
				"legendText" =>  "%t<br><b>$%v</b>",
				"legendMarker" => array(
				  "type" =>  "circle",
				  "size" =>  7,
				  "borderColor" =>  "#673AB7",
				  "borderWidth" =>  4,
				  "backgroundColor" => "#fff"
				),
				"legendItem" => array(
	        		"backgroundColor" =>  "#673AB7"
				),
				"tooltip" => array(
	     	  		"backgroundColor" =>  "#673AB7"
	     		)
			),
			array(
				"values"  =>  array(19989878),
				"text" => "License Upgrades",
				"backgroundColor" =>  "#7E57C2",
				"legendText" =>  "%t<br><b>$%v</b>",
				"legendMarker" => array(
				  "type" =>  "circle",
				  "size" =>  7,
				  "borderColor" =>  "#7E57C2",
				  "borderWidth" =>  4,
				  "backgroundColor" => "#fff"
				),
				"legendItem" => array(
	        		"backgroundColor" =>  "#7E57C2"
				),
				"tooltip" => array(
	     	  		"backgroundColor" =>  "#7E57C2"
	     		)
			),
			array(
				"values"  =>  array(18521179),
				"text" => "Other",
				"backgroundColor" =>  "#9575CD",
				"legendText" =>  "%t<br><b>$%v</b>",
				"legendMarker" => array(
				  "type" =>  "circle",
				  "size" =>  7,
				  "borderColor" =>  "#9575CD",
				  "borderWidth" =>  4,
				  "backgroundColor" => "#fff"
				),
				"legendItem" => array(
	        		"backgroundColor" =>  "#9575CD"
				),
				"tooltip" => array(
	     	  		"backgroundColor" =>  "#9575CD"
	     		)
			)
		)
	)
); // end echo json
?>