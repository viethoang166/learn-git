<!--sidebar-->
<div class="sidebar">
    <div class="menu">
        <p id="head-sidebar">{{ __('messages.head_sidebar1') }}</p>
        <a href="{{ url('admin/user/') }}">
            <p id="list-sidebar">{{ __('messages.sidebar1') }}</p>
        </a>
        <a href="{{ url('admin/role/') }}">
            <p id="list-sidebar">{{ __('messages.sidebar2') }}</p>
        </a>
        <a href="{{ url('admin/permission/') }}">
            <p id="list-sidebar">{{ __('messages.sidebar3') }}</p>
        </a>
        <a href="{{ url('admin/permission_group/') }}">
            <p id="list-sidebar">{{ __('messages.sidebar4') }}</p>
        </a>

        <p id="head-sidebar">{{ __('messages.head_sidebar2') }}</p>
        <a href="{{ url('admin/product/') }}">
            <p id="list-sidebar">{{ __('messages.sidebar5') }}</p>
        </a>
        <a href="{{ url('admin/category/') }}">
            <p id="list-sidebar">{{ __('messages.sidebar6') }}</p>
        </a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        <button>{{__('messages.logout')}}</button>
        @csrf
    </form>
    <a href="{{ route('lang',['lang' => 'vi']) }}">VI</a>

    <a href="{{ route('lang',['lang' => 'en' ]) }}">EN</a>

</div>
<!--/sidebar-->
