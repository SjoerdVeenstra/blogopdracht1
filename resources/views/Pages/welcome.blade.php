@extends('main')

@section('title', '| Home') 

@section('content')

<div class="container">    
    <div class="row">
        <div class="col-md-12">
                <div class="jumbotron" style="background-color: rgb(221, 68, 68">
                        {{-- <img src="/images/mimrock.jpg" style="vertical-align:center"> --}}
                        <h1 class="display-4 text-center text">Welcome to Mimrock blog!</h1>
                        <p class="lead text-center text"><i>On Mimrock you'll find important news on global events, daily updates on financial news, and true stories about ALIENS.</i></p>
                        <hr class="my-4">
                        {{-- <p>Yes, ALIENS.</p> --}}
                        <a class="btn button btn-lg" href="#" role="button">Learn more</a>
                </div>
        </div>
    </div>
                    
    <div class="row">
        <div class="col-md-8">

                <div class="page-links">
                        {!! $posts->links(); !!}
                </div>

            @foreach($posts as $post)

            <div class="post text-2">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>    
            <a href="#" class="btn button btn-lg">Read more</a>
            </div>

            <hr>
            
            @endforeach

            <div class="page-links">
                    {!! $posts->links(); !!}
            </div>

        </div>

        <div class="col-md-1"></div>
        <div class="col-md-2 button" style="background-color: rgb(221, 68, 68)">
            <b>Sidebar</b>
        </div>
    </div> 
@endsection

