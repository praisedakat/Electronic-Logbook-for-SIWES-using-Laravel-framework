<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unijos eLogbook</title>

    <!-- Font Icon -->
    <link href="/assets/img/1712237744407.jpg" rel="icon">
    <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="/assets/img/1712237744407.jpg" alt="1712237744407"></figure>
                        <a href="/" class="signup-image-link">Go Home</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Write Report</h2>

                        <form method="POST" action="{{ route('reports.store') }}" class="register-form"
                            id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="report_date"></label>
                                <input type="date" name="report_date" class="form-control"
                                    value={{ old('report_date') }}>
                            </div><br>

                            <div class="form-group">
                                <label for="day"><i class="zmdi zmdi-alarm"></i></label>
                                <input type="text" name="day" id="day" class="form-control @error('day') is-invalid @enderror"
                                    placeholder="Day of Industrial Training" value="{{ old('day') }}"/>

                                @error('day')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div><br>

                            <div class="form-group">
                                <label for="week"><i class="zmdi zmdi-view-week"></i></label>
                                <input type="text" name="week" id="week" class="form-control @error('week') is-invalid @enderror"
                                    placeholder="Week of Industrial Training" value="{{ old('week') }}"/>

                                @error('week')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content"></label>
                                <textarea type="content" name="content" class="form-control"
                                    value={{ old('content') }} required placeholder="Write Report"></textarea>
                            </div><br>

                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
