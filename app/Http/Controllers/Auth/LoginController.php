<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;
use Redirect;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
        return 'email';
    }
    public function showLoginForm()
    {
      
        return view('auth.login');
    }
    public function login(Request $request)
    {
       
        $this->validate($request, [
                    'email' => 'required|max:255',
                    'password' => 'required|max:255'
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $authUser = User::where('email', $request->email)->first();
        if (isset($authUser)) {
                    // $password = md5('aFGQ475SDsdfsaf2342' . $request->password . $authUser->usrPasswordSalt);
                    $password = $request->password;
        if (Auth::attempt($credentials)) {
                    return redirect('/admin');
                    }
        else {
                return 'oops something happend 1: '.$this->username() . ' - ' . $password;
            }
        }
        return Redirect::back()->withErrors(['msg' => 'oops something happend 2 ']);
        
    }
}
