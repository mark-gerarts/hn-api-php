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
                ]
            ],

            'models' => [
                'jsonResponse' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ],
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
