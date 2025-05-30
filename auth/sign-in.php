<?php
session_start();
include 'includes/header.php';
include 'alert.php'; 
?>
<div class="wrapper">
    <section class="login-content">
        <div class="row m-0 align-items-center bg-white vh-100">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                            <div class="card-body">
                                <a href="..\index.php" class="navbar-brand d-flex align-items-center mb-3">

                                    <!--Logo start-->
                                    <div class="logo-main">
                                        <div class="logo-normal">
                                            <img src="../assets/img/logo-tag.svg" style="height: 75px;"
                                                alt="Website Logo" />
                                        </div>
                                        <div class="logo-mini">
                                            <img src="../assets/img/logo-tag.svg" style="height: 75px;"
                                                alt="Website Logo" />
                                        </div>
                                    </div>
                                    <!--logo End-->

                                    <!-- <h4 class="logo-title ms-3">Indigenous People Information System of Laua-an
                                        </h4> -->
                                </a>
                                <h2 class="mb-2 text-center">Admin Sign In</h2>
                                <p class="text-center">Login to stay connected.</p>
                                <form action="code.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    aria-describedby="email" placeholder=" " />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label for="showPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control pe-5" id="showPassword"
                                                    name="password" aria-describedby="password" placeholder=" " />
                                                <span hidden="hidden" class="field-icon toggle-password bi bi-eye-fill"
                                                    id="icon"
                                                    style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); top: 72.5%; cursor: pointer;"></span>
                                            </div>
                                        </div>

                                        <script src="js/show-password.js"></script>

                                        <div class="col-lg-12 mb-3 d-flex justify-content-end">
                                            <!-- <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1" />
                                                    <label class="form-check-label" for="customCheck1">Remember
                                                        Me</label>
                                                </div> -->
                                            <a href="recoverpw.html" class="m-2">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success" name="signin">
                                            Sign In
                                        </button>
                                    </div>

                                    <p class="mt-3 text-center">
                                        Don’t have an account?
                                        <a href="sign-up.php" class="text-underline">Click here to sign up.</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sign-bg">
                    <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.05">
                            <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
                            <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
                            <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857"
                                transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
                            <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                <img src="../assets/img/auth/01.png" class="img-fluid gradient-main animated-scaleX" alt="img" />
            </div>
        </div>
    </section>
</div>

<?php 
include 'includes/footer.php';
?>