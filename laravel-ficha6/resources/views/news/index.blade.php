@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @if(!Auth::guest())
            <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="/news/create">{{ __("fakenews.create")}}</a>
            </div>
        @endif
    </div>
    <hr>
    @include("layouts._alerts")
    @if(count($news)==0)
    <div class="row">
        <div class="col-md-12 text-center">
            <h2> {{ __("fakenews.no-list")}} </h2>
        </div>
    </div>
    <hr>
    @else
    <div class="row">
            <div class="col-md-12 text-center">
                <h2>{{ __("fakenews.list")}}</h2>
            </div>
        </div>
        <hr>
    <div class="row justify-content-center mx-auto">
        <div class="col-md-6">
                    @foreach($news as $new)
                        @include("news._news")
                    @endforeach
            <hr>
        </div>
    @endif
    </div>
    <div class="row justify-content-center mx-auto">
        {{ $news->links() }}
    </div>
</div>
@endsection