<?php

return [
    'consumer_key'        => env('QUICKBOOKS_CONSUMER_KEY'),
    'consumer_secret'     => env('QUICKBOOKS_CONSUMER_SECRET'),
    'access_token'        => env('QUICKBOOKS_ACCESS_TOKEN'),
    'access_token_secret' => env('QUICKBOOKS_ACCESS_TOKEN_SECRET'),
    'customer_id'         => env('QUICKBOOKS_CUSTOMER_ID'),

    'endpoint' => env('QUICKBOOKS_ENDPOINT', 'https://sandbox-quickbooks.api.intuit.com'),
];