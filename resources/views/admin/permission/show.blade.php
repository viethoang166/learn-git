@extends('main')
@section('content')
<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Permission Group</a>
            <div class="form-inline">
                <button class="btn " type="submit">
                <a href="/admin/permission">Back</a></button>
            </div>
        </nav>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Key</th>
                    <th scope="col">Permission Group</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($permission))
                <tr>
                    <td>{{$permission->id}}</td>
                    <td>{{$permission->name}}</td>
                    <td>{{$permission->key}}</td>
                    <td>{{$permission->permissionGroup->name}}</td>
                    <td>{{$permission->created_at}}</td>
                    <td>{{$permission->updated_at}}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
