@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header fw-bold text-center ">
                        <h3>Forgot Password</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="#" id="forgot_form">
                            @csrf 
                            <div class="mb-3 text-secondary">
                                Enter your e-mail adress and we will send you a link to reset your password
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control rounded-0" name="email" placeholder="E-mail" id="email" />
                                <div class="invalid-feedback" ></div>
                            </div>
                            <div class="mb-3 d-grid">
                                <input type="submit" value="Reset password" class="btn rounded-0 btn-dark" id="forgot_pwd">
                            </div>
                            <div class="mb-3">
                            <div> Back to 
                                <a class="text-decoration-none" href="/login"> Login Page</a>
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