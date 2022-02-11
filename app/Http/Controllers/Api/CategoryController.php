<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Categories\CategoryResource;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class CategoryController extends AbstractApiController
{
   const cacheKey = 'category@lang={key}';

    /**
     * @return JsonResponse
     */
    public function getCategories(): JsonResponse{
        $cacheKey = Str::replaceArray('key', [$this->lang], self::cacheKey);

        $data = Cache::get($cacheKey);
        if (is_null($data)){
            $data = (new Category())->getItems($this->lang);
//            Cache::put($cacheKey, $data, now()->addHours(3));
        }
        return self::renderJson(CategoryResource::collection($data), 'ok');
    }

    /**
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function getCategory($id, Request $request): JsonResponse{
        $cacheKey = 'getCategory@id={key}';
        $cacheKey = Str::replaceArray('{key}', [$id], $cacheKey);

        $data = Cache::get($cacheKey);
        if (is_null($data)){
            $data = Category::query()
                ->with(['relationCategoryText'])
                ->where('id', '=', $id)
                ->first();
//            Cache::put($cacheKey, $data, now()->addHours(2));
        }
        if (is_null($data))
            return self::renderJson([], 'Not found!', 404);
        return self::renderJson(new CategoryResource($data), 'success');
    }
}
