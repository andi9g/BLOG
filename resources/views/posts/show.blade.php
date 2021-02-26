@extends('adminlte::page')
@extends('template') 
@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="row"> 
    <div class="col-lg-12 margin-tb"> 
    <div class="float-left"> 
    <h2> Show Post</h2> 
    </div> 
    <div class="float-right"> 
    <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back</a> 
    </div> 
    </div> 
    </div> 
    <div class="row"> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
    <div class="form-group"> 
    <strong>Title:</strong> 
    {{ $post->title }} 
    </div> 
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
    <div class="form-group"> 
    <strong>Content:</strong> 
    {{ $post->content }} 
    </div> 
    </div> 
    </div> 
@stop

@section('css')
    
@stop

@section('js')
    
@stop