@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header fw-bold text-center ">
                        <h3>Rest your password</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="#" id="reset_form">
                            @csrf 

                            <div class="form-group mb-3">
                                <input type="text" class="form-control rounded-0" name="npass" placeholder="New Password"  />
                                <div class="invalid-feedback" ></div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control rounded-0" name="cnpass" placeholder="Confirm New Password"  />
                                <div class="invalid-feedback" ></div>
                            </div>
                            <div class="mb-3 d-grid">
                                <input type="submit" value="Update password" class="btn rounded-0 btn-dark" id="reset_pwd">
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