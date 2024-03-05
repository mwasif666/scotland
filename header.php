<!DOCTYPE html>
<script type="application/javascript">
  function getIP(json) {
    if (json.ip == "111.88.133.172") {
        window.location = "https://www.google.com";
    }
  }
</script>
<script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
<html lang="en">
<!-- https://www.scotlandtoppublishers.co.uk/ -->
<!-- https://192.168.2.197/local-site/PUBLICATION%20SITES/sp/ -->
<?php
$url = "https://www.scotlandtoppublishers.co.uk/"
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scotland Publication</title>
    <script src='https://www.google.com/recaptcha/api.js' defer></script>
    <link rel="shortcut icon" href="<?php echo $url; ?>assets/images/home/fav.ico" type="image/x-icon">
    <link href="<?php echo $url; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" defer>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" defer>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/owl-carousel/css/owl-carousel.min.css" defer/>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/animate.min.css" defer>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/offcanvas-menu.min.css" defer>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/main.min.css" defer>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/style.min.css" defer>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z5SJL16F4S"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-Z5SJL16F4S'); </script>
</head>

<body onload="load()">
    <div id="preloader">
        <img src="<?php echo $url; ?>assets/images/Loader.gif" draggable="false" width="auto" alt="">
    </div>
    <header>
        <div class="top pd-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 col-sm-7 mob-none d-flex justify-content-space-between mob-none">
                         <p class="fs_14 clr_white m-0"><img src="<?php echo $url; ?>assets/images/home/phone.png"
                                draggable="false" width="auto" class="img-fluid" alt=""> &nbsp; +44-744-142-9688
                        </p> 
                        <p class="fs_14 clr_white m-0"><img src="<?php echo $url; ?>assets/images/home/mail.png"
                                draggable="false" width="auto" class="img-fluid" alt=""> &nbsp;
                            info@scotlandtoppublishers.co.uk
                        </p>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-sm-5 col-12">
                        <div class="icons d-flex h-100 align-items-center float-right ">
                            <span class="fs_14 clr_semi"><img src="<?php echo $url; ?>assets/images/home/blue-dot.png"
                                    draggable="false" width="auto" class="img-fluid" alt=""> Follow Us :</span>
                            <a href="https://www.facebook.com/Scotland-Top-Publishers-108466868440184 "><i
                                    class="fab fa-facebook-f d-flex align-items-center  justify-content-center bdr_2 fs_11"></i></a>
                            <a href="javascript:;"><i
                                    class="fab fa-twitter d-flex align-items-center  justify-content-center bdr_2 fs_11"></i></a>
                            <a href="javascript:;"><i
                                    class="fab fa-instagram d-flex align-items-center  justify-content-center bdr_2 fs_11"></i></a>
                            <a href="javascript:;"><i
                                    class="fab fa-linkedin-in d-flex align-items-center  justify-content-center bdr_2 fs_11"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu pd-10">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-3 col-md-5 col-sm-5 col-6">
                        <a href="<?php echo $url; ?>">
                            <img src="<?php echo $url; ?>assets/images/home/logo.svg" draggable="false" width="70%"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-7  col-md-9 col-sm-9 mob-none">
                        <nav class="h-100 d-flex align-items-center w-100">
                            <ul class="li-none w-100  d-flex justify-content-around m-0 p-0">
                                <li>
                                    <a href="<?php echo $url; ?>" class="fs_16 color_5 pa">
                                        Home
                                    </a>
                                </li>
                                <li class=" dropdown drop-after">
                                    <a href="javascript:;" class="fs_16 color_5 pa">
                                        About
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm ">
                                        <ul class="li-none m-0 p-0">
                                            <li><a href="<?php echo $url; ?>about/who-we-are.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span> Who We
                                                    Are</a></li>
                                            <li><a href="<?php echo $url; ?>about/how-it-works.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span> How It
                                                    Works</a></li>
                                            <li><a href="<?php echo $url; ?>about/partner.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span>
                                                    Partner</a></li>
                                            <li><a href="<?php echo $url; ?>about/our-policies.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span> Our
                                                    Policies</a></li>
                                            <li><a href="<?php echo $url; ?>about/faqs.php" class="fs_16 color_5"><span
                                                        class="color_4 fw_800">•</span> FAQs</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown pos-unset ">
                                    <a href="javascript:;" class="fs_16 color_5 pa drop-after pos-rel">
                                        Disciplines
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm drop-extra">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-lg-4">
                                                    <div class="content">
                                                        <h6 class="fs_16 fw_400 color_5 m-0"> About Us</h6>
                                                        <h4 class="fs_18 fw_700 color_5 pd-b-10 mg-b-10">Do not Stop!
                                                            Publish your <span class="color_1">research</span>
                                                            with us and let the world know </h4>

                                                        <p class="fs_14 m-0 color_5 line-height-1-2">
                                                            Scotland Top Publishers are globally trusted and partnered
                                                            with many reputed universities and High-Indexed Journals.
                                                            Our believe is authentic research should be available for
                                                            all researchers globally, and we are working on it.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <ul class="li-none m-0 p-0">
                                                        <li><a href="<?php echo $url; ?>disciplines/medicine.php "
                                                                class="fs_16 color_5"> Medicine</a></li>
                                                        <li><a href="<?php echo $url; ?>disciplines/economics.php"
                                                                class="fs_16 color_5"> Economics</a></li>
                                                        <li><a href="<?php echo $url; ?>disciplines/education.php"
                                                                class="fs_16 color_5"> Education</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-2">
                                                    <ul class="li-none m-0 p-0">
                                                        <li><a href="<?php echo $url; ?>disciplines/health.php "
                                                                class="fs_16 color_5"> Health</a></li>
                                                        <li><a href="<?php echo $url; ?>disciplines/engineering.php"
                                                                class="fs_16 color_5"> Engineering</a></li>
                                                        <li><a href="<?php echo $url; ?>disciplines/social-science.php"
                                                                class="fs_16 color_5"> Social Science</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-2">
                                                    <ul class="li-none m-0 p-0">
                                                        <li><a href="<?php echo $url; ?>disciplines/business-management.php "
                                                                class="fs_16 color_5"> Business Management</a></li>
                                                        <li><a href="<?php echo $url; ?>disciplines/bioscience.php"
                                                                class="fs_16 color_5"> Bioscience</a></li>
                                                        <li><a href="<?php echo $url; ?>disciplines/dentistry.php"
                                                                class="fs_16 color_5"> Dentistry</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-2">
                                                    <ul class="li-none m-0 p-0">
                                                        <li><a href="<?php echo $url; ?>disciplines/earth-science.php "
                                                                class="fs_16 color_5"> Earth Science</a></li>
                                                        <li><a href="<?php echo $url; ?>disciplines/biology.php"
                                                                class="fs_16 color_5"> Biology</a></li>
                                                        <li><a href="<?php echo $url; ?>disciplines/agriculture-research.php"
                                                                class="fs_16 color_5"> Agriculture Research</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="dropdown drop-after">
                                    <a href="javascript:;" class="fs_16 color_5 pa">
                                        Resources
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm">
                                        <ul class="li-none m-0 p-0">
                                            <li><a href="<?php echo $url; ?>resources/author.php "
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span>
                                                    Author</a></li>
                                            <li><a href="<?php echo $url; ?>resources/advertisers.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span>
                                                    Advertise</a></li>
                                            <li><a href="<?php echo $url; ?>resources/librarians.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span>
                                                    Librarians</a></li>
                                            <li><a href="<?php echo $url; ?>resources/societies.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span>
                                                    Societies</a></li>
                                            <!-- <li><a href="<?php echo $url; ?>about/faqs.php" class="fs_16 color_5">FAQs</a></li> -->
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown drop-after">
                                    <a href="javascript:;" class="fs_16 color_5 pa">
                                        Services
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm">
                                        <ul class="li-none m-0 p-0">
                                            <li><a href="<?php echo $url; ?>services/choose-a-journal.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span> Choose a
                                                    Journal</a></li>
                                            <li><a href="<?php echo $url; ?>services/preparing-article.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span>
                                                    Preparing Article</a></li>
                                            <li><a href="<?php echo $url; ?>services/submit-paper.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span> Submit
                                                    Paper</a></li>
                                            <li><a href="<?php echo $url; ?>services/promote-research.php"
                                                    class="fs_16 color_5"><span class="color_4 fw_800">•</span> Promote
                                                    Research</a></li>
                                            <!-- <li><a href="<?php echo $url; ?>about/faqs.php" class="fs_16 color_5">FAQs</a></li> -->
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2  col-md-3 col-sm-3 mob-none">
                        <a href="<?php echo $url; ?>contact-us.php" class="d-flex align-items-center w-100 h-100">
                            <button class="w-100 p-10 bg-color_4 clr_white fs_16 fw_600 bdr-1 bdr-color_4"><img
                                    src="<?php echo $url; ?>assets/images/home/white-dot.png" draggable="false"
                                    width="auto" class="img-fluid filter-white" alt=""> &nbsp; Contact
                                us</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </header>
