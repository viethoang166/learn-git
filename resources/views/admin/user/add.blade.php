@extends ('main')
@section ('content')

<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Create a User</a>
            <div class="form-inline">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <a href="/admin/user">Back</a></button>
            </div>
        </nav>
        <form>
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">Password Confirm</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adress</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Facebook link</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="https://example.com">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Youtube</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="https://example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="add-button">
                <button type="button" class="btn btn-primary btn-sm">Save</button>
                <button type="button" class="btn btn-secondary btn-sm">Reset</button>
            </div>
        </form>
    </div>
</div>
<!--main-->

@endsection
