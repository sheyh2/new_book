<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Category\CategoryFormRequest;
use App\Models\Category\Category;
use App\Services\Category\CategoryService;
use Illuminate\Http\RedirectResponse;

class CategoryController extends AbstractAdminController {

    public function index(){
        $error = $categories = null;

        try {
            $categories = CategoryService::getInstance()->getAll();
        }catch (\Exception $exception){
            $error = $exception->getMessage();
        }

        return view(
            'admin.categories.index',
            [
                'categories' => $categories,
                'error'      => $error
            ]
        );
    }

    public function create(){
        return view('admin.categories.create');
    }

    /**
     * @param CategoryFormRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryFormRequest $request): RedirectResponse{
        try {
            CategoryService::getInstance()->store($request);

            return redirect()->back()->with(
                'success',
                'Успешно добавлен'
            );
        }catch (\Exception $exception){
            return redirect()->back()->with(
                'error',
                $exception->getMessage()
            );
        }
    }

    public function edit($id){
        $category = (new Category())->getBothItem($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update($id, CategoryFormRequest $request){
        $data = [
            'name'        => $request->input('name'),
            'lang'        => $request->input('lang'),
            'category_id' => $id,
        ];
        $response = (new CategoryService())->update($id, $data);
        dd($response);
    }
}
