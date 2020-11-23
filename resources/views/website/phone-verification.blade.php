@section('style')
<style>
    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: 0.75rem;
    }

    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
        background-size: cover;
        background-position: center;
    }

    .login-heading {
        font-weight: 300;
    }

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        border-radius: 2rem;
    }

    .btn-round {
        font-size: 0.7rem;
        /* letter-spacing: 0.05rem; */
        /* padding: 0.75rem 1rem; */
        border-radius: 2rem;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
        width: 100%;
    }

    .form-label-group>input,
    .form-label-group>select,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
        height: auto;
        border-radius: 2rem;
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        cursor: text;
        /* Match the input under the label */
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    /* Fallback for Edge
    -------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }

    /* Fallback for IE
    -------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }
</style>
@endsection

<x-web-layout>
    <div class="container-fluid mt-5">
        <div class="row no-gutter">
            <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h5 class="login-heading mb-4">Verify Your Phone Number</h5>
                                <hr />
                                <p>An OTP has been sent to your given phone number (01926809612). Please submit that OTP
                                    here to verify your
                                    phone number to continue.</p>

                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label-group">
                                                <input type="text" name="otp" id="otp" class="form-control"
                                                    placeholder="otp" required>
                                                <label for="otp">OTP</label>
                                                {{-- <div class="input-group-append"> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-sm btn-primary btn-login btn-block" type="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                    <div id="counter" class="text-center mt-1"></div>
                                    {{-- </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
    <script>
        let resend = true;
        let resendCounter;
        var counterId;

        const resendUpdate = () => {
            console.log(resendCounter);
            if(resend && resendCounter){
                $("#counter").html("Resend OTP in "+resendCounter);
                resendCounter--;
            } else {
                $("#counter").html("<button class='btn btn-primary btn-xs btn-block btn-round' type='button' id='resend'>Resend OTP</button>");
                resend = false;
                stopCounter();
            }
        }

        const startCounter = () => {
            resendCounter = 15;
            counterId = setInterval(resendUpdate, 1000);
        }
        const stopCounter = () => clearInterval(counterId);

        $(document).on('click', '#resend', () => {
            alert('click');
            resend = true;
            startCounter();
        });

        startCounter();

    </script>
    @endsection
    </x-admin-layout>