@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="/topics/create">Criar Tópico</a>
        </div>
    </div>
    <hr>
    @if(count($topics)==0)
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Não existem tópicos.</h2>
        </div>
    </div>
    <hr>
    @else
    <div class="row">
            <div class="col-md-12 text-center">
                <h2>Lista tópicos</h2>
            </div>
        </div>
        <hr>
    <div class="row justify-content-center mx-auto">
        <div class="col-md-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topics as $topic)
                    <tr>
                        <td><a href="/topics/{{$topic->id}}">{{$topic->topic_title}}</a></td>
                        <td>
                            @if(!$topic->closed)
                            <p class="text-success">Aberto</p>
                            @else
                            <p class="text-dark">Fechado</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    <hr>
</div>
@endsection