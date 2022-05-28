<?php 
include 'header.php';
include 'connect.php';
?>


<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Gallery</h2>
            <p>Our work activity is in the gallery. You can see most of our outstanding activities in our gallery
                section. <br>This shows the work we have done for the public welfare.</p>
            <div class="page-item bannercenter">
                <a href="#"><i class="ti-home"></i>Home </a>
                <p>Gallery</p>
            </div>
        </div>
    </div>
</section><!-- /. page-header -->

<div class="gallary-section bg-grey bd-bottom padding">
    <div class="container">
        <ul class="gallery-filter text-center mb-30">
            <li class="active" data-filter="*">All</li>
            <li data-filter=".education">Health Camp</li>
            <li data-filter=".food">Door To Door Pampign</li>
            <li data-filter=".medicine">Kendra Opening</li>
            <li data-filter=".sanitation">Press Release</li>
        </ul>
        <div class="row gallary-items">
            <div class="col-lg-3 col-md-6 padding-15 single-item education medicine">
                <div class="gallary-item">
                    <img src="assets/new/img/Img_1.jpeg" alt="gallary">
                    <div class="gallary-hover">
                        <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/Img_1.jpeg"><i
                                class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 single-item food medicine">
                <div class="gallary-item">
                    <img src="assets/new/img/Picture1.jpg" alt="gallary">
                    <div class="gallary-hover">
                        <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/Picture1.jpg"><i
                                class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 single-item medicine food">
                <div class="gallary-item">
                    <img src="assets/new/img/Picture2.jpg" alt="gallary">
                    <div class="gallary-hover">
                        <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/Picture2.jpg"><i
                                class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 single-item sanitation education">
                <div class="gallary-item">
                    <img src="assets/new/img/Picture3.jpg" alt="gallary">
                    <div class="gallary-hover">
                        <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/Picture3.jpg"><i
                                class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 single-item education food">
                <div class="gallary-item">
                    <img src="assets/new/img/Picture4.jpg" alt="gallary">
                    <div class="gallary-hover">
                        <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/Picture4.jpg><i
                                class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 single-item food sanitation">
                <div class="gallary-item">
                    <img src="assets/new/img/Picture5.jpg" alt="gallary">
                    <div class="gallary-hover">
                        <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/Picture5.jpg"><i
                                class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sponsor-section">
    <div class="container">
        <div class="slider sponsor-carousel nav-style">
            <div class="sponsor-item">
                <img src="assets/images/partner/1.jpg" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/2.png" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/3.png" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/4.png" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/5.jpg" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/6.png" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/7.png" alt="sponsor" width="100" height="70">
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>