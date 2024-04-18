@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Pagina index</h1>
    <div class="row">
@foreach ($projects as $project)

    <div class="card col-4">
    <img class="img_prj" src="{{$project->img_url}}" alt="">
    <div class="card-body">
        <h3 class="title">Nome: {{$project->name}}</h3>
        <p class="desc">Descrizione: {{$project->description}}</p>
        <p class="used_tech">Tecnologie utilizzate: {{$project->used_tech}}</p>
        <a class="link-repo" href="{{$project->url_repo}}">Link Repo</a>
        <p class="date">Date Pubblicazione: {{$project->date}}</p>
        <a href="{{route('admin.projects.show', $project->id)}}"><button>Più Info</button></a>
    </div>
    </div>
    
    
@endforeach
<a href="{{route('admin.projects.create')}}"><button>Aggiungi altra merda</button></a>

</div>

</div>
@endsection