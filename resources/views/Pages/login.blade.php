@extends('main')

@section('title', '| Login')

@section('content')
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-2">Login</h1>
                        <form action="">
                            <div class="from-group text-2">
                                <label name="email">Email:</label>
                                <input id="email" name="email" class="form-control">
                                <label name="password">Password:</label>
                                <input id="password" name="password" class="form-control"><br>
                                <input type="submit" value="Send message" class="btn button">
                            </div>
                        </form>
                    </div>
                </div>
@endsection

   