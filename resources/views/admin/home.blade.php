@extends('layouts.admin')


@section('content')

<div class="container-fluid">

<div class="row">
    <div id="sidebar" class="col-3">
@include('admin/partials/side')
</div>
<div class="col-9">
    <h1>Benvenuto {{auth()->user()->name}}</h1>
    qui per vedere tutti i progetti<link rel="stylesheet" href="">
    <a href="{{route('admin.projects.index')}}"><button>Clicca</button></a>
</div>
</div>
</div>
@endsection

