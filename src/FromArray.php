<?php

namespace HackerNewsApi;

/**
 * Class FromArray
 *
 * Can be used to denormalize an object from an array.
 *
 * @package HackerNewsApi
 */
trait FromArray
{
    /**
     * @param array $data
     * @return static
     */
    public static function fromArray(array $data)
    {
        $object = new static;

        foreach ($data as $key => $value) {
            if (property_exists(self::class, $key)) {
                $object->$key = $value;
            }
        }

        return $object;
    }
}
