<?php

namespace HackerNewsApi\Client;

use HackerNewsApi\Models\Item;
use HackerNewsApi\Models\Updates;
use HackerNewsApi\Models\User;
use HackerNewsApi\Service\HackerNewsServiceClient;

/**
 * Class HackerNewsClient
 *
 * @package HackerNewsApi\Client
 */
class HackerNewsClient implements HackerNewsClientInterface
{
    /**
     * @var HackerNewsServiceClient
     */
    private $client;

    /**
     * HackerNewsClient constructor.
     *
     * @param HackerNewsServiceClient $client
     */
    public function __construct(HackerNewsServiceClient $client)
    {
        $this->client = $client;
    }

    /**
     * @inheritdoc
     */
    public function getItem(int $id): Item
    {
        $result = $this->client->getItem(['id' => $id]);

        return Item::fromArray($result->toArray());
    }

    /**
     * @inheritdoc
     */
    public function getUser(string $name): User
    {
        $result = $this->client->getUser(['name' => $name]);

        return User::fromArray($result->toArray());
    }

    /**
     * @inheritdoc
     */
    public function getMaxItem(): int
    {
        return $this->client->getMaxItem()->offsetGet('value');
    }

    /**
     * @inheritdoc
     */
    public function getNewStories(): array
    {
        return $this->client->getNewStories()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getTopStories(): array
    {
        return $this->client->getTopStories()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getBestStories(): array
    {
        return $this->client->getBestStories()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getAskStories(): array
    {
        // TODO: Implement getAskStories() method.
    }

    /**
     * @inheritdoc
     */
    public function getShowStories(): array
    {
        // TODO: Implement getShowStories() method.
    }

    /**
     * @inheritdoc
     */
    public function getJobStories(): array
    {
        // TODO: Implement getJobStories() method.
    }

    /**
     * @inheritdoc
     */
    public function getUpdates(): Updates
    {
        // TODO: Implement getUpdates() method.
    }
}
