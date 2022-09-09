@extends('Admin.layout.admin_layout')

@section('header')
@endsection

@section('content')
    <div class="container mt-3">
        <h1 class="text-center mb-3">Add an Image</h1>
        <a class="btn btn-dark text-decoration-none mb-3" href="/admin/projects"><i class="bi bi-arrow-90deg-left"></i>
            Back</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('admin/projectmedia/store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">

                <div class="mb-3">
                    <label for="mediaUrl" class="form-label">Add Media</label>
                    <input type="file" name="mediaUrl" class="form-control-file" id="mediaUrl" multiple>

                    <div id="mediaUrlHelp" class="form-text"></div>

                    @error('url')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
