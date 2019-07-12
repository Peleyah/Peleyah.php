{{-- Apenas uma noticia --}}
<div class="card mb-2">
    <div class="card-header">
    <a href="/news/{{$new->id}}">
        <div class="float-left">
            {{$new->title}}
        </div>
    </a>
        <div class="float-right">
            {{$new->created_at->format("d-m-Y")}}
        </div>
    </div>
    <div class="card-body">
        {{$new->summary}}
    </div>
    <div class="card-footer">
        {{$new->author->name}}
    </div>
</div>