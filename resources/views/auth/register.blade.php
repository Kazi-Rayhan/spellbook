<x-auth.main>
    <div class="card overflow-hidden">
        <div class="bg-primary-subtle">
            <div class="row">
                <div class="col-7">
                    <div class="text-primary p-4">
                        <h5 class="text-primary">Free Register</h5>
                        <p>Get your free Skote account now.</p>
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
                            <img src="assets/images/logo.svg" alt="" class="rounded-circle"
                                height="34">
                        </span>
                    </div>
                </a>
            </div>
            <div class="p-2">
                <form class="needs-validation" novalidate action="{{ route('register') }}"
                    method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name"
                            autofocus placeholder="Enter username">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="invalid-feedback">
                            Please Enter name
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email"
                            placeholder="Enter Your email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="invalid-feedback">
                            Please Enter Email
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="userpassword" class="form-label">Password</label>
                        <input type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password" id="userpassword"
                            placeholder="Enter password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="invalid-feedback">
                            Please Enter Password
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="userpassword" class="form-label">Confirmation Password</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password"
                            placeholder="Enter Confirmation password">
                        <div class="invalid-feedback">
                            Please Enter Confirmation Password
                        </div>
                    </div>

                    <div class="mt-4 d-grid">
                        <button class="btn btn-primary waves-effect waves-light"
                            type="submit">Register</button>
                    </div>
                </form>
                <div class="mt-4 text-center">
                    <h5 class="font-size-14 mb-3">Sign up using</h5>

                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="javascript::void()"
                                class="social-list-item bg-primary text-white border-primary">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript::void()"
                                class="social-list-item bg-info text-white border-info">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript::void()"
                                class="social-list-item bg-danger text-white border-danger">
                                <i class="mdi mdi-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mt-4 text-center">
                    <p class="mb-0">By registering you agree to the Skote <a href="#"
                            class="text-primary">Terms of Use</a></p>
                </div>

            </div>

        </div>
    </div>
    <div class="mt-5 text-center">

        <div>
            <p>Already have an account ? <a href="{{route('login')}}" class="fw-medium text-primary">
                    Login</a> </p>
            <p>©
                <script>
                    document.write(new Date().getFullYear())
                </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i>
                by Themesbrand
            </p>
        </div>
    </div>

</x-auth.main>