@extends('main')
@section('title', '| Edit Blog Post')

@section('content')

<div class="row">
        <div class="col-md-8">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

            {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div> <!-- end col md 8 -->

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
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                        
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
            </div>
        </div> <!-- end col md 4 -->
    {!! Form::close() !!}
</div>  <!-- end row -->

@endsection