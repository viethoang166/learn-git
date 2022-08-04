@extends ('main')
@section ('content')

<!--MAIN-->
 <div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Send Email to User</a>
            <div class="form-inline">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <a href="/admin/user">Back</a></button>
            </div>
        </nav>

        @if (session()->has('message'))
            <div class="alert alert-success text-center">
                {{ session()->get('message') }}
            </div>
        @endif

        @if(!empty($users))
        <form method="post">
            <div class="select">
                <select class="custom-select col-12" name="email" required>
                    <option selected value="all_user">Select a User or All</option>
                    @foreach($users as $user)
                        <option value="{{$user['email']}}">{{$user['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">Send</button>

            </div>
            @csrf
        </form>

        @else
        <div class="alert alert-danger text-center">
            Không có dữ liệu người dùng
        </div>
    @endif
    </div>
</div>

<!--/Main-->
@endsection
