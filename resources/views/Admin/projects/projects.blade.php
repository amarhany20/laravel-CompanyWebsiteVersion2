@extends('Admin.layout.admin_layout')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container mt-3">
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
                        <th>Arabic Title</th>
                        <th>English Category</th>
                        <th>Arabic Category</th>
                        <th>Photos</th>
                        <th>Show | Hide</th>
                        <th>Edit | Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>Title 1</td>
                        <td>العنوان الاول</td>
                        <td>Category 1</td>
                        <td>النوع الاول</td>
                        <td><a class="btn btn-secondary" href="">Manage Photos</a></td>
                        <td><a class="btn btn-secondary" href="">Show</a></td>
                        <td>
                            <a class="btn btn-light" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
@endsection
