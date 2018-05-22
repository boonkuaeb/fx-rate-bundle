<?php
namespace BK\FxRateBundle;

use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;


class BKFxRate
{
    private $endPoints;
    private $apiKey;

    /**
     * BKFxRate constructor.
     * @param $endpoints
     */
    public function __construct($endpoints = "", $api_key="")
    {
        $this->endPoints = $endpoints;
        $this->apiKey=$api_key;
    }


    public function makeExchange($from_currency, $to_currency, $quantity, LoggerInterface $logger)
    {
        $client = new Client();
        $params = [
            'from' => $from_currency,
            'to' => $to_currency,
            'quantity' => floatval($quantity),
            'api_key' => $this->apiKey
        ];

        $logger->info('params', $params);

        $url_endpoint = $this->endPoints . '?' . http_build_query($params);

        $logger->info("api call url", [$url_endpoint]);

        $res = $client->request('GET', $url_endpoint);
        $data = $res->getBody();
        $data_array = json_decode($data, true);
        $logger->info('response from api', $data_array);

        return $data_array;
    }

}