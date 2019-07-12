@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>{{ __("fakenews.edit")}}</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <hr>
    <div class="createForm mx-auto">
        <form action="/news/{{$new->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <input type="text" name="title" class="form-control" id="title" value="{{$new->title}}"
                        placeholder="Título notícia">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <textarea name="summary" class="form-control" id="summary"
                        placeholder="Sumário noticia">{{$new->summary}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <textarea name="content" class="form-control" id="content"
                        placeholder="Conteúdo noticia">{{$new->content}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">{{ __("fakenews.create")}}</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</div>
@endsection