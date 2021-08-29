<?php

namespace App\Services;

use App\Repositories\ArticleRepository;

class ArticleService
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get($cols = ['*'])
    {
        return $this->repository->query()->get($cols);
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($date, $id)
    {
        $article = $this->find($id);

        return $this->repository->update($date, $article);
    }
    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

}
