@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>{{ __('fakenews.create') }}</h2>
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
        <form action="/news" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <input type="text" name="title" class="form-control" id="title"
                        placeholder="{{ __('fakenews.title') }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <textarea name="summary" class="form-control" id="summary"
                        placeholder="{{ __('fakenews.summary') }}"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <textarea name="content" class="form-control" id="content"
                        placeholder="{{ __('fakenews.content') }}"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">{{ __('fakenews.create') }}</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</div>
@endsection