@extends('main')
@section('content')
<!--MAIN-->
<div class="main">
    @if(empty($permissionGroup))
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Create Permission Group</a>
            <div class="form-inline">
                <button class="btn " type="submit">
                <a href="/admin/permission_group">Back</a></button>
            </div>
        </nav>

        <form method="post" action="{{route('permission_group.store')}}">
            @else
            <div class="row">
                <h3 class="col-4">{{__('permission_group.title2')}}</h3>
                <div class="col-6"></div>
                <button class="btn btn-primary" style="width: 100px"><a href="/admin/permission_group" style="color: white">{{__('button.back')}}</a>
                </button>

            </div>
            @if (session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
            @endif
            <form method="post" action="{{route('permission_group.update',$permissionGroup->id)}}">
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
                    <label>{{__('permission_group.name')}}</label>
                    @if(empty($permissionGroup))
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    @else
                    <input type="text" class="form-control" name="name" value="{{ $permissionGroup['name'] }}">
                    @endif
                    @error('name')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
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
