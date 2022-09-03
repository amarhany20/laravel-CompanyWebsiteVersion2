@extends('Admin.layout.admin_layout')

@section('content')
    <div class="container mt-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h1 class="text-center mb-3">All Projects</h1>

        <div class="row">
            <div class="col-sm-6 mb-3">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                </div>
            </div>

            <div class="col d-flex justify-content-end col-sm-6 mb-3">

                <a class="mb-2 btn btn-primary" href="{{ url('admin/projects/create') }}">Create a Project</a>
                <a class="mb-2 mx-2 btn btn-primary" href="{{ url('admin/categories') }}">Categories</a>

            </div>


        </div>

        <div class="table-responsive">
            <table style="min-width: 950px;border-radius: 4px; overflow:hidden;"
                class="table table-dark table-hover text-center ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>English Title</th>
                        <td>Language 2 Title</td>
                        <td>Language 3 Title</td>
                        <th>Category</th>
                        <th>Photos</th>
                        <th>Show | Hide</th>
                        <th>Edit | Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($projects->count() == 0)
                        <tr>
                            <td colspan="8">No Projects to display.</td>
                        </tr>
                    @endif
                    @foreach ($projects as $project)
                        <tr>
                            <th>{{ $project->id }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->lang2_Title }}</td>
                            <td>{{ $project->lang3_Title }}</td>
                            <td>{{ $project->category->name }}</td>
                            <td><a class="btn btn-secondary" href="">Manage Photos</a></td>
                            <td><a class="btn btn-secondary" href="">Show</a></td>
                            <td>
                                <a class="btn btn-light" href="{{ url('/admin/projects/edit/' . $project->id) }}">Edit</a>
                                <form class="d-inline" action="{{ url('/admin/projects/delete/' . $project->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit"
                                        onclick="return confirm('Are you sure you want to delete this project? It will delete all projects linked to it!');"
                                        class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
            {{ $projects->links() }}

        </div>
    </div>
@endsection
