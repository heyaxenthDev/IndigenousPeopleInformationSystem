<?php
session_start();
include 'includes/header.php';
include 'alert.php'; 
?>
<div class="wrapper">
    <section class="login-content">
        <div class="row m-0 align-items-center bg-white vh-100">
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                <img src="../assets/img/auth/05.png" class="img-fluid gradient-main animated-scaleX" alt="images" />
            </div>
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
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

                                    <!-- <h4 class="logo-title ms-3">Hope UI</h4> -->
                                </a>
                                <h2 class="mb-2 text-center">Sign Up</h2>
                                <p class="text-center">Create your Hope UI account.</p>
                                <form action="code.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="first-name" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="first-name" name="firstname"
                                                    placeholder=" " required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="last-name" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="last-name" name="lastname"
                                                    placeholder=" " required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder=" " required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phone" class="form-label">Phone No.
                                                    <small>(optional)</small></label>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    placeholder=" " />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder=" " required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="confirm-password" class="form-label">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control" id="confirm-password"
                                                    name="confirm_password" placeholder=" " required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <div class="form-check mb-3">
                                                <input type="checkbox" class="form-check-input" id="termsAndConditions"
                                                    name="termsAndConditions" required />
                                                <label class="form-check-label" for="termsAndConditions">I agree with
                                                    the
                                                    terms of use</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success" name="signup">
                                            Sign Up
                                        </button>
                                    </div>
                                    <p class="text-center my-3">
                                        or sign in with other accounts?
                                    </p>

                                    <p class="mt-3 text-center">
                                        Already have an Account
                                        <a href="sign-in.php" class="text-underline">Sign In</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sign-bg sign-bg-right">
                    <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.05">
                            <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8" />
                            <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(-45 149.47 319.328)" fill="#3A57E8" />
                            <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857"
                                transform="rotate(45 203.936 99.543)" fill="#3A57E8" />
                            <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(45 204.316 -229.172)" fill="#3A57E8" />
                        </g>
                    </svg>
                    <!-- <img src="../assets/img/logo-svg.svg" alt="SVG Logo" > -->
                </div>
            </div>
        </div>
    </section>
</div>


<?php 
include 'includes/footer.php';
?>