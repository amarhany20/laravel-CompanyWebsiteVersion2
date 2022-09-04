@extends('Admin.layout.admin_layout')

@section('header')
@endsection

@section('content')
    <div class="container mt-3">
        <h1 class="text-center mb-3">Edit Project</h1>

        <a class="btn btn-dark text-decoration-none mb-3" href="/admin/categories"><i class="bi bi-arrow-90deg-left"></i>
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


        <form method="POST" action="{{ url('admin/projects/update/' . $project->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="projectTitle" class="form-label">Title*</label>
                <input required name="title" placeholder="Enter the Title" type="text" value="{{ old('title',$project->title) }}"
                    class="form-control" id="projectTitle">
                <div id="projectTitleHelp" class="form-text"></div>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="projectLang2Title" class="form-label">Language 2 Title</label>
                <input name="lang2_Title" placeholder="Enter Language 2 Title" type="text"
                    value="{{ old('lang2_Title',$project->lang2_Title) }}" class="form-control" id="projectLang2Title">
                <div id="projectLang2TitleHelp" class="form-text"></div>
                @error('lang2_Title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="projectLang3Title" class="form-label">Language 3 Title</label>
                <input name="lang3_Title" placeholder="Enter Language 3 Title" type="text"
                    value="{{ old('lang3_Title',$project->lang3_Title) }}" class="form-control" id="projectLang3Title">
                <div id="projectLang3TitleHelp" class="form-text"></div>
                @error('lang3_Title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="projectSubtitle" class="form-label">Subtitle*</label>
                <input required name="subtitle" placeholder="Enter Subtitle" type="text" value="{{ old('subtitle',$project->subtitle) }}"
                    class="form-control" id="projectSubtitle">
                <div id="projectLang3TitleHelp" class="form-text"></div>
                @error('subtitle')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="projectLang2Subtitle" class="form-label">Language 2 Subtitle</label>
                <input name="lang2_Subtitle" placeholder="Enter Language 2 Subtitle" type="text"
                    value="{{ old('lang2_Subtitle',$project->lang2_Subtitle) }}" class="form-control" id="projectLang2Subtitle">
                <div id="projectLang2SubtitleHelp" class="form-text"></div>
                @error('lang2_Subtitle')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="projectLang3Subtitle" class="form-label">Language 3 Subtitle</label>
                <input name="lang3_Subtitle" placeholder="Enter Language 3 Subtitle" type="text"
                    value="{{ old('lang3_Subtitle',$project->lang3_Subtitle) }}" class="form-control" id="projectLang3Subtitle">
                <div id="projectLang3SubtitleHelp" class="form-text"></div>
                @error('lang3_Subtitle')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="projectContent" class="form-label">Content*</label>
                <textarea required name="content" placeholder="Enter Content" id="projectContent" class="form-control" name="content"
                    id="projectContent" rows="5">{{ old('content',$project->content) }}</textarea>
                <div id="projectContentHelp" class="form-text"></div>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="projectLanguage2Content" class="form-label">Language 2 Content</label>
                <textarea name="lang2_Content" placeholder="Enter Language 2 Content" id="projectLanguage2Content" class="form-control"
                    name="lang2_Content" id="" rows="5">{{ old('lang2_Content',$project->lang2_Content) }}</textarea>
                <div id="projectLanguage2ContentHelp" class="form-text"></div>
                @error('lang2_Content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="projectLanguage3Content" class="form-label">Language 3 Content</label>
                <textarea name="lang3_Content" placeholder="Enter Language 3 Content" id="projectLanguage3Content"
                    class="form-control" name="lang3_Content" id="" rows="5">{{ old('lang3_Content',$project->lang3_Content) }}</textarea>
                <div id="projectLanguage3ContentHelp" class="form-text"></div>
                @error('lang3_Content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="categorySelect" class="form-label">Language 3 Content</label>
                <select id="categorySelect" class="form-control" name="category_id">
                    <option>Select a category</option>
                    @foreach ($categories as $category)
                        <option {{ $project->category->id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                            name: {{ $category->name }} || lang 2 name: {{ $category->lang2_name }} || lang 3 name:
                            {{ $category->lang3_name }} </option>
                    @endforeach
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </select>
            </div>

            <div class="mb-3">
                <label for="Projectdate" class="form-label">Date*</label>
                <input required name="date" placeholder="Enter Date" type="date" value="{{ old('date',$project->date) }}"
                    class="form-control" id="Projectdate">
                <div id="ProjectdateHelp" class="form-text"></div>
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Projectdate" class="form-label">Thumbnail Photo</label>
                empty for now
                <div id="ProjectdateHelp" class="form-text"></div>
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectThumbnailAlt" class="form-label">Thumbnail Alt</label>
                <input name="thumbnail_Alt" placeholder="Enter Thumbnail Alt" type="text"
                    value="{{ old('thumbnail_Alt',$project->thumbnail_Alt) }}" class="form-control" id="ProjectThumbnailAlt">
                <div id="ProjectThumbnailAltHelp" class="form-text"></div>
                @error('thumbnail_Alt')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectLang2ThumbnailAlt" class="form-label">Language 2 Thumbnail Alt</label>
                <input name="lang2_Thumbnail_Alt" placeholder="Enter language 2 Thumbnail Alt" type="text"
                    value="{{ old('lang2_Thumbnail_Alt',$project->lang2_Thumbnail_Alt) }}" class="form-control" id="ProjectLang2ThumbnailAlt">
                <div id="ProjectLang2ThumbnailAltHelp" class="form-text"></div>
                @error('lang2_Thumbnail_Alt')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectLang3ThumbnailAlt" class="form-label">Language 3 Thumbnail Alt</label>
                <input name="lang3_Thumbnail_Alt" placeholder="Enter language 3 Thumbnail Alt" type="text"
                    value="{{ old('lang3_Thumbnail_Alt',$project->lang3_Thumbnail_Alt) }}" class="form-control" id="ProjectLang3ThumbnailAlt">
                <div id="ProjectLang3ThumbnailAltHelp" class="form-text"></div>
                @error('lang3_Thumbnail_Alt')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectMetaTitle" class="form-label">Meta Title</label>
                <input name="meta_Title" placeholder="Enter Meta Title" type="text" value="{{ old('meta_Title',$project->meta_Title) }}"
                    class="form-control" id="ProjectMetaTitle">
                <div id="ProjectMetaTitleHelp" class="form-text"></div>
                @error('meta_Title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectLang2MetaTitle" class="form-label">Language 2 Meta Title</label>
                <input name="lang2_Meta_Title" placeholder="Enter Language 2 Meta Title" type="text"
                    value="{{ old('lang2_Meta_Title',$project->lang2_Meta_Title) }}" class="form-control" id="ProjectLang2MetaTitle">
                <div id="ProjectLang2MetaTitleHelp" class="form-text"></div>
                @error('lang2_Meta_Title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectLang3MetaTitle" class="form-label">Language 3 Meta Title</label>
                <input name="lang3_Meta_Title" placeholder="Enter Language 3 Meta Title" type="text"
                    value="{{ old('lang3_Meta_Title',$project->lang3_Meta_Title) }}" class="form-control" id="ProjectLang3MetaTitle">
                <div id="ProjectLang3MetaTitleHelp" class="form-text"></div>
                @error('lang3_Meta_Title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectMetaDescription" class="form-label">Meta Description</label>
                <input name="meta_Description" placeholder="Enter Meta Description" type="text"
                    value="{{ old('meta_Description',$project->meta_Description) }}" class="form-control" id="ProjectMetaDescription">
                <div id="ProjectMetaDescriptionHelp" class="form-text"></div>
                @error('meta_Description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectLang2MetaDescription" class="form-label">Language 2 Meta Description</label>
                <input name="lang2_Meta_Description" placeholder="Enter Language 2 Meta Description" type="text"
                    value="{{ old('lang2_Meta_Description',$project->lang2_Meta_Description) }}" class="form-control" id="ProjectLang2MetaDescription">
                <div id="ProjectLang2MetaDescriptionHelp" class="form-text"></div>
                @error('lang2_Meta_Description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ProjectLang3MetaDescription" class="form-label">Language 3 Meta Description</label>
                <input name="lang3_Meta_Description" placeholder="Enter Language 3 Meta Description" type="text"
                    value="{{ old('lang3_Meta_Description',$project->lang3_Meta_Description) }}" class="form-control" id="ProjectLang3MetaDescription">
                <div id="ProjectLang3MetaDescriptionHelp" class="form-text"></div>
                @error('lang3_Meta_Description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
