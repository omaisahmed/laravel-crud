<?php

namespace App\Mixins;

class StrMixin
{
    /**
     * @return \Closure
     */
    public function isLength()
    {
        return function($str, $length) {
            return static::length($str) == $length;
        };
    }
}