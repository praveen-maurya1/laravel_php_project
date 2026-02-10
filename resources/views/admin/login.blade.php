<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login | Swastik Spices</title>

    <style>
        body {
            margin: 0;
            height: 70vh;
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 380px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .login-header {
            background: #8B0000;
            color: #FFD700;
            text-align: center;
            padding: 18px;
            font-size: 22px;
            font-weight: bold;
        }

        .login-body {
            padding: 25px;
        }

        .login-body h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c2c2c;
        }

        .login-body input {
            width: 92%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-body input:focus {
            outline: none;
            border-color: #8B0000;
        }

        .login-body button {
            width: 100%;
            padding: 12px;
            background: #FFD700;
            color: #8B0000;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-body button:hover {
            background: #e6c200;
        }

        .error {
            background: #ffe5e5;
            color: #8B0000;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .login-footer {
            text-align: center;
            padding: 12px;
            font-size: 12px;
            color: #777;
            background: #fafafa;
        }

        /* ============================= */
        /* ===== LOGIN RESPONSIVE ===== */
        /* ============================= */

        /* Tablets */
        @media (max-width: 768px) {
            body {
                padding: 20px;
                height: auto;
                align-items: flex-start;
            }

            .login-wrapper {
                max-width: 420px;
                width: 100%;
            }

            .login-header {
                font-size: 20px;
                padding: 16px;
            }

            .login-body {
                padding: 22px;
            }

            .login-body h3 {
                font-size: 18px;
            }
        }

        /* Mobiles */
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }

            .login-wrapper {
                border-radius: 6px;
            }

            .login-header {
                font-size: 18px;
                padding: 14px;
            }

            .login-body {
                padding: 18px;
            }

            .login-body input {
                padding: 11px;
                font-size: 13px;
            }

            .login-body button {
                padding: 11px;
                font-size: 14px;
            }

            .login-footer {
                font-size: 11px;
                padding: 10px;
            }
        }

        /* Very small devices */
        @media (max-width: 360px) {
            .login-header {
                font-size: 16px;
            }

            .login-body h3 {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-header">
            Swastik Spices
        </div>

        <div class="login-body">
            <h3>Admin Login</h3>

            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <input type="email" name="email" placeholder="Admin Email" required>
                <input type="password" name="password" placeholder="Password" required>

                <button type="submit">Login</button>

            </form>
            <h4>Please Login With Your Credentials to Use Admin Power....</h4>
            <h3>THANK YOU</h3>
        </div>

        <div class="login-footer">
            © {{ date('Y') }} Swastik Spices
        </div>
    </div>

</body>

</html>