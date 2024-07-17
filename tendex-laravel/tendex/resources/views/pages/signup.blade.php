<x-auth-layout
    ><div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-4">
                        <a href="{{ url('') }}"
                            ><img src="./images/logo.png" alt=""
                        /></a>
                        <h4 class="card-title mt-5">Create your account</h4>
                    </div>

                    <div class="auth-form card">
                        <div class="card-body">
                            <form
                                name="myform"
                                class="signin_validate row g-3"
                                action="{{ route('auth.save') }}"
                                method="post"
                            >
                                @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                <script>
                                    window.setTimeout(function () {
                                        window.location.href = "signin";
                                    }, 2000);
                                </script>
                                @endif @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                                @endif @csrf
                                <div class="col-12">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="username"
                                        name="username"
                                        value="{{ old('username') }}"
                                    />
                                    <span class="text-danger"
                                        >@error('username')
                                        {{ $message }} @enderror</span
                                    >
                                </div>
                                <div class="col-12">
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="hello@example.com"
                                        name="email"
                                        value="{{ old('email') }}"
                                    />
                                    <span class="text-danger"
                                        >@error('email')
                                        {{ $message }} @enderror</span
                                    >
                                </div>
                                <div class="col-12">
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Password"
                                        name="password"
                                        value="{{ old('password') }}"
                                    />
                                    <span class="text-danger">
                                        @error('password')
                                        {{ $message }} @enderror
                                    </span>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="flexSwitchCheckDefault"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="flexSwitchCheckDefault"
                                        >
                                            I certify that I am 18 years of age
                                            or older, and agree to the
                                            <a href="#" class="text-primary"
                                                >User Agreement</a
                                            >
                                            and
                                            <a href="#" class="text-primary"
                                                >Privacy Policy</a
                                            >.
                                        </label>
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Create account
                                    </button>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-3 mb-0">
                                    <a
                                        class="text-primary"
                                        href="{{ url('signin') }}"
                                        >Sign in</a
                                    >
                                    to your account
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></x-auth-layout
>
