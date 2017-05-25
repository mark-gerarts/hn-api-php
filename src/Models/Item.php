<?php

namespace HackerNewsApi\Models;

use HackerNewsApi\FromArray;

/**
 * Class Item
 *
 * @package HackerNewsApi\Models
 */
class Item
{
    use FromArray;

    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $deleted = false;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $by;

    /**
     * @var int
     */
    private $time;

    /**
     * @var string|null
     */
    private $text;

    /**
     * @var bool
     */
    private $dead = false;

    /**
     * @var int|null
     */
    private $parent;

    /**
     * @var int|null
     */
    private $poll;

    /**
     * @var int[]
     */
    private $kids = [];

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var int|null
     */
    private $score;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var int[]
     */
    private $parts = [];

    /**
     * @var int|null
     */
    private $descendants;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getBy(): string
    {
        return $this->by;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @return null|string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return bool
     */
    public function isDead(): bool
    {
        return $this->dead;
    }

    /**
     * @return int|null
     */
    public function getParent(): ?int
    {
        return $this->parent;
    }

    /**
     * @return int|null
     */
    public function getPoll(): ?int
    {
        return $this->poll;
    }

    /**
     * @return \int[]
     */
    public function getKids(): array
    {
        return $this->kids;
    }

    /**
     * @return null|string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return \int[]
     */
    public function getParts(): array
    {
        return $this->parts;
    }

    /**
     * @return int|null
     */
    public function getDescendants(): ?int
    {
        return $this->descendants;
    }
}