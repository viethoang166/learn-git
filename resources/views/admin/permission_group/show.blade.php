@extends('main')
@section('content')
<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">{{__('permission_group.information')}}</a>
            <div class="form-inline">
                <button class="btn " type="submit">
                <a href="/admin/user/add">{{__('button.addnew')}}</a></button>
            </div>
        </nav>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">{{__('permission_group.id')}}</th>
                    <th scope="col">{{__('permission_group.name')}}</th>
                    <th scope="col">{{__('permission_group.create_at')}}</th>
                    <th scope="col">{{__('permission_group.update_at')}}</th>
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
