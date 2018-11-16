@extends('main')

@section('title', '| Signup')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-2">Sign up</h1>
                <form action="">
                    <div class="from-group text-2">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                        <label name="password">Password:</label>
                        <input id="password" name="password" class="form-control">
                        <label name="repeatpassword">Repeat password:</label>
                        <input id="repeatpassword" name="repeatpassword" class="form-control"><br>
                        <input type="submit" value="Send message" class="btn button">
                    </div>
                </form>
            </div>
        </div>
@endsection

