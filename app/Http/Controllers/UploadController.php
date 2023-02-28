<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{

    public function index(){

        $uploads = Upload::select()->paginate(15);
        return view('upload.index', ['uploads'=>$uploads]);
    }

    public function create(){
        return view('upload.create');
    }


    public function show(Upload $uploads){
        return view('upload.create',['upload'=>$uploads]);
    }

    public function store(Request $request)
    {
        
        $user_id = Auth::user()->id;
        $request->validate([
            
            'title'  => 'required|min:9',
            'upload' => 'required|mimes:pdf,zip,docx|max:3200'
            
        ]);
        
        $path = $request->file('upload')->store('uploads');

 

        $newUpload = Upload::create([

            'title'  => $request->title,
            'path' => $path,
            'user_id' => $user_id

        ]);

        dd($newUpload);

        return redirect(route('user.index'));
    }

    public function destroy(Upload $uploads)
    {
        $uploads->delete();
        return redirect(route('forum.index'));
    }


}
