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
use Illuminate\Http\Response;

class DashboardController extends Controller
{

    public function __construct()
    {
        #Config ACL
        $this->middleware(['role:admin|super-admin', 'permission:user.read'], ['only' => ['index']]);
    }

    /**
     * @return Response
     */
    public function index()
    {
        return view('administrator.dashboard.index');
    }
}
