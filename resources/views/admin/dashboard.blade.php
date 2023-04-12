@extends('admin.layouts.app')

@section('content')

<main>
    <div class="container-fluid px-4">
        <div class="d-flex mt-4 mb-4 align-items-center">
            <h2>Admin Dashboard</h2>
            <a class="btn btn-success ms-auto" href="#" data-toggle="modal" data-target=".student-modal">Add Student &nbsp;<i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Student List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Institute</th>
                            <th>Institute Id</th>
                            <th>Phone</th>
                            <th>Batch</th>
                            <th>Session</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>A</td>
                            <td>24/25</td>
                            <td>edit-view-delete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
