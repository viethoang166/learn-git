@extends('main')
@section('content')
<!--MAIN-->
    <div class="main">
        <div class="container">
            <nav class="navbar justify-content-between">
                <a class="navbar-brand">{{__('permission_group.title')}}</a>
                <div class="form-inline">
                    <button class="btn " type="submit">
                        <a href="/admin/permission_group/create">{{__('button.addnew')}}</a></button>
                    </div>
                </nav>

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">{{__('permission_group.id')}}</th>
                            <th scope="col">{{__('permission_group.name')}}</th>
                            <th scope="col">{{__('permission_group.action')}}</th>
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
                                        <a href="{{route('permission_group.edit', $permissionGroup->id)}}">{{__('button.edit')}}</a>
                                    </button>
                                    <button class="btn btn-info btn-sm">
                                        <a href="{{route('permission_group.show', $permissionGroup->id)}}">{{__('button.information')}}</a>
                                    </button>
                                    <form class="d-inline" method="POST" action="{{route('permission_group.destroy', $permissionGroup->id)}}">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-secondary btn-sm">{{__('button.delete')}}</button>
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
