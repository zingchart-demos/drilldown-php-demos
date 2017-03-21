This "serviceLayerDrilldown" will show you how to have a php drilldown chart in ZingChart.

The basics are 
1) creating a chart
2) Inside that chart defining a url attribute within the "plot" object. This url is called when slices are clicked on. You can pass 
   parameters to that url. That url is a separate php page. On that page we will mimmick a service layer call.
   This call could be to a database to get a JSON configuration back. In this case we have several files which
   return a JSON configuration.
3) You now have a drilldown chart. Try to follow along the comments