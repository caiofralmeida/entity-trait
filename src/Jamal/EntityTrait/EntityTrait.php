<?php

namespace Jamal\EntityTrait;

trait EntityTrait
{
    /**
     * @param  array $data
     * @return Object
     */
    public function exchangeArray(array $data)
    {
        foreach ($data as $property => $value) {
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }

        return $this;
    }
}
