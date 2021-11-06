<?php

namespace App\Repositories;


use App\Models\Pessoa;

class AbstractyRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function resolveModel()
    {
        return app($this->model);
    }

    public function all() {

        return $this->model->all();
    }
}
