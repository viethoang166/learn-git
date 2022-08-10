@extends('main')
@section('content')
<!--MAIN-->
    <div class="main">
        <div class="container">
            <nav class="navbar justify-content-between">
                <a class="navbar-brand">Permission Group List</a>
                <div class="form-inline">
                    <button class="btn " type="submit">
                        <a href="/admin/permission_group/create">Add New</a></button>
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
                                    <button class="btn btn-sm">
                                        <a href="{{route('permission_group.edit', $permissionGroup->id)}}">Edit</a>
                                    </button>
                                    <button class="btn btn-info btn-sm">
                                        <a href="{{route('permission_group.show', $permissionGroup->id)}}">Info</a>
                                    </button>
                                    <form class="d-inline" method="POST" action="{{route('permission_group.destroy', $permissionGroup->id)}}">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-secondary btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                        @if (session()->has('success'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                    </tbody>
                </table>
                <!--Button-->
                {{ $permissionGroups->links() }}
            </div>
        </div>

@endsection
