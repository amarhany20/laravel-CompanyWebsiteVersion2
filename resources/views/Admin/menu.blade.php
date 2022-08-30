@extends('Admin.layout.admin_layout')


@section('content')

    <div class="mt-5 text-center container">
        <a class="btn mx-3 px-4 btn-dark" style="font-size:1.5em " href="{{ url('admin/admins') }}">Admins</a>
        <a class="btn mx-3 px-4 btn-dark" style="font-size:1.5em " href="{{ url('admin/slideshow') }}">Slidshow</a>
        <a class="btn mx-2 px-4 btn-dark" style="font-size:1.5em " href="{{ url('admin/projects') }}">Projects</a>
    </div>

@endsection
