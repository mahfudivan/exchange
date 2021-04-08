<?php
function etherium_price($from = 'ETH', $to = 'USD')
{
    $curl     = getUrlContent('https://min-api.cryptocompare.com/data/price?fsym=' . $from . '&tsyms=' . $to);
    return json_decode($curl);
}
