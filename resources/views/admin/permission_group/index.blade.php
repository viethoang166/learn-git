@extends('main')
@section('content')
<!--MAIN-->
    <div class="main">
        <div class="container">
            <nav class="navbar justify-content-between">
                <a class="navbar-brand">Permission Group List</a>
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <!--show user-->
                    <tbody>
                        @if(!empty($permissionGroups))
                        @foreach($permissionGroups as $permissionGroup)
                            <tr>
                                <td>{{$permissionGroup['id']}}</td>
                                <td>{{$permissionGroup['name']}}</td>
                                <td style="width:20vh">
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                                    <button type="button" class="btn btn-info btn-sm">Info</button>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <!--Button-->
                {{ $permissionGroups->links() }}
            </div>
        </div>

@endsection
