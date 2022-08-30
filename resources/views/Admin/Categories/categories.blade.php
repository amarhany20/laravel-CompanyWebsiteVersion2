@extends('Admin.layout.admin_layout')

@section('content')
    <div class="container mt-3">
        <h1 class="text-center mb-3">All Categories</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class=" row">
            <div class="col-sm-6 mb-3">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                </div>
            </div>
            <div class="col d-flex align-items-center justify-content-end col-sm-6 mb-3">
                <a class="mb-2 btn btn-primary" href="/admin/categories/create">Create a category</a>

            </div>

        </div>

        <div class="table-responsive-lg">
            <table style="min-width: 900px;border-radius: 4px; overflow:hidden;"
                class="table table-dark table-hover text-center ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>English Name</th>
                        <th>Language 2 Name</th>
                        <th>Language 3 Name</th>
                        <th>Edit | Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($categories->count() == 0)
                        <tr>
                            <td colspan="5">No Categories to display.</td>
                        </tr>
                    @endif
                    @foreach ($categories as $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->lang2_Name }}</td>
                            <td>{{ $category->lang3_Name }}</td>
                            <td>
                                <a class="btn btn-light"
                                    href="{{ url('/admin/categories/edit/' . $category->id) }}">Edit</a>
                                <form class="d-inline" action="{{ url('/admin/categories/delete/'.$category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" onclick="return confirm('Are you sure you want to delete this Category? It will delete all projects linked to it!');" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
            {{ $categories->links() }}

        </div>
    </div>
@endsection
