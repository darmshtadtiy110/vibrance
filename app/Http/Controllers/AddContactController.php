<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Relation;
use Auth;

class AddContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the users list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_users = User::all();
        $users = $all_users->filter(function($value, $key) {
            return $value->email != Auth::User()->email;
        });
        return view('users', ['users' => $users]);
    }

    public function AddContact($contact_id) {
        return Relation::create([
            'user_id' => Auth::User()->id,
            'contact_id' => $contact_id
        ]);
    }
}
