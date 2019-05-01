<div id="sidebar-content">
    <!--=== Navigation ===-->
    <ul id="nav">
        <li>
            <a href="{{ route('admin') }}">
                <i class="icon-dashboard"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="">
                <i class="icon-calendar"></i>
                Manajemen Data Admin/Staf
            </a>
        </li>
        <li>
            <a href="{{ route('car.index') }}">
                <i class="icon-truck"></i>
                Data Seluruh Mobil
            </a>
        </li>
        <li>
            <a href="{{-- {{ route('admin.extra.index') }} --}}">
                <i class="icon-list"></i>
                Types & Extra
            </a>
        </li>
        <li>
            <a href="{{-- {{ route('admin.location.index') }} --}}">
                <i class="icon-map-marker"></i>
                Office Locations
            </a>
        </li>
        <li>
            <a href="{{-- {{ route('admin.user.index') }} --}}">
                <i class="icon-group"></i>
                Users
            </a>
        </li>
        <li>
            <a href="{{-- {{ route('admin.settings.index') }} --}}">
                <i class="icon-cogs"></i>
                Settings
            </a>
        </li>
    </ul>
    <div class="sidebar-widget align-center">
        <div class="btn-group" data-toggle="buttons" id="theme-switcher">
            <label class="btn active">
                <input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
            </label>
            <label class="btn">
                <input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
            </label>
        </div>
    </div>

</div>
<div id="divider" class="resizeable"></div>
