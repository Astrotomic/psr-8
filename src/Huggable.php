<?php

namespace Astrotomic\Hug;

/**
 * A huggable object expresses mutual affection with another huggable object.
 */
interface Huggable
{
    /**
     * Hugs this object.
     *
     * All hugs are mutual. An object that is hugged MUST in turn hug the other
     * object back by calling hug() on the first parameter. All objects MUST
     * implement a mechanism to prevent an infinite loop of hugging.
     *
     * @param \Astrotomic\Hug\Huggable $h The object that is hugging this object.
     */
    public function hug(Huggable $h);
}