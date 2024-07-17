<x-auth-layout>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-4">
                        <a href="{{ url('/') }}"
                            ><img src="./images/logo.png" alt=""
                        /></a>
                        <h4 class="card-title mt-5">Sign in to Tendex</h4>
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <form
                                name="myform"
                                class="signin_validate row g-3"
                                action="{{ route('auth.check') }}"
                                method="POST"
                            >
                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                                @endif @csrf
                                <div class="col-12">
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="hello@example.com"
                                        name="email"
                                        value="{{ old('email') }}"
                                    />
                                    <span class="text-danger">
                                        @error('email') {{ $message }} @enderror
                                    </span>
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
                                <div class="col-6">
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="flexSwitchCheckDefault"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="flexSwitchCheckDefault"
                                            >Remember me</label
                                        >
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ url('reset') }}"
                                        >Forgot Password?</a
                                    >
                                </div>
                                <div class="d-grid gap-2">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Sign in
                                    </button>
                                </div>
                            </form>
                            <p class="mt-3 mb-0">
                                Don't have an account?
                                <a
                                    class="text-primary"
                                    href="{{ url('signup') }}"
                                    >Sign up</a
                                >
                            </p>
                            <div class="mt-2">
                                <small class="mb-0 me-2"
                                    ><b>Email :</b> demo@demo.com</small
                                >
                                <small><b>Password :</b> demo123</small>
                            </div>
                        </div>
                    </div>
                    <div class="privacy-link">
                        <a href="{{ url('signup') }}"
                            >Have an issue with 2-factor authentication?</a
                        >
                        <br />
                        <a href="{{ url('signup') }}">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
