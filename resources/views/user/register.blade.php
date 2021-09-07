@extends('common.master')
@section('content')

<div class="middle">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-4 mt-md-5">
                <div class="card">
                    <h1>Sign Up</h1><br>
                    <form method="" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter first name"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter last name"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="tel" class="form-control" placeholder="Enter mobile number"/>
                        </div>
                        <div class="form-group">
                            <label>Email id</label>
                            <input type="email" class="form-control" placeholder="Enter email id"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter password"/>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Enter password"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                        </div>
                        <div class="form-group text-center">
                            <span>Already have an account? <a href="{{route('login')}}">Login</a></span>
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
