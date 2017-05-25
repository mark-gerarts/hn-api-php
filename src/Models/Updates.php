<?php

namespace HackerNewsApi\Models;

/**
 * Class Updates
 *
 * @package HackerNewsApi\Models
 */
class Updates
{
    /**
     * @var int[]
     */
    private $items = [];

    /**
     * @var string[]
     */
    private $profiles = [];

    /**
     * @return \int[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return \string[]
     */
    public function getProfiles(): array
    {
        return $this->profiles;
    }
}