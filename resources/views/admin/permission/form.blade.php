@extends('main')
@section('content')
<!--MAIN-->
<div class="main">
    @if(empty($permission))
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Create Permission</a>
            <div class="form-inline">
                <button class="btn " type="submit">
                <a href="/admin/permission">Back</a></button>
            </div>
        </nav>

        <form method="post" action="{{route('permission.store')}}">
            @else
            <div class="row">
                <h3 class="col-4">{{__('permission_group.title2')}}</h3>
                <div class="col-6"></div>
                <button class="btn btn-primary" style="width: 100px"><a href="/admin/permission_group" style="color: white">{{__('button.back')}}</a>
                </button>
            </div>

            <form method="post" action="{{route('permission.update',$permission->id)}}">
                @method('PUT')
                @endif
                @if ($errors->any())
                <div class="alert alert-danger text-center ">
                    Vui lòng kiểm tra lại dữ liệu
                </div>
                @endif
                @if (session()->has('success'))
                <div class="alert alert-success text-center">
                    {{ session()->get('success') }}
                </div>
                @endif

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $permission->name ?? '') }}">
                    @error('name')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Key</label>
                    <input type="text" class="form-control" name="key" value="{{ old('key', $permission->key ?? '') }}">
                    @error('key')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                @if(!empty($permissionGroups))
                <div class="form-group">
                    <label>Select Permission Group</label>
                    <select class="form-select" name="permission_group_id">
                        @if(empty($permission))
                        <option selected>--Select--</option>
                        @endif
                        @foreach($permissionGroups as $permissionGroup)
                        <option value="{{$permissionGroup->id}}" <?php if (!empty($permission) && $permissionGroup->id == $permission->permission_group_id) echo "selected" ?>>{{$permissionGroup->name}}</option>
                        @endforeach
                    </select>
                    @error('permission_group_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                @endif

                <div class="pt-4 text-center pb-5">
                    <button type="submit" class="btn btn-primary rounded-pill" style="margin-right: 7px; width: 90px">
                        {{__('button.save')}}
                    </button>
                </div>
                @csrf
            </form>

    </div>
</div>

@endsection
