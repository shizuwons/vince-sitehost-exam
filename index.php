<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'https://api.demo.sitehost.co.nz/1.0/srs/list_domains.json?client_id=293785&apikey=d17261d51ff7046b760bd95b4ce781ac');

$output = curl_exec($curl);
$output = json_decode($output, true);

foreach($output['return']['data'] as $data) {
    echo '<pre>'.$data['domain'].'</pre>';
}

?>