<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Laravel Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            background:
                radial-gradient(circle at 20% 20%, rgba(99, 230, 190, .12), transparent 30%),
                radial-gradient(circle at 80% 80%, rgba(117, 88, 255, .12), transparent 30%),
                #080a0f;

            color: #fff;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 430px;
        }

        .logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo a {
            text-decoration: none;
            color: #fff;
            font-size: 28px;
            font-weight: 800;
        }

        .logo span {
            color: #63e6be;
        }

        .login-card {
            background: rgba(15, 19, 28, .92);
            border: 1px solid #26303d;
            border-radius: 18px;
            padding: 38px;

            box-shadow:
                0 30px 80px rgba(0, 0, 0, .45);
        }

        .login-card h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .login-card .subtitle {
            color: #7f8b9d;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #cbd3df;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        input {
            width: 100%;
            height: 50px;

            padding: 0 15px;

            border-radius: 8px;
            border: 1px solid #2a3545;

            background: #0b1018;
            color: #fff;

            font-size: 14px;

            outline: none;

            transition: .2s;
        }

        input:focus {
            border-color: #63e6be;
            box-shadow: 0 0 0 3px rgba(99, 230, 190, .08);
        }

        input::placeholder {
            color: #566274;
        }

        .password-wrapper input {
            padding-right: 60px;
        }

        .show-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);

            background: none;
            border: none;

            color: #788598;

            cursor: pointer;
            font-size: 12px;
        }

        .show-password:hover {
            color: #63e6be;
        }

        .remember-row {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin: 8px 0 25px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;

            color: #7f8b9d;
            font-size: 12px;
        }

        .remember input {
            width: 15px;
            height: 15px;
            accent-color: #63e6be;
        }

        .forgot {
            color: #63e6be;
            font-size: 12px;
            text-decoration: none;
        }

        .login-btn {
            width: 100%;
            height: 50px;

            border: none;
            border-radius: 8px;

            background: #63e6be;
            color: #07110e;

            font-size: 14px;
            font-weight: 700;

            cursor: pointer;

            transition: .2s;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(99, 230, 190, .15);
        }

        .error {
            color: #ff817a;
            font-size: 12px;
            margin-top: 7px;
        }

        .alert {
            background: rgba(255, 90, 90, .08);
            border: 1px solid rgba(255, 90, 90, .2);
            color: #ff817a;

            padding: 12px;
            border-radius: 7px;

            font-size: 13px;
            margin-bottom: 20px;
        }

        .back {
            display: block;
            text-align: center;

            margin-top: 25px;

            color: #697588;
            font-size: 12px;
            text-decoration: none;
        }

        .back:hover {
            color: #63e6be;
        }

        .footer-text {
            text-align: center;
            color: #4f5b6c;
            font-size: 11px;
            margin-top: 20px;
        }

        @media(max-width: 500px) {
            .login-card {
                padding: 28px 22px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="logo">
        <a href="/">Admin Login<span>.</span></a>
    </div>

    <div class="login-card">

        <h1>Welcome back</h1>

        <p class="subtitle">
            Login to access your dashboard.
        </p>

        @if ($errors->any())
            <div class="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{route('post-admin-login')}}">

            @csrf

            <div class="form-group">

                <label for="email">
                    Username / Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    required
                    autofocus
                >

                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <div class="input-wrapper password-wrapper">

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                    <button
                        type="button"
                        class="show-password"
                        onclick="togglePassword()"
                    >
                        SHOW
                    </button>

                </div>

                @error('password')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="remember-row">

                <label class="remember">
                    <input
                        type="checkbox"
                        name="remember"
                        value="1"
                    >

                    Remember me
                </label>

                <a href="#" class="forgot">
                    Forgot password?
                </a>

            </div>


            <button
                type="submit"
                class="login-btn"
            >
                Login →
            </button>

        </form>

        <a href="/" class="back">
            ← Back to portfolio
        </a>

    </div>

    <div class="footer-text">
        © {{ date('Y') }} Aparna S. · Laravel Developer
    </div>

</div>


<script>
function togglePassword()
{
    const password = document.getElementById('password');
    const button = document.querySelector('.show-password');

    if (password.type === 'password') {

        password.type = 'text';
        button.innerText = 'HIDE';

    } else {

        password.type = 'password';
        button.innerText = 'SHOW';

    }
}
</script>

</body>
</html>