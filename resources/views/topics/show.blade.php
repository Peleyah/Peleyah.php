@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Tópico {{$topic->id}}</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>{{$topic->topic_title}}</h2>
            <h3>{{$topic->topic_text}}</h3>
            @if($topic->user_id==Auth::user()->id && $topic->closed == 0)
            <form action="/topics/{{$topic->id}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit"> Fechar tópico</button>
            </form>
            @endif
        </div>
    </div>
    <hr>
    <div class="row justify-content-center mx-auto">
        <div class="col-md-12">
            @if(!$topic->closed)
            <h3>Responder</h3>
            <hr>
            <form action="/topic/{{$topic->id}}/answer" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="answertext" class="form-control" id="answer" placeholder="Responda aqui...">
                </div>
                <button type="submit" class="btn btn-primary">Responder</button>
            </form>
            <hr>
            @endif
            @if(count($topic->answers)==0)
            <h4>Não há respostas.</h2>
            @else
            <h2>Respostas:</h2>
            @foreach($topic->answers as $answer)
            <span class="text-muted">{{$answer->created_at}}</span>
            <p>{{$answer->answertext}}</p>
            @endforeach
            @endif
        </div>
    </div>
    <hr>
</div>
@endsection