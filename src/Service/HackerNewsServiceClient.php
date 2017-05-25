<?php

namespace HackerNewsApi\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\ResultInterface;

/**
 * Class HackerNewsServiceClient
 *
 * @package HackerNewsApi\Service
 *
 * @method ResultInterface getItem(array $parameters)
 * @method ResultInterface getUser(array $parameters)
 * @method ResultInterface getMaxItem()
 * @method ResultInterface getNewStories()
 * @method ResultInterface getTopStories()
 * @method ResultInterface getBestStories()
 * @method ResultInterface getAskStories()
 * @method ResultInterface getShowStories()
 * @method ResultInterface getJobStories()
 * @method ResultInterface getUpdates()
 */
class HackerNewsServiceClient extends GuzzleClient
{
    /**
     * @return HackerNewsServiceClient
     */
    public static function create(): HackerNewsServiceClient
    {
        $description = HackerNewsApiDescription::get();
        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]
        ]);

        return new static($client, $description);
    }
}
