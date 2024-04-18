@extends('layouts.app')


@section('content')
    <h1>Test show page</h1>
    <div class="container">
        <div class="row">
    
        <div class="card col-4">
        <img class="img_prj" src="{{$project->img_url}}" alt="">
        <div class="card-body">
            <h3 class="title">Nome: {{$project->name}}</h3>
            <p class="desc">Descrizione: {{$project->description}}</p>
            <p class="used_tech">Tecnologie utilizzate: {{$project->used_tech}}</p>
            <a class="link-repo" href="{{$project->url_repo}}">Link Repo</a>
            <p class="date">Date Pubblicazione: {{$project->date}}</p>
            <a href="{{route('admin.projects.edit', $project->id)}}"><button>Modifica</button></a>
            <a href=""><button>Cancella</button></a>
        </div>

    </div>
    </div>
@endsection