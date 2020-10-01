<?php

namespace Lamoda\CrptNcApiClient\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Lamoda\CrptNcApiClient\Api\CrptNcApi;
use Lamoda\CrptNcApiClient\Configuration;
use PHPUnit\Framework\TestCase;

class DeserializationTest extends TestCase
{
    public function testDeserialize(): void
    {
        $json = '{
            "apiversion":3,
            "result": {
                "feed_id": 7126,
                "status_id": 0,
                "status": "Rejected",
                "received_at": "2019-12-06T13:03:20Z",
                "status_updated_at": "2019-12-06T13:03:30Z",
                "result": {
                  "0": [
                    "GTIN 4600002576143 используется другим товаром"
                  ],
                  "3": [
                    "GTIN 4600002576143 используется другим товаром"
                  ],
                  "totalErrors": "2",
                  "commonError": ""
                }
            }
        }';

        $mock = new MockHandler(
            [
                new Response(200, [], $json),
            ]
        );

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $configuration = new Configuration();
        $configuration->setApiKey('apikey', 'test');

        $api = new CrptNcApi($client, $configuration);

        $result = $api->feedStatusGet(1);

        /** @var array $object */
        $object = $result->getResult()->getResult();

        $this->assertArrayHasKey(0, $object);
        $this->assertArrayHasKey(3, $object);
        $this->assertArrayHasKey("totalErrors", $object);
        $this->assertArrayHasKey("commonError", $object);
    }
}
