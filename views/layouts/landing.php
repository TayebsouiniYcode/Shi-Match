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
    <header class="mx-3">
        <nav class="navbar navbar-expand-lg d-flex justify-content-between">
            <div class="logo">
                <a href="/">
                    <img src="/assets/img/logo.svg" alt="This is a logo for application" width="150">
                </a>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="L">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="/about">About US</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>                
            <div class="auth">
                <a class="btn btn-primary text-light" href="/login">Login</a>
            </div>
        </nav>
    </header>
    <div>
        {{content}}
    </div>
    <!-- Footer Start -->
    <!-- <footer class="footer px-5 mt-5 text-light pb-5">
        <div class="d-flex justify-content-between">
            <div class="footer-about w-30">
                <h5 class="text-light pt-5">About Us</h5>
                <div class="image">
                    <img src="/assets/img/Logo-BG.png" alt="" width="150" height="100">
                </div>
                <p class="text-light">
                    Proinde concepta rabie saeviore, quam desperatio incendebat et fames, amplificatis viribus ardore
                </p>
                <div class="social-media">
                    <a href="twitter.com">
                        <img src="/assets/img/Twitter.png" alt="">
                    </a>
                    <a href="facebook.com">
                        <img src="/assets/img/Facebook.png" alt="">
                    </a>
                    <a href="instagram.com">
                        <img src="/assets/img/Instagram.png" alt="">
                    </a>
                    <a href="linkedin.com">
                        <img src="/assets/img/LinkedIN.png" alt="">
                    </a>
                </div>
            </div>
            <div class="footer-nav w-30">
                <h5 class="pt-5">Pages</h5>
                <ul class="navbar-nav mt-2">
                    <li class="nav-item">
                        <a class="nav-link link-light-force" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light-force" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light-force" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer-contact w-30">
                <h5 class="pt-5">Subscribe to our newsletter</h5>
                <p class="mt-2">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit aliquam mauris sed ma
                </p>
                <form class="mt-3" action="">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Enter your email">
                    </div>
                    <input class="btn btn-secondary mt-2" type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </footer> -->
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>