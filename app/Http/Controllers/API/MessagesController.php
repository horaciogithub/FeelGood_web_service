<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Forum;

class MessagesController extends Controller
{
   /* Forum messages */
    public function messages() {
        $forum = Forum::all();

        return response()->json($forum);
    }
}
