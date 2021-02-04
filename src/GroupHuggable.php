<?php

namespace Astrotomic\Hug;

/**
 * A GroupHuggable object expresses mutual affection with other huggable objects.
 */
interface GroupHuggable extends Huggable
{
    /**
     * Hugs a series of huggable objects.
     *
     * When called, this object MUST invoke the hug() method of every object
     * provided. The order of the collection is not significant, and this object
     * MAY hug each of the objects in any order provided that all are hugged.
     *
     * @param \Astrotomic\Hug\Huggable[] $huggables An array or iterator of objects implementing the Huggable interface.
     */
    public function groupHug(array $huggables);
}