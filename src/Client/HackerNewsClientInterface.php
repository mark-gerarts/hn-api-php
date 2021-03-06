<?php

namespace HackerNewsApi\Client;

use HackerNewsApi\Models\Item;
use HackerNewsApi\Models\Updates;
use HackerNewsApi\Models\User;

/**
 * Interface HackerNewsClientInterface
 *
 * @package HackerNewsApi\Client
 */
interface HackerNewsClientInterface
{
    /**
     * @param int $id
     * @return Item|null
     */
    public function getItem(int $id): ?Item;

    /**
     * @param string $name
     * @return User|null
     */
    public function getUser(string $name): ?User;

    /**
     * @return int
     */
    public function getMaxItem(): int;

    /**
     * @return int[]
     */
    public function getNewStories(): array;

    /**
     * @return int[]
     */
    public function getTopStories(): array;

    /**
     * @return int[]
     */
    public function getBestStories(): array;

    /**
     * @return int[]
     */
    public function getAskStories(): array;

    /**
     * @return int[]
     */
    public function getShowStories(): array;

    /**
     * @return int[]
     */
    public function getJobStories(): array;

    /**
     * @return Updates
     */
    public function getUpdates(): Updates;
}
