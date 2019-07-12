@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="/products/create">Criar produto</a>
        </div>
    </div>
    <hr>
    @if(count($products)==0)
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Não existem produtos.</h2>
        </div>
    </div>
    <hr>
    @else
    <div class="row">
            <div class="col-md-12 text-center">
                <h2>Products list</h2>
            </div>
        </div>
        <hr>
    <div class="row justify-content-center mx-auto">
        <div class="col-md-6">
        @foreach($products as $product)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td><a href="/product/{{$product->id}}">{{$product->name}}</a></td>
                        <td>
                            <img style="max-width:150px" src="/images/{{$product->image}}">
                        </td>
                        
                    </tr>
                </tbody>
            </table>
            @endforeach
            <hr>
    @endif
        </div>
    </div>
</div>
@endsection