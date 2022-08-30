@extends('Admin.layout.admin_layout')

@section('header')
@endsection

@section('content')
    <div class="container mt-3">
        <h1 class="text-center mb-3">Create a Category</h1>


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
                <label for="categoryLang2Name" class="form-label"></label>
                <input name="lang2_Name" required type="text" placeholder="أدخل اسم الفئة"
                    value="{{ old('lang2_Name') }}" class="form-control" id="categoryLang2Name">
                <div id="categoryNameHelp" class="form-text"></div>
                @error('lang2_Name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="mb-3">
                <label for="categoryLang3Name" class="form-label text-end d-block">language 3 name</label>
                <input name="lang3_Name" required type="text" placeholder="language 3 name"
                    value="{{ old('lang3_Name') }}" class="form-control text-end" id="categoryLang3Name">
                <div id="categoryNameHelp" class="form-text"></div>
                @error('lang3_Name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> --}}

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection