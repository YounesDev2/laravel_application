@extends('layouts.app')
@section('title', 'Login')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header fw-bold text-center ">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="#" id="login_form">
                            @csrf 
                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control rounded-0" name="email" placeholder="E-mail" id="email" />
                                <div class="invalid-feedback" ></div>
                                </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control rounded-0" name="password" placeholder="Password" id="password"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class=" mb-3">
                                <a class="text-decoration-none" href="/forgot_password">Forget Password ?</a>
                            </div>
                            <div class="mb-3 d-grid">
                                <input type="submit" value="Login" class="btn rounded-0 btn-dark" id="login_btn">
                            </div>
                            <div class="text-secondary text-center">
                                <div>Don't have an account ?
                                  <a href="/register" class="text-decoration-none"> Register Here </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')


@endsection