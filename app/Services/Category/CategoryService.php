<?php

namespace App\Services\Category;

use App\Http\Requests\Category\CategoryFormRequest;
use App\Models\Category\Category;
use App\Repositories\Category\CategoryRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CategoryService
{
    // Actions

    public function store(CategoryFormRequest $request)
    {
        CategoryRepository::getInstance()->store();
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return CategoryRepository::getInstance()->getAll();
    }

    /**
     * @param int $id
     * @return Category
     */
    public function getById(int $id): Category
    {
        return CategoryRepository::getInstance()->getById($id);
    }

    /**
     * @return $this
     */
    public static function getInstance(): CategoryService
    {
        return new static();
    }
}
