@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($news as $new)
            @include("news._news")
        @endforeach
        <div>
            <a href="/news">{{ __('fakenews.allnews') }}</a>
        </div>
        </div>
    </div>
</div>
@endsection