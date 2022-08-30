@extends('Admin.layout.admin_layout')

@section('content')
    <div class="container mt-3">
        <h1 class="text-center mb-3">All Projects</h1>
        <div class=" row">
            <div class="col-sm-6 mb-3">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                </div>
            </div>
            <div class="col d-flex align-items-center justify-content-end col-sm-6 mb-3">
                <a class="mb-2 btn btn-primary" href="">Create a category</a>

            </div>

        </div>

        <div class="table-responsive-lg">
            <table style="min-width: 900px;border-radius: 4px; overflow:hidden;"
                class="table table-dark table-hover text-center align-middle">
                <thead class="align-middle">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Reset Password</th>
                        <th>Activate | Deactivate</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>name surname</td>
                        <td>name@gmail.com</td>
                        <td>
                            <a class="btn btn-light" href="">Password Reset</a>
                        </td>
                        <td>
                            <a class="btn btn-light" href="">Activate | Deactivate</a>
                        </td>
                        <td>
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
