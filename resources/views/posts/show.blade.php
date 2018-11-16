@extends('main')
@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1 class="text-2">{{ $post->title }}</h1>

            <p class="lead text-2">{{ $post->body }}</p>
        </div>

        <div class="col-md-4">
            <div class="well" style="background-color:lightcyan; padding:10px; border-radius:10px;">
            
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                        <dt>Last updated:</dt>
                        <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block edit-delete-spacing')) !!}
                        
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!} 
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block edit-delete-spacing']) !!}
						{!! Form::close() !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection