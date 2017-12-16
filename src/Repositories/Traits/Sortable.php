<?php

namespace TuxBoy\Repository\Repositories\Traits;

trait Sortable
{

    /**
     * @var string
     */
    public $sortBy = 'created_at';

    /**
     * @var string
     */
    public $sortOrder = 'asc';

    /**
     * @param string $sortOrder
     */
    public function setSortOrder(string $sortOrder = 'desc')
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * @param string $sortBy
     */
    public function setSortBy(string $sortBy = 'created_at')
    {
        $this->sortBy = $sortBy;
    }
}