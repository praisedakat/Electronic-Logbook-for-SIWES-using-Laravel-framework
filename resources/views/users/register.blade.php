<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unijos eLogbook</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="/users" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="mat_number"><i class="zmdi zmdi-assignment-account"></i></label>
                                <input type="text" name="mat_number" id="mat_number" placeholder="Your Matric Number"
                                    pattern="^uj\/\d{4}\/[a-zA-Z]{2}\/\d{4}$" title="Format: uj/YYYY/AA/NNNN"
                                    class="form-control @error('mat_number') is-invalid @enderror"
                                    value="{{ old('mat_number') }}" autocomplete="mat_number" />
                                @error('mat_number')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Full Name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    autocomplete="name" />
                                @error('name')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" autocomplete="email" />
                                @error('email')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="department"><i class="zmdi zmdi-city-alt"></i></label>
                                <input type="text" name="department" id="department" placeholder="Your Department"
                                    class="form-control @error('department') is-invalid @enderror"
                                    value="{{ old('department') }}" autocomplete="department" />
                                @error('department')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="year"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="year" name="year" id="year" placeholder="Year of Industrial Training"
                                    class="form-control @error('year') is-invalid @enderror" value="{{ old('year') }}"
                                    autocomplete="year" />
                                @error('year')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="adress"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="address" id="address"
                                    placeholder="Address Institute of Training"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}" autocomplete="address" />
                                @error('address')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="form-control @error('passowrd') is-invalid @enderror" />
                                @error('password')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input placeholder="Repeat your password" id="password_confirmation" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" />
                                @error('password_confirmation')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Sign up as
                                    supervisor <a href="{{ route('register.supervisor') }}" class="term-service">Sign
                                        up</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/img/1712237744407.jpg" alt="1712237744407"></figure>
                        <a href="/login" class="signup-image-link">I am already registered</a>
                        <a href="/" class="signup-image-link">Go home</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
