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
    public function getItem(int $id): ?Item
    {
        $result = $this->client->getItem(['id' => $id])->toArray();

        return empty($result) ? null : Item::fromArray($result);
    }

    /**
     * @inheritdoc
     */
    public function getUser(string $name): ?User
    {
        $result = $this->client->getUser(['name' => $name])->toArray();

        return empty($result) ? null : User::fromArray($result);
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
        return $this->client->getAskStories()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getShowStories(): array
    {
        return $this->client->getShowStories()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getJobStories(): array
    {
        return $this->client->getJobStories()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getUpdates(): Updates
    {
        return Updates::fromArray($this->client->getUpdates()->toArray());
    }
}
