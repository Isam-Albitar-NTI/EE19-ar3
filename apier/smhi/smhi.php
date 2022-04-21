<?php
$url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";

// 1. Anropa api:et
$json = file_get_contents($url);

// 2. Avkoda json svaret
$dataJson = json_decode($json);

// 3. Plocka data vi vill ha
// "validTime"
// "name": "t"
// "values": [11.8]

// Första steg: arrayen timeseries
$timeSeries = $dataJson->timeSeries;

// för json-svaret
$tempData = [];

// Loopa igenom timeSeries
foreach ($timeSeries as $timeStamp) {
    $validTime = $timeStamp->validTime;
    $data->label = $validTime;
    
    //Plocka ut parametrerar
    $parameters = $timeStamp->parameters;

    // Skapa ett tomt objekt
    $data = new stdClass();
    

    // Söka efter name="t"
    $temperature = 0;
    
    foreach ($parameters as $parameter) {
       if ($parameter->name == "t") {
           // Lägg till temperaturen
           $data->t = $parameter->values[0];
           $tempData[] = $data;
       } 
    }
}

echo json_encode($tempData);
?>