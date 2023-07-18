@php use Illuminate\Support\Facades\Auth; @endphp
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    @if(Auth::user()->email=="admin@admin.com")
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="/reserve"
                   class="nav-link">Order</a></li>
            <li class="nav-item">
                <a href="/service"
                   class="nav-link">Service</a></li>
            <li class="nav-item">
                <a href="/logout"
                   class="nav-link"> LogOut</a></li>
        </ul>
    @else
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="/order"
                   class="nav-link">Order</a></li>
            <li class="nav-item">
                <a href="/logout"
                   class="nav-link"> LogOut</a></li>
        </ul>
    @endif

</header>
