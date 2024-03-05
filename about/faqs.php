<?php include('../header.php');
$banner_heading = 'FAQs';
$banner_para = 'Get the answer to your questions. The team of experts is always here to fulfill all your needs of editing and publishing. ';
?>
<style>
.faq-sec .heading {
    display: none;
}
</style>
<div id="inner" class="about partner faqs">
    <?php include('banner.php'); ?>
    <div class="first-sec pd-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-5">
                    <img src="../assets/images/about/first-sec-5.png" draggable="false" width="auto" alt="">
                </div>
                <div class="col-lg-6 col-sm-7">
                    <div class="content">
                        <h6 class="fs_18 fw_400 color_5 m-0">Our publishing</h6>
                        <h4 class="fs_32 fw_700 color_2 pd-b-10 mg-b-10 lft-line pos-rel">Workflow <span
                                class="color_1">Process</span>
                        </h4>

                        <p class="fs_16 color_5 line-height-1-3">
                            Our Publication workflow process is very clear and smooth. The workflow process starts with
                            the writer, submits the manuscript to the journal editor, and sends the manuscript to peer
                            review. If any changes are required, the journal editor sends the recommended changes to the
                            author. After the changes, the writer will submit the manuscript again to the journal editor
                            and send it to peer-review. The Journal editor makes a final decision.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-br pd-40">
        <div class="container">
            <div class="row justify-content-center gap-sm-3">
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <a href="who-we-are.php">
                        <div class="content text-center">
                            <img src="../assets/images/about/li-1.png" draggable="false" width="auto" alt="">
                            <h5 class="fs_16 color_5 pd-t-15 fw_700">

                                Who We Are?
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <a href="how-it-works.php">
                        <div class="content text-center ">
                            <img src="../assets/images/about/li-2.png" draggable="false" width="auto" alt="">
                            <h5 class="fs_16 color_5 pd-t-15 fw_700">

                                How It Works?
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <a href="partner.php">
                        <div class="content text-center ">
                            <img src="../assets/images/about/li-3.png" draggable="false" width="auto" alt="">
                            <h5 class="fs_16 color_5 pd-t-15 fw_700">
                                Partner
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <a href="our-policies.php">
                        <div class="content text-center ">
                            <img src="../assets/images/about/li-4.png" draggable="false" width="auto" alt="">
                            <h5 class="fs_16 color_5 pd-t-15 fw_700">
                                Our Policies
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <a href="faqs.php">
                        <div class="content text-center active">
                            <img src="../assets/images/about/li-5.png" draggable="false" width="auto" alt="">
                            <h5 class="fs_16 color_5 pd-t-15 fw_700">
                                FAQs
                            </h5>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <?php include('faqs-sec.php'); ?>
    <?php include('ser.php'); ?>
    <?php include('../inc/subject.php'); ?>

</div>
<?php include('../footer.php') ?>
