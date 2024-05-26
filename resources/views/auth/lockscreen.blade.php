<x-auth.main>
    <div class="card overflow-hidden">
        <div class="bg-primary-subtle">
            <div class="row">
                <div class="col-7">
                    <div class="text-primary p-4">
                        <h5 class="text-primary">Lock screen</h5>
                        <p>Enter your password to unlock the screen!</p>
                    </div>
                </div>
                <div class="col-5 align-self-end">
                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div>
                <a href="index.html">
                    <div class="avatar-md profile-user-wid mb-4">
                        <span class="avatar-title rounded-circle bg-light">
                            <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                        </span>
                    </div>
                </a>
            </div>
            <div class="p-2">
                <form action="{{ route('unlock') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="user-thumb text-center mb-4">
                        <img src="{{ auth()->user()->getAvatar() }}" class="rounded-circle img-thumbnail avatar-md"
                            alt="thumbnail">
                        <h5 class="font-size-15 mt-3">{{ auth()->user()->name }}</h5>
                    </div>

                    <div class="mb-3">
                        <label for="userpassword">Password</label>
                        <input type="password" name="password" class="form-control" id="userpassword"
                            placeholder="Enter password" autocomplete="new-password">
                    </div>

                    <div class="text-end">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit"
                            autocomplete="on">Unlock</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <div class="mt-5 text-center">

        <div>
            <p>Don't have an account ? <a href="{{ route('register') }}" class="fw-medium text-primary">
                    Signup now </a> </p>
            <p>©
                <script>
                    document.write(new Date().getFullYear())
                </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i>
                by Themesbrand
            </p>
        </div>
    </div>
</x-auth.main>
