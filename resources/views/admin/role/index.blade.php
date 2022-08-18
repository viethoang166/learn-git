@extends('main')
@section('content')

<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">{{__('role.title1')}}</a>
            <div class="form-inline">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <a href="{{route('role.create')}}">{{__('button.addnew')}}</a></button>
            </div>
        </nav>
        @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($roles))
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td style="width:20vh">
                        <button class="btn btn-sm">
                            <a href="{{route('role.edit', $role->id)}}">Edit</a></button>
                        <button class="btn btn-info btn-sm">
                            <a href="{{route('role.show', $role->id)}}">Show</a></button>
                        <form class="d-inline" method="post" action="{{ route('role.destroy', $role->id) }}">
                            @csrf
                            @method('Delete')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-secondary btn-sm">{{__('button.delete')}}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        {{ $roles->links() }}
    </div>
</div>

<!--/Main-->

@endsection
