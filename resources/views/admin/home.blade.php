@extends('layouts.admin')


@section('content')

<div class="container-fluid">

<div class="row">
    <div id="sidebar">
        @include('admin/partials/side')
    </div>
    <div id="main-content">
        <h1>Welcome Back {{auth()->user()->name}}!</h1>
            <div class="card">
                <h2>Click here to see all projects</h2>
            </div>
            <div class="card">
                <h2>Click here to see all projects</h2>
            </div>
            <div class="card">
                <h2>Click here to see all projects</h2>
            </div>
    <a href="{{route('admin.projects.index')}}"><button class="btn btn-primary">Clicca</button></a>
</div>
</div>
</div>
@endsection

