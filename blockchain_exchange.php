<?php
function blockchain_exchange($get_currency = 'USD')
{
    $curl = getUrlContent('https://blockchain.info/ticker');
    $result = json_decode($curl);

    if (isset($result->$get_currency)) {
        $output = $result->$get_currency->sell;
    } else {
        $output = false;
    }

    return $output;
}
