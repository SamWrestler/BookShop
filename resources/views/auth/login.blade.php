<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Fonts/FontAwesome/css/all.css"/>
    <link rel="stylesheet" href="css/loginregister/reset.css" />
    <link rel="stylesheet" href="css/loginregister/loginregister.css" />
    <link rel="stylesheet" href="css/loginregister/font.css" />
    <title>Login</title>
</head>

<body>
<div class="container">
    <div class="login-container">
        <div class="header">
            <h2>خوش برگشتی 👋</h2>
            <p>لطفا اطلاعات خود را وارد کنید!</p>
            <form method="POST" action="{{ route('login') }}">
                <button>
                    <p>ورود از طریق شماره تلفن</p>
                </button>
            </form>
        </div>
        <div class="or">
            <hr />
            <p>یا</p>
            <hr />
        </div>
        <div class="footer">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input @error('email') error @enderror">
                    <label for="email">ایمیل:</label>
                    <div class="input-input ">
                        <input type="email" name="email" id="email" placeholder="test@gmail.com">
                        <i class="fa-regular fa-at"></i>
                    </div>
                    @error('email') <p class="error-info">{{$message}}!</p> @enderror

                </div>
                <div class="input @error('password') error @enderror">
                    <label for="email">گذرواژه:</label>
                    <div class="input-input">
                        <input type="password" name="password" id="password" placeholder="........">
                        <i class="fa-regular fa-eye-slash" id="fa-eye-slash-1" onclick="togglePasswordVisibility()"></i>
                        <i class="fa-regular fa-eye" id="fa-eye-1" onclick="togglePasswordVisibility()" style="display: none;"></i>
                    </div>
                    @error('password') <p class="error-info">{{$message}}!</p> @enderror
                </div>
                <button>ورود</button>
                <div class="help">
                    <p>گذرواژه خود را فراموش کردید؟</p>
                    <a href="#">ورود با شماره تلفن</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/loginregister.js"></script>
</body>

</html>
