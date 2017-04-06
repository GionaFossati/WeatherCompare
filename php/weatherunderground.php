<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $country = "IT";
    $url1 = "http://api.wunderground.com/api/02b568e5758b4ca8/conditions/q/IT/".$city.".json";
    $json1=file_get_contents($url1);
    $data1=json_decode($json1,true);

    echo $data1 ['current_observation']['temperature_string']."<br>";
    echo $data1 ['current_observation']['display_location']['latitude']."<br>";
    echo $data1 ['current_observation']['display_location']['longitude']."<br><br>";
    }
    
?>
