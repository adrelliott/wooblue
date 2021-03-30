<?php

// Create apiInstance
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', $_ENV['SENDINBLUE_API_KEY']);
$apiInstance = new SendinBlue\Client\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);

// Now get all contacts
$limit = 5; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page
$modifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
$sort = "desc"; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $contacts = $apiInstance->getContacts($limit, $offset, $modifiedSince, $sort);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
