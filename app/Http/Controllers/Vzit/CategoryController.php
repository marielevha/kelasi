<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 20/11/22
 * Time: 04:40
 */

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    private $categoryService;

    public function __construct()
    {
        #Config ACL
        $this->middleware(['role:admin|super-admin'], ['only' => ['index']]);
        $this->middleware(['role:admin|super-admin'], ['only' => ['create', 'store']]);
        $this->middleware(['role:admin|super-admin'], ['only' => ['edit', 'update']]);

        #Initialize user service
        $this->categoryService = new CategoryService();
    }

    public function index()
    {
        $listOfCategories = $this->categoryService->index();
        $listOfDisabledCategories = $this->categoryService->get_all_deleted_categories();


        return view('administrator.category.index')
            ->with('listOfCategories', $listOfCategories)
            ->with('listOfDisabledCategories', $listOfDisabledCategories);
    }

    /**
     * @return Response
     */
    public function create()
    {
        return view('administrator.category.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:categories'],
        ]);

        $response = $this->categoryService->create_category($request);

        if (!$response) {
            /**
             * Something Wrong - 400 - 401
             */
            return back()->with('error', trans('user.errors.something-wrong'));
        }

        /**
         * Redirect to List of Categories
         */
        return redirect()
            ->route('category.index')
            ->with('info', trans('category.info.category-created', ['name' => $request->title]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $slug
     * @return Response
     */
    public function edit($slug)
    {
        $category = $this->categoryService->get_by_slug($slug);
        if (is_null($category)) {
            return abort(404);
        }

        return view('administrator.category.create', [
            'category' => $category,
        ]);
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);
        if (!$slug == Str::slug($request->title, '-')) {
            $request->validate([
                'title' => ['required', 'string', 'max:255', 'unique:categories'],
            ]);
        }

        $category = $this->categoryService->update_category_by_slug($slug, $request);
        /**
         * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
         */
        if (!$category) {
            return abort(404);
        }

        /**
         * REDIRECT USER TO LOGOUT ROUTE
         */
        return redirect()->route('category.index')->with('info', trans('category.info.category-updated', ['name' => $request->title]));
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function disable_with_slug(Request $request, $slug)
    {
        $response = $this->categoryService->disable_category_by_slug($slug);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('category.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('category.index')->with('info', trans('category.info.category-disabled-confirm', ['name' => $request->title]));
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function enable_with_slug(Request $request, $slug)
    {
        $response = $this->categoryService->enable_category_by_slug($slug);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('category.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('category.index')->with('info', trans('category.info.category-enabled-confirm', ['name' => $request->title]));
    }
}
