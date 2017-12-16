<?php

namespace TuxBoy\Repositories;

interface RepositoryInterface
{

    /**
     * @return mixed
     */
    public function all();

    /**
     * @return Collection
     */
    public function paginated();

    /**
     * @param array $input
     * @return Model
     */
    public function create(array $input);

}