<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function login(Request $request)
  {
    $user = User::where('username', $request['username'])->first();

    if ($user && $user->password === $request['password']) {
      Auth::login($user);
      $request->session()->regenerate();
      return redirect()->intended('admin');
    }

    return back()->with(
      'error',
      'Username atau password salah',
    );
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
