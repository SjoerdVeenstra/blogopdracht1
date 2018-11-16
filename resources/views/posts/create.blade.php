@extends('main')

@section('title', '| Create new post')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 text-2">
        <h1>Create new post</h1>
        <hr>

        {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
            {{ FORM::label('title', 'Title:') }}
            {{ FORM::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
            
            {{ FORM::label('body', "Post-Body:") }}
            {{ FORM::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
            {{ FORM::submit('Create Post', array('class' => 'btn button btn-lg btn-block', 'style' => 'margin-top:20px;')) }}
            
            {!! Form::close() !!}   
    </div>
    <div class="col-md-2"></div>
</div>

@endsection

@section('scripts')

{{!! Html::script('js/parsley.min.js') !!}}

@endsection