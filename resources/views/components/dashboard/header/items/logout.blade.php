
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button class="dropdown-item" type="submit"><i
        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></button>
</form>
