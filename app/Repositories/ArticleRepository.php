<?php

namespace App\Repositories;


use App\Models\Article;

class ArticleRepository extends Repository
{
    protected $model;

    /**
     * ArticleRepository constructor.
     * @param Article $model
     */
    public function __construct(Article $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function store($newArticle)
    {
        $article = new $this->model;

        foreach ($newArticle->title as $locale => $value) {
            $article->translateOrNew($locale)->title = $value;
        }

        foreach ($newArticle->content as $locale => $value) {
            $article->translateOrNew($locale)->content = $value;
        }

        $article->save();

        return $article;

    }

    public function update($updatedArticle, $article)
    {


        foreach ($updatedArticle->title as $locale => $value) {
            $article->translateOrNew($locale)->title = $value;
        }
        foreach ($updatedArticle->content as $locale => $value) {
            $article->translateOrNew($locale)->content = $value;
        }

        $article->save();
        return $article;

    }
}
