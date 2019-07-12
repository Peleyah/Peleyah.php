@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-8 mx-auto">
                @include("layouts._alerts")
            <div class="card mb-2 text-center">
                <div class="card-header">
                    <div class="float-left">
                        {{$new->title}}
                    </div>
                    <div class="float-right">
                        {{$new->created_at->format("d-m-Y")}}
                    </div>
                </div>
                <div class="card-body">
                    {{$new->content}}
                </div>
                <div class="card-footer">
                    <div class="float-left">
                        {{$new->author->name}}
                    </div>
                    @if(!Auth::guest() && $new->author_id==Auth::user()->id)
                    <div class="row float-right">
                        <div class="d-inline-flex">
                            <div class="col-md-6">

                            <form action="/news/{{$new->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">{{ __("fakenews.delete")}}</button>
                            </form>

                            </div>

                            <div class="col-md-6">

                            <a href="/news/{{$new->id}}/edit" class="btn btn-primary">{{ __("fakenews.edit")}}</a>

                            </div>
                            
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection