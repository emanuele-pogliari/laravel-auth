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

            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                  <div class="modal-content">
        
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Project</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
        
                    <div class="modal-body">
                      Are you sure to delete {{$project->name}}
                    </div>
        
                    <div class="modal-footer">
        
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            
                            <button class="btn btn-danger">Delete</button>
                        </form>
        
                    </div>
        
                  </div>
                </div>
            </div>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Cancella</button>
        </div>

    </div>
    </div>
@endsection