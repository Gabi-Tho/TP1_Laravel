<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $what = "what is happening";
        // return ($what);
        return view('auth.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20'
        ]);

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();


        return redirect()->back()->withSuccess('You were succesfully added');
    }

    // public function store(Request $request)
    // {
    //     $newEtudiant = Etudiant::create([

    //         'nom'  => $request->nom,
    //         'addresse' => $request->addresse,
    //         'phone' => $request->phone,
    //         'email' => $request->email,
    //         'date_naissance' => $request->date_naissance,
    //         'ville_id' => $request->ville_id,


    //     ]);

    //     // return $newBlogPost->id;
    //     return redirect(route('etudiant.show',$newEtudiant->id));
    // }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function authentication(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users',
            'password' => 'required|min:6|max:20'
        ]);
        $credentials = $request->only('email', 'password');
        if(!Auth::validate($credentials)):
            return redirect(route('login'))->withErrors('oops! Try again')->withInput();//withErrors se trouve dans resources/lang/auth/    'failed' => 'These credentials do not match our records.',
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user, $request->get('remember'));
        
        return redirect()->intended('dashboard')->withSuccess('Signed in');
       
    }

    public function dashboard(){

        $name = 'guest';

        if(Auth::check()){
            return view('dashboard');
        }

        return redirect(route('login'));

    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }



}
