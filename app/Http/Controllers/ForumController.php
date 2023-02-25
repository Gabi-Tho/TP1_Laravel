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


        return view('user.show');

    }



    public function store(Request $request)
    {


            $newArticle = Forum::create([
                'title' => $request->title,
                'article'  => $request->article,
                'forum_user_id' => Auth::user()->id
            ]);

            return redirect(route('forum.index', $newArticle->id));
            // return $request;
    }


    public function index(){
        return view('user.index');
    }

}
