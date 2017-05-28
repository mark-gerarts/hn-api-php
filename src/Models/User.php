<?php

namespace HackerNewsApi\Models;

use HackerNewsApi\FromArray;

/**
 * Class User
 *
 * @package HackerNewsApi\Models
 */
class User
{
    use FromArray;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $delay;

    /**
     * @var int
     */
    private $created;

    /**
     * @var int
     */
    private $karma;

    /**
     * @var string|null
     */
    private $about;

    /**
     * @var int[]
     */
    private $submitted = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getDelay(): ?int
    {
        return $this->delay;
    }

    /**
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * @return int
     */
    public function getKarma(): int
    {
        return $this->karma;
    }

    /**
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * @return int[]
     */
    public function getSubmitted(): array
    {
        return $this->submitted;
    }
}
