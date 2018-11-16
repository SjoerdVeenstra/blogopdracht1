@extends('main')

@section('title', '| All posts')

@section('content')

    <div class="row">
        <div class="col-md-10 text-2">
            <h1>All posts</h1>
        </div>

        <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-block button btn-h1-spacing">Create new Post</a>
        </div>
       <div class="col-md-12">
           <hr>
       </div>
    </div> <!-- end of row -->

    <div class="row">
        <div class="col-md-12">

            <div class="page-links">
                {!! $posts->links(); !!}
            </div>

            <table class="table text-2">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                        <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{{ date('M j Y', strtotime($post->created_at)) }}</td>
                        
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn button btn-sm">View</a> 
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn button btn-sm">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="page-links">
            {!! $posts->links(); !!}
            </div>

        </div>
    </div>

@endsection