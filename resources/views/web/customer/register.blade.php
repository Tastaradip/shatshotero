@extends('web.common.master')

@section('content')

		<!-- Account Area Start -->
        <div class="account-area ptb-80">
            <div class="container">
                <div class="row">
                	<div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="{{route('web.customer.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="login-reg">
                                <h3>Register</h3>
                                <div class="input-box mb-20">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="info" placeholder="Name" name="name">
                                </div>
                                <div class="input-box mb-20">
                                    <label class="control-label">E-Mail</label>
                                    <input type="email" class="info" placeholder="E-Mail" name="email">
                                </div>
                                <div class="input-box">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="info" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="frm-action">
                                <div class="input-box tci-box">
                                    <button type="submit" class="btn-def btn2">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- Account Area End -->

@endsection