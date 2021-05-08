<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;


class CustomerRegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/customer/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function guard()
	{
	    return Auth::guard('customer');
	}

    protected function registered(Request $request, $user)
    {
        return Auth::loginUsingId($user->id);
    }

    public function showRegisterForm()
    {
            return view('web.customer.register');
    }

    public function create(Request $request)
    {   
        $request->validate([
                'name' => 'required | string | min:4',
                'email' => 'required | email | unique:customers,id',
                'password' => 'required | min:6',
            ]);
        $input = $request->only(['name','email']);
        if ($request->has('password')) {
                $input = $input + ['password' => Hash::make($request->password)];
            }

        $data['customer'] = Customer::create($input);  
        $this->guard()->login($data['customer']);
  
        return redirect()->route('web.index')->with('message', 'You have been registered successfully.')
        ->with('message-type', 'success');
                
    }

    

    
}
