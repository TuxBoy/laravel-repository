<?php

namespace TuxBoy\Repository\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use TuxBoy\Repository\Repositories\Traits\Relations;

abstract class BaseRepository implements RepositoryInterface
{
    use Relations;

    /**
     * @var Model
     */
    protected $model;

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model
            ->with($this->relations)
            ->orderBy($this->sortBy, $this->sortOrder)
            ->get();
    }

    /**
     * @return Collection
     */
    public function paginated()
    {
        return $this->model->orderBy($this->sortBy, $this->sortOrder)
            ->paginate(Config::get('tuxboy-repository.max_per_pages'));
    }

    /**
     * @param array $input
     * @return Model
     */
    public function create(array $input)
    {
        $model = $this->model;
        $model->fill($input);
        $model->save();

        return $model;
    }

}