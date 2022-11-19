<?php

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:category.read'], ['only' => ['index']]);
        $this->middleware(['permission:category.write'], [
            'only' => ['create', 'store', 'edit', 'update']
        ]);
        $this->middleware(['permission:category.delete'], ['only' => 'destroy']);
        $this->middleware(['permission:category.restore'], ['only' => 'restore']);
    }

    public function index()
    {
        $data = [
            'filters' => Request::all('search', 'trashed'),
            'categories' => Category::orderByTitle()
                ->with('user')
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($category) => [
                    'id' => $category->id,
                    'title' => $category->name,
                    'created_at' => $category->created_at,
                    'deleted_at' => $category->deleted_at,
                    'user' => $category->user ? $category->user->only('name') : null,
                ]
            )
        ];
        return Inertia::render('VZIT/Categories/Index', $data);
    }
}
