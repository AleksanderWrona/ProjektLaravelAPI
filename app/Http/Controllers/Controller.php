<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class CommentController extends Controller
{ 
    public function show($postId, $commentId)
    {
        return 'Comment: ' . $commentId . ' from post: ' . $postId;
    }
}