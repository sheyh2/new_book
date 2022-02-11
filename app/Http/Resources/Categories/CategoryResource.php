<?php

namespace App\Http\Resources\Categories;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Category $this */
        return [
            'id'   => $this->getId(),
            'name' => $this->getName($request->header('lang', 'ru'))
        ];
    }
}
