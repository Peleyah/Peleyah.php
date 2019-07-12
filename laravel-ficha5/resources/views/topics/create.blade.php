@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Novo tópico</h2>
        </div>
    </div>
    <hr>
    <div class="createForm mx-auto">
        <form action="/topics" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <input type="text" name="topictitle" class="form-control" id="topictitle"
                        placeholder="Título tópico">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <textarea name="topictext" class="form-control" id="topictext"
                        placeholder="Texto tópico"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Criar Tópico</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</div>
@endsection