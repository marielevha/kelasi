<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 20/11/22
 * Time: 04:40
 */

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use App\Services\TagService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * @var TagService
     */
    private $tagService;

    public function __construct()
    {
        #Config ACL
        $this->middleware(['role:admin|super-admin'], ['only' => ['index']]);
        $this->middleware(['role:admin|super-admin'], ['only' => ['create', 'store']]);
        $this->middleware(['role:admin|super-admin'], ['only' => ['edit', 'update']]);

        #Initialize user service
        $this->tagService = new TagService();
    }

    public function index()
    {
        $listOfTags = $this->tagService->index();
        $listOfDisabledTags = $this->tagService->get_all_deleted_tags();


        return view('administrator.tag.index')
            ->with('listOfTags', $listOfTags)
            ->with('listOfDisabledTags', $listOfDisabledTags);
    }

    /**
     * @return Response
     */
    public function create()
    {
        return view('administrator.tag.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:tags'],
        ]);

        $response = $this->tagService->create_tag($request);

        if (!$response) {
            /**
             * Something Wrong - 400 - 401
             */
            return back()->with('error', trans('user.errors.something-wrong'));
        }

        /**
         * Redirect to List of Tags
         */
        return redirect()
            ->route('tag.index')
            ->with('info', trans('tag.info.tag-created', ['name' => $request->name]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $slug
     * @return Response
     */
    public function edit($slug)
    {
        $tag = $this->tagService->get_by_slug($slug);
        if (is_null($tag)) {
            return abort(404);
        }

        return view('administrator.tag.create', [
            'tag' => $tag,
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
            'name' => ['required', 'string', 'max:255'],
        ]);
        if (!$slug == Str::slug($request->name, '-')) {
            $request->validate([
                'name' => ['required', 'string', 'max:255', 'unique:tags'],
            ]);
        }

        $tag = $this->tagService->update_tag_by_slug($slug, $request);
        /**
         * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
         */
        if (!$tag) {
            return abort(404);
        }

        /**
         * REDIRECT USER TO LOGOUT ROUTE
         */
        return redirect()->route('tag.index')->with('info', trans('commercial-agencies.infos.agency-updated', ['name' => $request->name]));
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function disable_with_slug(Request $request, $slug)
    {
        $response = $this->tagService->disable_tag_by_slug($slug);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('tag.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('tag.index')->with('info', trans('commercial-agencies.infos.agency-disabled-confirm', ['name' => $request->name]));
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function enable_with_slug(Request $request, $slug)
    {
        $response = $this->tagService->enable_tag_by_slug($slug);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('tag.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('tag.index')->with('info', trans('commercial-agencies.infos.agency-enabled-confirm', ['name' => $request->name]));
    }
}
