<a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('pengajar.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
{{ Auth::user()->nama }} Pengajar
