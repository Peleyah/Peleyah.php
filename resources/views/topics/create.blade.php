@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <form action="/topics" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="topictitle" class="form-control" id="topictitle" placeholder="Título tópico">
            </div>
            <div class="form-group">
                <textarea name="topictext" class="form-control" id="topictext" placeholder="Texto tópico"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Criar Tópico</button>
        </form>
    </div>
</div>
@endsection