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

        <form method="POST" action="{{ url('admin/projects/store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">

                <div class="mb-3">
                    <label for="mediaUrl" class="form-label">Add Media</label>
                    <input type="file" name="url" class="form-control-file" id="mediaUrl" multiple>

                    <div id="mediaUrlHelp" class="form-text"></div>

                    @error('url')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <label for="mediaAltTag" class="form-label">Media Alt Tag</label>

                <input required name="alt" placeholder="Enter Media Alt Tag" type="text" value="{{ old('alt') }}"
                    class="form-control" id="mediaAltTag">

                <div id="mediaAltTagHelp" class="form-text"></div>

                @error('alt')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="mediaLang2AltTag" class="form-label">Media Language 2 Alt Tag</label>

                <input name="alt" placeholder="Enter Media Language 2 Alt Tag" type="text"
                    value="{{ old('lang2_Alt') }}" class="form-control" id="mediaLang2AltTag">

                <div id="mediaLang2AltTagHelp" class="form-text"></div>

                @error('lang2_Alt')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="mediaLang3AltTag" class="form-label">Media Language 3 Alt Tag</label>

                <input name="alt" placeholder="Enter Media Language 3 Alt Tag" type="text"
                    value="{{ old('lang3_Alt') }}" class="form-control" id="mediaLang3AltTag">

                <div id="mediaLang3AltTagHelp" class="form-text"></div>

                @error('lang3_Alt')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>




            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
