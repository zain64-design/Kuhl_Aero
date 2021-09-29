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
                        <h5 class="banner-h">Student booking</h5>
                        <p class="banner-p">Offers flight training programs for the Private Pilot - Recreational Pilot -
                            Night Ratings - VFR-Over the Top - Check Rides and Sight-Seeing Flights to the public.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-booking">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9">
                    <form action="" class="book-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="exampleInputEmail1" class="form-label book-label">Choose Aircraft</label>
                                <select class="form-select booking-control" aria-label="Default select example">
                                    <option selected>C-FXYU</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="exampleInputEmail1" class="form-label book-label"
                                    placeholder="your password">Choose Instructor</label>
                                <select class="form-select booking-control" aria-label="Default select example">
                                    <option selected>select instructor</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="exampleInputEmail1" class="form-label book-label" >booking date</label>
                                <!-- <input type="text" class="form-control booking-celendar-control" placeholder="select date" > -->
                                <a class="booking-celendar-control" id="calendar-field">select date</a>

                                <div class="icalendar">
                                    <div class="icalendar__month">
                                        <div class="icalendar__prev" onclick="moveDate('prev')">
                                            <span><i class="fas fa-chevron-left"></i></span>
                                        </div>
                                        <div class="icalendar__current-date">
                                            <h2 id="icalendarMonth"></h2>
                                            <div>
                                                <div id="icalendarDateStr"></div>
                                            </div>

                                        </div>
                                        <div class="icalendar__next" onclick="moveDate('next')">
                                            <span><i class="fas fa-chevron-right"></i></span>
                                        </div>
                                    </div>
                                    <div class="icalendar__week-days">
                                        <div>Sun</div>
                                        <div>Mon</div>
                                        <div>Tue</div>
                                        <div>Wed</div>
                                        <div>Thu</div>
                                        <div>Fri</div>
                                        <div>Sat</div>
                                    </div>
                                    <div class="icalendar__days"></div>


                                    <script src="./javascript-calendar.js" type="text/javascript"></script>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="exampleInputEmail1" class="form-label book-label">choose time</label>

                                <input type="time" class="form-control booking-input-control">
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