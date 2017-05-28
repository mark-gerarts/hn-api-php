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
     * @return Item
     */
    public function getItem(int $id): ?Item;

    /**
     * @param string $name
     * @return User
     */
    public function getUser(string $name): ?User;

    /**
     * @return int
     */
    public function getMaxItem(): int;

    /**
     * @return array
     */
    public function getNewStories(): array;

    /**
     * @return array
     */
    public function getTopStories(): array;

    /**
     * @return array
     */
    public function getBestStories(): array;

    /**
     * @return array
     */
    public function getAskStories(): array;

    /**
     * @return array
     */
    public function getShowStories(): array;

    /**
     * @return array
     */
    public function getJobStories(): array;

    /**
     * @return Updates
     */
    public function getUpdates(): Updates;
}
