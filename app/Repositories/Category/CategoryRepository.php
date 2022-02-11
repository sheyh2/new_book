<?php

namespace App\Repositories\Category;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{
    // Actions

    public function store(CategoryDto)

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Category::query()
            ->orderBy('id')
            ->get();
    }

    /**
     * @param int $id
     * @return Category
     */
    public function getById(int $id): Category
    {
        /** @var Category|null $category */
        $category = Category::query()
            ->where($id)
            ->first();

        if (is_null($category)){
            throw new \RuntimeException('Категория не найдено');
        }

        return $category;
    }

    /**
     * @return $this
     */
    public static function getInstance(): CategoryRepository
    {
        return new static();
    }
}
