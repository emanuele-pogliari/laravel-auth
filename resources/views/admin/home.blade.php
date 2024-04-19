@extends('layouts.app')


@section('content')
    <h1>Test admin page</h1>
    qui per vedere tutti i progetti<link rel="stylesheet" href="">
    <a href="{{route('admin.projects.index')}}"><button>Clicca</button></a>
@endsection