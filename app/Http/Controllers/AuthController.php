<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  //
  public function login(Request $req)
  {
    $user = User::where('email', $req->email)->first();
    if (!$user) {
      return redirect('/login')->with('error','Bad credentials.');
    }
    if (!Hash::check($req->password,$user->password)) {
      return redirect('/login')->with('error','Bad credentials');
    }
    session(['id' => $user->id]);
    session(['name' => $user->name]);

    return redirect('/');
  }

  public function register(Request $req)
  {
    $user = new User;
    $user->name = $req->name;
    $user->surname = $req->surname;
    $user->nick = $req->name . $req->surname;
    $user->role = 'user';
    $user->email = $req->email;
    $user->password = Hash::make($req->password);
    $user->save();
    session(['id' => $user->id]);
    session(['name' => $user->name]);
    return redirect('/');
  }
  public function logout(Request $req)
  {
    session()->invalidate();
    return redirect('/images');
  }

}
