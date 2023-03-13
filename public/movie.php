<?php

$api_key = "b157839cedcf76902d42a11142afc645";
$api_url = "https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key={$api_key}";

<?php

$api_key = "b157839cedcf76902d42a11142afc645";
$api_url = "https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key={$api_key}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$movies = json_decode($response, true);
