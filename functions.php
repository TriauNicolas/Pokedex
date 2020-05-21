<?php

function initiate ($pokemon) {
    $curl = curl_init();
    
    curl_setopt($curl, CURLOPT_URL, 'https://pokeapi.co/api/v2/pokemon/'.$pokemon.'/');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    $data = json_decode($data);
    
    curl_close($curl);

    return $data;
}