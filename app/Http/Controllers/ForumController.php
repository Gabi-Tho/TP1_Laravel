<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Forum;


class ForumController extends Controller
{

    public function create()
    {   

        $user_id = Auth::user()->id;

        $articles = Forum::all()
        ->where('forum_user_id', '=', $user_id );

        return view('user.show', ['articles'=>$articles]);
    }



    public function store(Request $request)
    {

        $user_id = Auth::user()->id;

            $newArticle = Forum::create([
                'title' => $request->title,
                'article'  => $request->article,
                'forum_user_id' => Auth::user()->id
            ]);

            $articles = Forum::all()
                        ->where('forum_user_id', '=', $user_id );
            
        
            // return redirect(route('forum.index', $newArticle->id,));

    }


    public function index(){

        $articles = Forum::all();
        return view('forum.index', ['articles'=>$articles]);

    }

    // public function destroy(Forum $article)
    // {
    //     $article->delete();

    //     return redirect(route('forum.index'));
    // }



}
