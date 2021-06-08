<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Notifications\NewCommentPosted;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }

    public function affiche_forum(){
        $posts=Post::latest()->paginate(3);
       
        return view("visiteur.page_forum", compact('posts'));
    }

    public function store_message(Request $request){

        request()->validate([
            'titre'=> ['required','string'],
            'message'=> ['required','string'],
          ]);
        Post::create([
            'titre'=>$request->titre,
            'message'=>$request->message,
            'user_id'=>Auth::user()->id,
        ]); 
        return redirect()->back();
    }

    //Commentaires
    public function store_comment(Post $post)
    {
        request()->validate([
            'content'=>  'required|min:5' 
          ]);
        $comment=new Comment();
              $comment->content=request('content');
              $comment->user_id = auth()->user()->id;
        $post->Comments()->save($comment);
    
        //notifications stocke en db
        $post->user->notify(new NewCommentPosted($post, auth()->user()));
        return redirect()->back();

    }
    public function reponse(Comment $comment){
         request()->validate([
          'replyComment'=> 'required|min:5' 
         ]);

         $replyComment = new Comment();
         $replyComment->content=request('replyComment');
         $replyComment->user_id = auth()->user()->id;
          $comment->Comments()->save($replyComment); 
          return redirect()->back();
    }

    
   
}
