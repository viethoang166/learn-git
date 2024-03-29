@extends ('main')
@section ('content')

<!--MAIN-->
<div class="main">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">{{__('product.title1')}}</a>
            <div class="form-inline">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                  </svg>{{__('button.addnew')}}</button>
            </div>
        </nav>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Active</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Milk</td>
                    <td>50$</td>
                    <td style="width:20vh">
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Candy</td>
                    <td>1$</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Cake</td>
                    <td>0.234$</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>

                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--/Main-->

@endsection
