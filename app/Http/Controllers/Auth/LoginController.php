<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Lib\Layout\Content;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
	
	protected function authenticated(Request $request, $user)
	{
		if ($user->id !==1)
		{
			$this->guard()->logout();
			return notification('用户不存在','error');
		}else{
			return notification('1','login',$this->redirectTo);
		}
		
	}
	
	/**
	 * Show the application's login form.
	 *
	 * @param Content $content
	 * @return Content
	 */
	public function showLoginForm(Content $content)
	{
		config()->set('ghost.class','hold-transition login-page');
		return $content->title('login')->view('auth.login');
	}
}
