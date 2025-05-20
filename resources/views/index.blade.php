<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Homepage - National Care for Alliance at Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function formvalidation()
            {
                var nama = document.getElementById("nama").value;
                var email = document.getElementById("email").value;
                var phone = document.getElementById("phone").value;
                if (nama.length < 1)
                {
                    Swal.fire({
                        title: "Pesan Kesalahan",
                        text: "Must be at least 1 character!",
                        icon: "error"
                    });
                    document.getElementById("nama").focus();
                    return false;
                }
                const regexAngka = /[0-9]/;
                if (regexAngka.test(nama)) {
                    Swal.fire({
                        title: "Pesan Kesalahan",
                        text: "Must not contain numbers!",
                        icon: "error"
                    });
                    document.getElementById("nama").focus();
                    return false;
                }
                const regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (email.length < 1)
                {
                    Swal.fire({
                        title: "Pesan Kesalahan",
                        text: "Must be at least 1 character!",
                        icon: "error"
                    });
                    document.getElementById("nama").focus();
                    return false;
                }
                if (!regexEmail.test(email))
                {
                    Swal.fire({
                        title: "Pesan Kesalahan",
                        text: "Email is not valid!",
                        icon: "error"
                    });
                    document.getElementById("email").focus();
                    return false;
                }
                const regexPhone = /^08\d{10,12}$/;
                if (phone.length < 1)
                {
                    Swal.fire({
                        title: "Pesan Kesalahan",
                        text: "Must be at least 1 character!",
                        icon: "error"
                    });
                    document.getElementById("phone").focus();
                    return false;
                }
                if (!regexPhone.test(phone))
                {
                    Swal.fire({
                        title: "Pesan Kesalahan",
                        text: "Phone number must start with 08 and have a maximum of 12 digits!",
                        icon: "error"
                    });
                    document.getElementById("phone").focus();
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!"><img src="logo.webp" width=334px height=77px></a>
                <a class="btn btn-primary" href="#signup">Member Login</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">The leading authority for transforming care in the home</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 justify-content-center">
                            <div class="features-icons-icon d-flex justify-content-center"><img src="public-relation.png"></div>
                            <h3>Advocacy</h3>
                            <p class="lead mb-0">Learn more about our policy priorities and advocacy work.</p>
                            <br>
                            <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Become an Advocate</button></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex justify-content-center"><img src="mortarboard.png"></div>
                            <h3>Education</h3>
                            <p class="lead mb-0">Premier care at home education to advance your organization and career.</p>
                            <br>
                            <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">View Upcoming Education + Events</button></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex justify-content-center"><img src="regulation.png"></div>
                            <h3>Regulatory</h3>
                            <p class="lead mb-0">Stay compliant and up to date with the latest regulatory changes & access toolkits to provide the best possible care.</p>
                            <br>
                            <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Browse Regulatory + Compliance Tools</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('iStock-2047488374_crop.webp')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Latest Advocacy Effort</h2>
                        <p class="lead mb-0">Alliance Priority Issues</p>
                        <a href="https://www.nahc.org/advocacy/2023-advocacy-priorities/">Read More</a>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('financials.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Featured Event</h2>
                        <p class="lead mb-0">2025 National Alliance for Care at Home Financial Summit
                            07.27.2025</p>
                            <a href="https://www.nahc.org/advocacy/2023-advocacy-priorities/">Event Details</a>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('Alliance_Homepage_Collage_withText-1536x1159.webp')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h5>Who We Are</h5>
                        <h2>A powerful voice supporting the care at home community for over 90 years</h2>
                        <br>
                        <p class="lead mb-0">The Alliance is a network reaching more than 30,000 home health, hospice, palliative, and home care professionals. Our membership has access to the latest resources, education,  and a thriving community that connects more than 1,500 dedicated members organizations across the United States.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">What we provide to Members</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="number-one.png" alt="..." />
                            <h5>Access to comprehensive resources</h5>
                            <p class="font-weight-light mb-0">View our expertly curated topic centers or search by care type and need</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="number-2.png" alt="..." />
                            <h5>The latest updates impacting our community</h5>
                            <p class="font-weight-light mb-0">View the latest press releases and Alliance Weekly news articles and sign up for one of our newsletters to receive tailored information directly to your inbox.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="number-3.png" alt="..." />
                            <h5>Industry-leading events and education</h5>
                            <p class="font-weight-light mb-0">Alliance events bring together care at home professionals from across the nation to foster collaboration, share knowledge, and connect with thought leaders shaping the future of home-based care. See what webinars and conferences are coming up.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="number-four.png" alt="..." />
                            <h5>A strong, unified voice on Capitol Hill</h5>
                            <p class="font-weight-light mb-0">The Alliance is dedicated to advancing policies that support care in the home for millions of Americans at all stages of life. See our ongoing advocacy efforts across the country and get involved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">You're there for your community. We're here for you.</h2>
                        <p>Alliance membership comes with the essential tools you need to stay current with leading practices, understand policy changes, and improve quality of care.</p>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="frmpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();">
                            <b>Name</b> <input type="text" id="nama" class="form-control" placeholder="No numbers, minimal 1 letter" name="nama">
                            <br>
                            <b>Email</b> <input type="text" id="email" class="form-control" placeholder="Must be a valid email address" name="email">
                            <br>
                            <b>Phone Number</b> <input type="text" id="phone" class="form-control" placeholder="Must start with 08, maximum 12 digit" name="phone">
                            <br>
                            <input type="submit" class="btn btn-primary" value="Become a Member">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">© 2025 National Alliance for Care at Home. All rights reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
