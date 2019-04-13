<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Forum;

class MessagesController extends Controller
{
   /* Forum messages */
    public function messages() {
         $forum = Forum::join('users', 'forum.author', '=', 'users.email')
            ->select(
                'forum.id',
                'users.img', 
                'users.name', 
                'users.surname', 
                'users.email', 
                'forum.subject')
            ->get();

        return response()->json($forum);
    }

    /* Message registration */
    public function messageRegistration(Request $request)
    {
        
        $comment = Forum::create([
            'author' => $request->author,
            'subject' => $request->subject
        ]);


        return response()->json(['success'=>$comment]);
    }

    /* Delete messages */
    public function messageDelete(Request $request)
    {
        
        $id = $request->id;
        $success = Forum::destroy($id);
        
        return response()->json(['success'=>$success]);
    }
}
