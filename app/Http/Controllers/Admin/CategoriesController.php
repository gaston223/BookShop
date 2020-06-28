<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CreateCategoryRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * @param CreateCategoryRequest $request
     * @return RedirectResponse|Redirector
     */
    public function store(CreateCategoryRequest $request)
    {
        Categories::create([
            'name' => $request->name
        ]);
//        session()->flash('success', 'La catégorie a été crée avec succès !');
        return redirect(route('dashboard'));
    }

}
