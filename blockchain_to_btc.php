<?php

function blockchain_to_btc($amount = 0, $currency = 'USD')
{

    $curl     = getUrlContent('https://blockchain.info/tobtc?currency=' . $currency . '&value=' . $amount . '');
    return $curl;
}
