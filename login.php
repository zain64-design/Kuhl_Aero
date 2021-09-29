<?php
include 'includes/header.php';
$page = 'home';
?>
<main>
    <section class="sec-inner-banner">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="inner-desc">
                        <h5 class="banner-h">Student Log-In</h5>
                        <p class="banner-p">Offers flight training programs for the Private Pilot - Recreational Pilot -
                            Night Ratings - VFR-Over the Top - Check Rides and Sight-Seeing Flights to the public.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9">
                    <form action="" class="login-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="exampleInputEmail1" class="form-label login-label">username</label>
                                <input type="email" class="form-control login-control" id="exampleInputEmail1" placeholder="your name or email"
                                    aria-describedby="emailHelp">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="exampleInputEmail1" class="form-label login-label" placeholder="your password">password</label>
                                <input type="password" class="form-control login-control" id="exampleInputPassword1">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <button type="submit" href="javascript:" class="btn submit-btn hvr-bounce-to-bottom-2">sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>