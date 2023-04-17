<?php 

function initiateAPI() {
    
    $url = "https://randomuser.me/api/?results=100";
    
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);

    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    
    $result = curl_exec($curl);

    curl_close($curl);

    return $result;

    
}

function convertIntoArray(){
    
    $result = InitiateAPI();
    $responseArray = json_decode($result,true);
    
    return $responseArray;
}
?>