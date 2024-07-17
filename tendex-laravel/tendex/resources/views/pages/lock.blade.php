<x-auth-layout>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-4 col-md-5">
                    <div class="mini-logo text-center my-3">
                        <a href="{{ url('/') }}"
                            ><img src="./images/logo.png" alt=""
                        /></a>
                        <h4 class="card-title mt-5">Locked</h4>
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <form action="{{ url('/') }}" class="row g-3">
                                <div class="col-12">
                                    <label class="form-label"
                                        >Enter Password</label
                                    >

                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="***********"
                                    />
                                </div>
                                <div class="text-center mt-4">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-block"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
