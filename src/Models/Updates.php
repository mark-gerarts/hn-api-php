<?php

namespace HackerNewsApi\Models;

use HackerNewsApi\FromArray;

/**
 * Class Updates
 *
 * @package HackerNewsApi\Models
 */
class Updates
{
    use FromArray;

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
