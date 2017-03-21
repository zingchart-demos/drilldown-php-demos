<?php
    $seriesId = $_GET['seriesId'];

    // grab the id and include the appropriate file
    // this switch statement mimicks the service layer
    // you would ideally call a function to get data from your DataStore
    // and then echo that content.

    // in this case including the file will echo the content
    if(isset($seriesId) && !empty($seriesId)){
        switch ($seriesId) {
            case "Operating_System":
                include('purple_drilldown.php');
                break;
            case "Network_and_Tools":
                include('blue_drilldown.php');
                break;
            case "Business_Division":
                include('red_drilldown.php');
                break;
            case "Online_Services":
                include('green_drilldown.php');
                break;
            case "Entertainment":
                include('orange_drilldown.php');
                break;
            default:
                print "Invalid seriesId Specified!";
        }
    } else {
        print "No seriesId parameter specified!";
    }
?>

    