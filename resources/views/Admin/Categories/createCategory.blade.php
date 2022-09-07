@extends('Admin.layout.admin_layout')

@section('header')
@endsection

@section('content')
    <div class="container mt-3">
        <h1 class="text-center mb-3">Create a Category</h1>

        <a class="btn btn-dark text-decoration-none mb-3" href="/admin/categories"><i class="bi bi-arrow-90deg-left"></i> Back</a>

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


        <form method="POST" action="{{ url('admin/categories/store') }}">
            @csrf

            <div class="mb-3">
                <label for="categoryName" class="form-label">Name</label>
                <input required name="name" placeholder="Enter the category Name" type="text"
                    value="{{ old('name') }}" class="form-control" id="categoryName">
                <div id="categoryNameHelp" class="form-text"></div>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="categoryLang2Name" class="form-label">Language 2 Name</label>
                <input name="lang2_Name" type="text" placeholder="Enter Language 2 Name" value="{{ old('lang2_Name') }}"
                    class="form-control" id="categoryLang2Name">
                <div id="categoryNameHelp" class="form-text"></div>
                @error('lang2_Name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="categoryLang3Name" class="form-label ">Language 3 Name</label>
                <input name="lang3_Name" type="text" placeholder="Enter Language 3 Name" value="{{ old('lang3_Name') }}"
                    class="form-control" id="categoryLang3Name">
                <div id="categoryNameHelp" class="form-text"></div>
                @error('lang3_Name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
