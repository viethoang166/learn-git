@extends('main')
@section('content')
<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Information</a>
            <div class="form-inline">
                <button class="btn " type="submit">
                <a href="/admin/user/add">Add New</a></button>
            </div>
        </nav>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Create at</th>
                    <th scope="col">Update at</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($permissionGroup))
                <tr>
                    <td>{{$permissionGroup['id']}}</td>
                    <td>{{$permissionGroup['name']}}</td>
                    <td>{{$permissionGroup['created_at']}}</td>
                    <td>{{$permissionGroup['updated_at']}}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
