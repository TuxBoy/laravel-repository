<?php

namespace TuxBoy\Repositories\Traits;

/**
 * Trait Relations
 */
trait Relations
{

    /**
     * @var string[]
     */
    public $relations = [];

    /**
     * @param string[] $relations
     */
    public function setRelations(array $relations = null)
    {
        $this->relations = $relations;
    }
}