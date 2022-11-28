<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 20/11/22
 * Time: 04:40
 */

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    public function __construct()
    {
        #Config ACL
        $this->middleware(['role:admin|super-admin', 'permission:user.read'], ['only' => ['index']]);
        $this->middleware(['role:admin|super-admin', 'permission:user.write'], ['only' => ['create', 'store']]);
        $this->middleware(['role:admin|super-admin', 'permission:user.write'], ['only' => ['edit', 'update']]);

        #Initialize user service
        $this->userService = new UserService();
    }

    /**
     * @return Response
     */
    public function index()
    {
        $counterUsers = 0;

        $listOfViewers = $this->userService->viewers();
        $counterUsers += count($listOfViewers);

        $listOfEnterprises = $this->userService->enterprise();
        $counterUsers += count($listOfEnterprises);

        $listOfAdministrators = $this->userService->admin();
        $counterUsers += count($listOfAdministrators);

        $listOfDisabledUsers =$this->userService->get_all_deleted_users();

        return view('administrator.user.index')
            ->with('listOfViewers', $listOfViewers)
            ->with('listOfEnterprises', $listOfEnterprises)
            ->with('listOfAdministrators', $listOfAdministrators)
            ->with('listOfDisabledUsers', $listOfDisabledUsers)
            ->with('counterUsers', $counterUsers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param string $profile
     * @return Response
     */
    public function create($profile)
    {
        return view('administrator.user.create', ['profile' => $profile]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|null
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'profile' => ['required', 'string', 'max:255'],
        ]);

        $response = $this->userService->create_user($request);

        if (!$response) {
            return back()->with('error', trans('user.errors.something-wrong'));
        }

        /**
         * Redirect to List of Users
         */
        return redirect()->route('user.index')->with('info', trans('user.infos.user-created', ['email' => $user->email]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $profile
     * @param $email
     * @return Response
     */
    public function edit($profile, $email)
    {
        switch ($profile)
        {
            case env('PROFILE_VIEWER') :
                $user = $this->userService->find_user_by_email($email);
                break;
            case env('PROFILE_ENTERPRISE') :
                $user = $this->userService->find_user_by_email($email);
                break;
            case env('PROFILE_ADMIN') :
                $user = $this->userService->find_user_by_email($email);
                break;
            case env('PROFILE_SUPER_ADMIN') :
                $user = $this->userService->find_user_by_email($email);
                break;
            default:
                /**
                 * RETURN A FLASH MESSAGES TO DISPLAY BAD GET REQUEST
                 * OR REDIRECT TO 404 PAGE
                 */
                return abort(404);
        }

        //dd($user);
        if (is_null($user)) {
            return abort(404);
        }
        return view('administrator.user.create', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $profile
     * @param $email
     * @return Response
     */
    public function update(Request $request, $profile, $email)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        $response = $this->userService->update_user_by_email($email, $request);

        /**
         * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
         */
        if (!$response) {
            return abort(404);
        }

        /**
         * REDIRECT USER TO LOGOUT ROUTE
         */
        return redirect()->route('user.index')->with('info', trans('user.infos.user-updated', ['email' => $email]));
    }

    /**
     * @param string $email
     * @return RedirectResponse
     */
    public function disable_with_email($email)
    {
        $response = $this->userService->disable_user_by_email($email);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('user.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('user.index')->with('info', trans('user.infos.account-disabled-confirm', ['email' => $email]));
    }

    /**
     * @param string $email
     * @return RedirectResponse
     */
    public function enable_with_email($email)
    {
        $response = $this->userService->enable_user_by_email($email);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('user.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('user.index')->with('info', trans('user.infos.account-enabled-confirm', ['email' => $email]));
    }

    /**
     * Access to Account Page with Current User
     *
     * @return Response
     */
    public function index_account()
    {
        return view('administrator.account.index');
    }

    /**
     *  Edit Current User From Account Page
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update_account(Request $request)
    {
        switch (strtolower(auth()->user()->profile))
        {
            case env('PROFILE_ADMIN'):
                $user = $this->userService->edit_user_by_email(auth()->user(), $request);
                break;
            case env('PROFILE_SUPER_ADMIN'):
                $user = $this->userService->edit_user_by_email(auth()->user(), $request);
                break;
            case env('PROFILE_ENTERPRISE'):
                $user = $this->userService->edit_user_by_email(auth()->user(), $request);
                break;
            case env('PROFILE_VIEWER'):
                $user = $this->userService->edit_user_by_email(auth()->user(), $request);
                break;
            default:
                /**
                 * RETURN A FLASH MESSAGES TO DISPLAY BAD GET REQUEST
                 * OR REDIRECT TO LOGIN
                 */
                return abort(404);
        }

        /**
         * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
         */
        if (is_null($user)) {
            return abort(404);
        }

        /**
         * REDIRECT USER TO LOGOUT ROUTE
         */
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
