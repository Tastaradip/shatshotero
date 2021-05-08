@extends('web.common.master')

@section('content')

		<!-- Account Area Start -->
        <div class="account-area ptb-80">
            <div class="container">
                <div class="row">
                	<div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="{{route('web.customer.login.submit')}}" class="login-side" method="post">
                            {{ csrf_field() }}
                            <div class="login-reg">
                                <h3>Login</h3>
                                <div class="input-box mb-20">
                                    <label class="control-label">E-Mail</label>
                                    <input type="email" placeholder="E-Mail" name="email" class="info">
                                </div>
                                <div class="input-box">
                                    <label class="control-label">Password</label>
                                    <input type="password" placeholder="Password" name="password" class="info">
                                </div>
                            </div>
                            <div class="frm-action">
                                <div class="input-box tci-box">
                                    <button type="submit" class="btn-def btn2">Login</button>
                                </div>
                                <!-- <span>
                             	<input class="remr" type="checkbox"> Remember me 
                         		</span>
                                <a href="#" class="forgotten forg">Forgotten Password</a> -->
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- Account Area End -->

@endsection