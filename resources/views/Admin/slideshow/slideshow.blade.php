@extends('Admin.layout.admin_layout')


@section('content')

    <div class="mt-5 text-center container">
        <a class="btn mx-3 px-4 btn-dark" style="font-size:1.5em " href="{{ url('admin/') }}">Photo 1</a>
        <a class="btn mx-3 px-4 btn-dark" style="font-size:1.5em " href="{{ url('admin/') }}">Photo 2</a>
        <a class="btn mx-2 px-4 btn-dark" style="font-size:1.5em " href="{{ url('admin/') }}">Photo 3</a>
    </div>

@endsection
