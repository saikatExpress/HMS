<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>

    <!--Font famile of google font link--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Kanit:wght@300&family=Libre+Baskerville&family=Lobster&family=Oswald:wght@500&family=Pacifico&family=Satisfy&family=Space+Mono:ital,wght@1,400;1,700&family=Vollkorn:ital@1&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&display=swap" rel="stylesheet">
    <!--Font famile of google font link--->

    <link rel="shortcut icon" type="image/png" href="images/help-line.png" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>



    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>


    <header>

        <div class="top_header">
            <div class="top_header_icon">
                <a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            </div>

            <div class="hotline">
                <h6 class="heading6">[ Hotline : 110234 ]</h6>
            </div>
        </div>

        <div class="main_header_fixed" id="fixedHeader">
            <div class="header_logo_div">
                <img class="logo_image" src="logos/images.png" alt="no images">
            </div>

            <div class="header_logo_menu">
                <ul>
                    <li>
                        <div class="menu_link">
                            <a href="">Home</a>
                        </div>
                    </li>

                    <li>
                        <div class="menu_link">
                            <a href="">About us</a>
                        </div>
                    </li>

                    <li>
                        <div class="menu_link">
                            <a href="">Doctor's</a>
                        </div>
                    </li>

                    <li>
                        <div class="menu_link">
                            <a href="">Contact</a>
                        </div>
                    </li>

                    <li>
                        <div class="menu_link">
                            <a href="">Appoinment</a>
                        </div>
                    </li>

                    <li>
                        <div class="menu_link">
                            <a href="">Career</a>
                        </div>
                    </li>

                </ul>
            </div>

        </div>


    </header>

    <div class="main_content">
        <div class="slider_image_block">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">


                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>


                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img class="slideImages" src="images/pic1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>


                    <div class="carousel-item" data-bs-interval="2000">
                        <img class="slideImages" src="images/pic2.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <img class="slideImages" src="images/pic3.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>

                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>



    <div class="row">
        <div class="col-lg-4">
            <div class="welcome_div">
                <div class="head_title">
                    <h4>Welcome to our hospital</h4>
                </div>
                <p class="paragraph">
                    Bangladesh Specialized Hospital has all the characteristics of a world-class hospital with wide
                    range of services and specialists, equipments and technology, ambience and service quality.

                    The hospital is a showcase of synergy of medical technology and advances in ICT through paperless
                    medical records. The skilled nurses, technologists and administrators of Bangladesh Specialized
                    Hospita
                </p>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="welcome_image">
                <div class="head_title">
                    <h4>For ambulance</h4>
                </div>

                <img src="images/index.png" alt="no images">
                <h5>Please call : 01713617913</h5>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="welcome_image">
                <div class="head_title">
                    <h4>Our mission</h4>
                </div>

                <div class="mission_list">
                    <ul>
                        <li>
                            <b>Our patient </b>: excellent and cost-effective healthcare
                        </li>
                        <li>
                            <b>Our staff </b>: continuing development and welfare
                        </li>
                        <li>
                            <b>Our nation </b>: partnership in promoting health in Bangladesh.
                        </li>
                    </ul>
                </div>

                <div class="head_title">
                    <h4>Our Vision</h4>
                </div>

                <div class="vision_text">
                    <p>
                        "To be a renowned organization at the leading edge of Medicine, providing quality healthcare to
                        meet
                        our nation's aspirations."
                    </p>
                </div>

            </div>
        </div>

    </div>

    <div class="doctor_block">
        <div class="doctor_block_title">
            <h2 class="head2">Our Doctor's</h2>
        </div>


        <div class="slide_div_style">
            <div class="doctor_slider responsive">


                <div class="doctor_slider_div">
                    <div class="doctor_image">
                        <img src="images/dilsan.jpg" alt="no images">
                    </div>
                    <div class="doctor_info">
                        <h4>Dr. Dilshad Jahan</h4>
                        <h6>Short description: MBBS, FCPS (Hematology)</h6>
                        <p>
                            <span>Address: </span>Gendariya, Dhaka, Dhaka
                        </p>
                    </div>
                </div>


                <div class="doctor_slider_div">
                    <div class="doctor_image">
                        <img src="images/masud.jpg" alt="no images">
                    </div>
                    <div class="doctor_info">
                        <h4>Dr.Masud Anwar</h4>
                        <h6>Short description: MBBS, FCPS, MS(Neuro surgery)</h6>
                        <p>
                            <span>Address : </span> Gendariya, Dhaka, Dhaka
                        </p>
                    </div>
                </div>

                <div class="doctor_slider_div">
                    <div class="doctor_image">
                        <img src="images/jahadul.jpg" alt="no images">
                    </div>
                    <div class="doctor_info">
                        <h4>Prof. Dr. Jahadul Islam</h4>
                        <h6>Short description: MBBS, DLO,MS(Ent)</h6>
                        <p>
                            <span>Address : </span> Gendariya, Dhaka, Dhaka
                        </p>
                    </div>
                </div>

                <div class="doctor_slider_div">
                    <div class="doctor_image">
                        <img src="images/bithi.jpg" alt="no images">
                    </div>
                    <div class="doctor_info">
                        <h4>Dr. Bithi Vowmik</h4>
                        <h6>Short description: MBBS, FCPS (Ent)</h6>
                        <p>
                            Address: Gendariya, Dhaka, Dhaka
                        </p>
                    </div>
                </div>

                <div class="doctor_slider_div">
                    <div class="doctor_image">
                        <img src="images/sattar.jpg" alt="no images">
                    </div>
                    <div class="doctor_info">
                        <h4>Prof. Dr. Mohammad Abdursattar</h4>
                        <h6>Short description: MBBS,DLO,FCPS,MS(Ent)</h6>
                        <p>
                            Address: Gendariya, Dhaka, Dhaka
                        </p>
                    </div>
                </div>

                <div class="doctor_slider_div">
                    <div class="doctor_image">
                        <img src="images/mosa.jpg" alt="no images">
                    </div>
                    <div class="doctor_info">
                        <h4>Dr. Musharraf Ahmed Khusru</h4>
                        <h6>Short description: MBBS,Diploma in dermatology, Fellowship training in lager and cutenia
                            surgery</h6>
                        <p>
                            Address: Gendariya, Dhaka, Dhaka
                        </p>
                    </div>
                </div>

                <div class="doctor_slider_div">
                    <div class="doctor_image">
                        <img src="images/pic2.jpeg" alt="no images">
                    </div>
                    <div class="doctor_info">
                        <h4>Prof Dr. Riyad Al Hasan</h4>
                        <h6>Lorem ipsum dolor sit amet consectetur</h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, ut?
                        </p>
                    </div>
                </div>

                <div class="doctor_slider_div">
                    <div class="doctor_image">
                        <img src="images/pic2.jpeg" alt="no images">
                    </div>
                    <div class="doctor_info">
                        <h4>Prof Dr. Riyad Al Hasan</h4>
                        <h6>Lorem ipsum dolor sit amet consectetur</h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, ut?
                        </p>
                    </div>
                </div>


            </div>
        </div>


    </div>




    <div class="services_area">
        <div class="doctor_block_title">
            <h2 class="head2">Services & Facilities</h2>
        </div>

        <div class="service_category_flex">


            <div class="service_category">
                <img src="logos/brain.png" alt="no images"> <b>|</b>
                <h4>Specialized Services</h4>
            </div>

            <div class="service_category">
                <img src="logos/3367342.png" alt="no images"> <b>|</b>
                <h4>Immunization (Vaccination)</h4>
            </div>

            <div class="service_category">
                <img src="logos/2645980.png" alt="no images"> <b>|</b>
                <h4>Nursing, Paramedical Services </h4>
            </div>

            <div class="service_category">
                <img src="logos/1282091.png" alt="no images"> <b>|</b>
                <h4>Health and Allied Services </h4>
            </div>

            <div class="service_category">
                <img src="logos/862032.png" alt="no images"> <b>|</b>
                <h4>Utilities & Allied Services </h4>
            </div>

            <div class="service_category">
                <img src="logos/3367342.png" alt="no images"> <b>|</b>
                <h4> Hospital Facility</h4>
            </div>


        </div>

    </div>


    <div class="hospital_info">
        <div class="row myRow">

            <div class="col-lg-3">
                <div class="hospital_info_block">
                    <h2>
                        <img src="images/count-dept.png" alt="no images">
                        <p>35</p>
                        <h4>Department's</h4>
                    </h2>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="hospital_info_block">
                    <h2>
                        <img src="images/count-doc1.png" alt="no images">
                        <p>100</p>
                        <h4>Expert Doctor's</h4>
                    </h2>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="hospital_info_block">
                    <h2>
                        <img src="images/count-nurse.png" alt="no images">
                        <p>240</p>
                        <h4>Trained Nurse</h4>
                    </h2>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="hospital_info_block">
                    <h2>
                        <img src="images/count-pat.png" alt="no images">
                        <p>100,000</p>
                        <h4>Happy patient</h4>
                    </h2>
                </div>
            </div>

        </div>
    </div>

    <div class="hospital_image_gallary">

        <div class="doctor_block_title">
            <h2 class="head2">Gallary</h2>
        </div>

        <div class="gallary_image_block">


            <div class="image_panel_flex">
                <img src="images/01.png" alt="no images">
            </div>

            <div class="image_panel_flex">
                <img src="images/02.png" alt="no images">
            </div>

            <div class="image_panel_flex">
                <img src="images/03.png" alt="no images">
            </div>

            <div class="image_panel_flex">
                <img src="images/04.png" alt="no images">
            </div>


            <div class="image_panel_flex">
                <img src="images/05.png" alt="no images">
            </div>

            <div class="image_panel_flex">
                <img src="images/06.png" alt="no images">
            </div>

        </div>


    </div>

    <div class="hospital_reason">
        <div class="reason_block">
            <h2>Why our Hospital</h2>
            <p>Know our key points</p>
        </div>

        <div class="reason_points_key">


            <div class="key_img_text">
                <p>
                    <img src="logos/certified.png" alt="no images">
                <h2>IMS - certified</h2>
                </p>
            </div>

            <div class="key_img_text">
                <p>
                    <img src="logos/dashboard.png" alt="no images">
                <h2>Innovative</h2>
                </p>
            </div>

            <div class="key_img_text">
                <p>
                    <img src="logos/abacus.png" alt="no images">
                <h2>Efficient</h2>
                </p>
            </div>

            <div class="key_img_text">
                <p>
                    <img src="logos/daimond.png" alt="no images">
                <h2>Professional Service</h2>
                </p>
            </div>


        </div>

    </div>

    <div class="health_tips">
        <div class="reason_block">
            <h2>Health Tip's Video's</h2>
        </div>

        <div class="video_container">


            <div class="video_container_flex">
                <div class="video_frame">
                    <iframe src="https://www.youtube.com/embed/hvlM35j_U-A" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="video_description">
                    <mark>Whipple surgery </mark>
                    <h2>
                        Dr. Razeeb Hassan
                    </h2>
                    <p>
                        Consultant- General Surgery
                        Surgery
                    </p>
                </div>
            </div>

            <div class="video_container_flex">
                <div class="video_frame">
                    <iframe src="https://www.youtube.com/embed/ePFmBKjpOSM" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>

                    </iframe>
                </div>
                <div class="video_description">
                    <mark>Diabetic Talk</mark>
                    <h2>
                        Dr. Indrojit Prasad
                    </h2>
                    <p>
                        Consultant- Bangladesh Diabetic Oraganization
                    </p>
                </div>
            </div>

            <div class="video_container_flex">
                <div class="video_frame">
                    <iframe src="https://www.youtube.com/embed/wjAd71gT-HE" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="video_description">
                    <mark>Kidney Disease And Its Treatment</mark>
                    <h2>
                        Professor Dr. Sourav Hossain Sourav
                    </h2>
                    <p>
                        Consultant- National Kefney Foundation
                    </p>
                </div>
            </div>

            <div class="video_container_flex">
                <div class="video_frame">
                    <iframe src="https://www.youtube.com/embed/QZiGGHuQXCc" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="video_description">
                    <mark>Oral Cancer Treatment</mark>
                    <h2>
                        Dr. Md. Wahidul Islam
                    </h2>
                    <p>
                        Consultant- Bangladesh Dental Hospital
                    </p>
                </div>
            </div>

            <div class="video_container_flex">
                <div class="video_frame">
                    <iframe src="https://www.youtube.com/embed/q00Krqwp4KQ" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="video_description">
                    <mark>Stomach Cancer And Treatment</mark>
                    <h2>
                        Dr. Iqbal Masud Khan
                    </h2>
                    <p>
                        Consultant- Gastrointestinal Surgeon
                    </p>
                </div>
            </div>

            <div class="video_container_flex">
                <div class="video_frame">
                    <iframe src="https://www.youtube.com/embed/FBzNpSQujQc" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="video_description">
                    <mark>Gastritis Problems And Stomach Care</mark>
                    <h2>
                        Dr. Iqbal Masud Khan
                    </h2>
                    <p>
                        Consultant- Gastrointestinal Surgeon
                    </p>
                </div>
            </div>



        </div>

    </div>

    <div class="div">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolor ad reiciendis blanditiis ipsam quisquam
            atque ea delectus eaque accusantium impedit, perspiciatis id et nemo praesentium harum nostrum in maiores
            rem tempora aperiam consequatur? Labore voluptates voluptatum laudantium beatae ex dolore quidem, ullam
            fugit. Libero unde nesciunt quo magnam. Amet consequuntur laboriosam consectetur culpa labore quisquam
            inventore recusandae dolores deleniti explicabo. Maiores delectus suscipit ipsa fugit in sint quaerat
            deserunt officiis et. Reprehenderit, sed mollitia neque explicabo aliquid ipsa eius consequatur corporis,
            possimus incidunt ab odio fugiat aspernatur! Doloribus necessitatibus voluptate, modi id veniam tempore eos.
            Illum dignissimos minus officiis?
        </p>
    </div>





    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="js/style.js"></script>
</body>

</html>