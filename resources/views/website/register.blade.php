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

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group>input,
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
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Register</h3>
                                <form>
                                    <div class="form-label-group">
                                        <select name="profile_for" class="form-control" required>
                                            <option value="">Select Profile For</option>
                                            <option value="myself">Myself</option>
                                            <option value="offspring">Offspring (Son / Daughter)</option>
                                            <option value="friend">Friend</option>
                                            <option value="cousin">Cousin</option>
                                            <option value="cousin">GrandChildren</option>
                                        </select>
                                    </div>

                                     <div class="form-label-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
                                        <label>Name</label>
                                    </div>

                                    <div class="form-label-group">
                                        <select name="gender" class="form-control" required>
                                            <option value="">Select Gender</option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-label-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                                        <label>Email address</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        <label>Password</label>
                                    </div>

                                    <!-- <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                                    </div> -->
                                    
                                    <small style="margin: 10px;">By Registering, You are agreeing to our <a href="/terms_and_conditions">Terms and Conditions</a> & <a href="/privacy_policy">Privacy Policy</a></small>

                                    <button
                                        class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"
                                        type="submit">Sign Up</button>
                                    <div class="text-center">
                                        <a class="small" href="/login">Have Account? Login</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </x-admin-layout>

    @section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
    @endsection