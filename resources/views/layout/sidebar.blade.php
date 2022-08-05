<!--sidebar-->
<div class="sidebar">
    <div class="menu">
        <p id="head-sidebar">System</p>
        <a href="{{ url('admin/user/') }}">
            <p id="list-sidebar">User management</p>
        </a>
        <a href="{{ url('admin/role/') }}">
            <p id="list-sidebar">Role management</p>
        </a>
        <a href="{{ url('admin/permission/') }}">
            <p id="list-sidebar">Permission management</p>
        </a>

        <p id="head-sidebar">Catalog</p>
        <a href="{{ url('admin/product/') }}">
            <p id="list-sidebar">Product management</p>
        </a>
        <a href="{{ url('admin/category/') }}">
            <p id="list-sidebar">Category management</p>
        </a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        <button>Logout</button>
        @csrf
    </form>
</div>
<!--/sidebar-->
