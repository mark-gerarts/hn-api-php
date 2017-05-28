<?php

namespace HackerNewsApi\Service;

use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\DescriptionInterface;

/**
 * Class HackerNewsApiDescription
 *
 * @package HackerNewsApi
 */
final class HackerNewsApiDescription
{
    /**
     * @return DescriptionInterface
     */
    public static function get(): DescriptionInterface
    {
        return new Description([
            'baseUrl' => 'https://hacker-news.firebaseio.com/v0/',

            'operations' => [
                'getItem' => [
                    'httpMethod' => 'GET',
                    'uri' => 'item/{id}.json',
                    'parameters' => [
                        'id' => [
                            'type' => 'integer',
                            'location' => 'uri'
                        ]
                    ],
                    'responseModel' => 'jsonResponse'
                ],
                'getUser' => [
                    'httpMethod' => 'GET',
                    'uri' => 'user/{name}.json',
                    'parameters' => [
                        'name' => [
                            'type' => 'string',
                            'location' => 'uri'
                        ]
                    ],
                    'responseModel' => 'jsonResponse'
                ],
                'getMaxItem' => [
                    'httpMethod' => 'GET',
                    'uri' => 'maxitem.json',
                    'responseModel' => 'scalar',
                ],
                'getNewStories' => [
                    'httpMethod' => 'GET',
                    'uri' => 'newstories.json',
                    'responseModel' => 'jsonResponse'
                ],
                'getTopStories' => [
                    'httpMethod' => 'GET',
                    'uri' => 'topstories.json',
                    'responseModel' => 'jsonResponse'
                ],
                'getBestStories' => [
                    'httpMethod' => 'GET',
                    'uri' => 'beststories.json',
                    'responseModel' => 'jsonResponse'
                ],
                'getAskStories' => [
                    'httpMethod' => 'GET',
                    'uri' => 'askstories.json',
                    'responseModel' => 'jsonResponse'
                ],
                'getShowStories' => [
                    'httpMethod' => 'GET',
                    'uri' => 'showstories.json',
                    'responseModel' => 'jsonResponse'
                ],
                'getJobStories' => [
                    'httpMethod' => 'GET',
                    'uri' => 'jobstories.json',
                    'responseModel' => 'jsonResponse'
                ],
                'getUpdates' => [
                    'httpMethod' => 'GET',
                    'uri' => 'updates.json',
                    'responseModel' => 'jsonResponse'
                ]
            ],

            'models' => [
                'jsonResponse' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ]
                ],
                'scalar' => [
                    'type' => 'array',
                    'name' => 'value',
                    'location' => 'json'
                ]
            ]
        ]);
    }
}
