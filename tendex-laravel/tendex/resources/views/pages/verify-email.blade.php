<x-auth-layout>
    <div class="verification section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-4">
                        <a href="{{ url('/') }}"
                            ><img src="./images/logo.png" alt=""
                        /></a>
                        <h4 class="card-title mt-5">Verify your Email</h4>
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <form
                                action="{{url('verify-step-2')}}"
                                class="identity-upload"
                            >
                                <div class="identity-content">
                                    <span class="icon"
                                        ><i class="icofont-email"></i
                                    ></span>
                                    <p>
                                        We sent verification email to
                                        <strong class="text-dark"
                                            >example@email.com</strong
                                        >. Click the link inside to get started!
                                    </p>
                                    <a href="{{url('dashboard')}}">Go to Dashboard</a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{url("signup")}}">Email didn't arrive?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
