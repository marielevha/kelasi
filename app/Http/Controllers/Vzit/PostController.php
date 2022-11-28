<?php

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{

    /**
     * @var PostService
     */
    private $postService;

    public function __construct()
    {
        #Config ACL
        $this->middleware(['role:admin|super-admin'], ['only' => ['index']]);

        #Initialize user service
        $this->postService = new PostService();
    }

    /**
     * @return Response
     */
    public function index()
    {

        $listOfPosts = $this->postService->posts();
        $listOfDisabledTPosts = $this->postService->posts();
        $listTotalOfPosts = 2;//array_merge($listOfPosts, $listOfDisabledTPosts);
        $listOfDraftPosts = [];
        $listOfPublishPosts = [];

        $listOfTickets = [];
        $listOfDisabledTickets = [];
        $listTotalOfTickets = array_merge($listOfTickets, $listOfDisabledTickets);

        $listOfNewTickets = [];
        $listOfQueuedTickets = [];
        $listOfInProgressTickets = [];
        $listOfPendingTickets = [];
        $listOfResolvedTickets = [];
        $listOfClosedTickets = [];

        return view('administrator.post.index', [
            'listOfPosts' => $listOfPosts,
            'listOfDisabledTPosts' => $listOfDisabledTPosts,
            'listTotalOfPosts' => $listTotalOfPosts,
            'listOfDraftPosts' => $listOfDraftPosts,
            'listOfPublishPosts' => $listOfPublishPosts,

            'listOfTickets' => $listOfTickets,
            'listOfDisabledTickets' => $listOfDisabledTickets,
            'listTotalOfTickets' => $listTotalOfTickets,
            'listOfNewTickets' => $listOfNewTickets,
            'listOfQueuedTickets' => $listOfQueuedTickets,
            'listOfInProgressTickets' => $listOfInProgressTickets,
            'listOfPendingTickets' => $listOfPendingTickets,
            'listOfResolvedTickets' => $listOfResolvedTickets,
            'listOfClosedTickets' => $listOfClosedTickets,
        ]);
    }
}
