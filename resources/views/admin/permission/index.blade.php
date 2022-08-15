@extends ('main')
@section ('content')

<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">{{__('permission.title1')}}</a>
            <div class="form-inline">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <a href="{{route('permission.create')}}">{{__('button.addnew')}}</a></button>
            </div>
        </nav>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($permissions))
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{$permission['id']}}</td>
                        <td>{{$permission['name']}}</td>
                        <td style="width:20vh">
                            <button class="btn btn-sm">
                                <a href="{{route('permission.edit', $permission->id)}}">{{__('button.edit')}}</a>
                            </button>
                            <button class="btn btn-info btn-sm">
                                <a href="{{route('permission.show', $permission->id)}}">{{__('button.information')}}</a>
                            </button>
                            <form class="d-inline" method="POST" action="{{route('permission.destroy', $permission->id)}}">
                                @csrf
                                @method("delete")
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-secondary btn-sm">{{__('button.delete')}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        {{ $permissions->links() }}
    </div>
</div>

<!--/Main-->

@endsection
