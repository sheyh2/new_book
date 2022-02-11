<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Books\BookResource;
use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BookController extends AbstractApiController
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getBooks(Request $request): JsonResponse{
        $cacheKey   =  'getBooks@lang=';
        $paginate   = $request->input('paginate', 10);
        $cacheKey   = $cacheKey. $this->lang;

        $data       = Cache::get($cacheKey);
        if (is_null($data)){
            $data   = (new Book())->getItems($paginate);
            Cache::put($cacheKey, $data, now()->addHours(3));
        }
        return self::renderJson(new BookResource($data), 'ok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
