@extends('Admin.layout.admin_layout')

@section('content')
    <div class="container mt-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h1 class="text-center mb-3">All Project Images</h1>

        <div class="row">
            <div class="col-sm-6 mb-3">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                </div>
            </div>

            <div class="col d-flex justify-content-end col-sm-6 mb-3">

                <a class="mb-2 btn btn-primary" href="{{ url('admin/projectimages/create') }}">Add an Image</a>

            </div>


        </div>

        <div class="table-responsive">
            <table style="min-width: 950px;border-radius: 4px; overflow:hidden;"
                class="table table-dark table-hover text-center ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <td>Alt Tag</td>
                        <th>Edit | Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($projectImages->count() == 0)
                        <tr>
                            <td colspan="8">No Images to display.</td>
                        </tr>
                    @endif
                    @foreach ($projectImages as $image)
                        <tr>
                            <th>{{ $image->id }}</th>
                            <td>{{ $image->alt }}</td>

                            <td>
                                <a class="btn btn-light" href="{{ url('/admin/projectimages/edit/' . $project->id) }}">Edit</a>
                                <form class="d-inline" action="{{ url('/admin/projectimages/delete/' . $project->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit"
                                        onclick="return confirm('Are you sure you want to delete this project?');"
                                        class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
            {{ $projectImages->links() }}

        </div>
    </div>
@endsection
