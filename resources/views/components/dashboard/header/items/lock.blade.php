<form action="{{ route('lock') }}" method="post">
    @csrf
    <button class="dropdown-item" type="submit"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
        <span key="t-lock-screen">Lock
            screen</span></button>
</form>
