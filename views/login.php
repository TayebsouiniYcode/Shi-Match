<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./assets/style/main.css" rel="stylesheet">
    <title>Shi-match</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="w-75">
                <div class="bg-light rounded px-5">
                    <?php $form = app\core\form\Form::begin('', "post"); ?>
                    <div class="login d-flex justify-content-between">
                        <div class="form w-40 d-flex flex-column justify-content-center">
                            <div class="d-flex flex-column align-items-center justify-content-between">
                                <h3 class="text-center mt-5">WELCOME BACK</h3>
                                <h6 class="text-muted">
                                    Welcome back! Please enter your details.
                                </h6>
                            </div>
                            <?php echo $form->field($model, 'email'); ?>
                            <?php echo $form->field($model, 'password')->passwordField(); ?>

                            <div class="form-group mt-2 d-flex justify-content-between">
                                <div class="remember-me">
                                    <input type="checkbox" name="rememberMe" id="rememberMe">
                                    <label for="rememberMe" class="form-label">Remember me</label>
                                </div>
                                <div class="forgot-password">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-4">Sign in</button>
                            <a href="#" class="btn btn-google w-100 mt-3">sign in with Google</a>
                            <span class="text-center mt-2">Don't have an account? <a href="/signup">Sign up for free!</a></span>
                        </div>
                        <div class="image">
                            <img src="/assets/img/Image-login.png" alt="" height="450">
                        </div>
                    </div>


                    <?php app\core\form\Form::end(); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>