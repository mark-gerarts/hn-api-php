<?php

namespace HackerNewsApi\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Command\Guzzle\Deserializer;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Result;
use GuzzleHttp\Command\ResultInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

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

        $nullToEmptyResult = function(
            ResponseInterface $response,
            RequestInterface $request,
            CommandInterface $command
        ) use ($description) {
            // The HN API returns status code 200 when the item isn't found,
            // with "null" in the body. This causes the deserializer to bork,
            // emitting a PHP warning (Invalid argument supplied for foreach).
            // We'll intercept this here, and just return an empty Result
            // ourselves.
            if ($response->getBody()->getContents() === "null") {
                return new Result();
            }

            $handler = new Deserializer($description, true);
            return $handler($response, $request, $command);
        };

        return new static($client, $description, null, $nullToEmptyResult);
    }
}
