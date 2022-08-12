@extends ('main')
@section ('content')

<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">{{__('user.title1')}}</a>
            <div class="form-inline">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <a href="/admin/user">{{__('button.back')}}</a></button>
            </div>
        </nav>

        <form method="post">
            {{-- @if ($errors->any())
                <div class="alert alert-danger text-center ">
                    Vui lòng kiểm tra lại dữ liệu
                </div>
            @endif --}}
            @if (session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="form-group">
                <label for="InputName">{{__('user.name')}}</label>
                <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" name="name" value="{{ old('name')}}">
                @error('name')
                <span style="color:red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="InputEmail">{{__('user.email')}}</label>
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email" value="{{ old('email')}}">
                @error('email')
                <span style="color:red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">{{__('user.password')}}</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password')}}">
                        @error('password')
                            <span style="color:red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 ">
                        <label for="exampleInputPassword1">{{__('user.corfirm_password')}}</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="{{ old('password_confirm')}}">
                        @error('password_confirm')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label for="exampleInput">{{__('user.address')}}</label>
                <input type="text" class="form-control" id="address" aria-describedby="emailHelp" name="address" value="{{old('address')}}">
                @error('address')
                <span style="color:red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">{{__('user.fb_link')}}</label>
                <input type="text" class="form-control" id="facebook" aria-describedby="emailHelp" placeholder="https://example.com" name="facebook" value="{{old('facebook')}}">
                @error('facebook')
                <span style="color:red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('user.yt_link')}}</label>
                <input type="text" class="form-control" id="youtube" aria-describedby="emailHelp" placeholder="https://example.com" name="youtube" value="{{old('youtube')}}">
                @error('youtube')
                <span style="color:red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm">{{__('button.save')}}</button>
                <button type="submit" class="btn btn-secondary btn-sm">Reset</button>
            </div>
            @csrf
        </form>
    </div>
</div>
<!--main-->

@endsection
