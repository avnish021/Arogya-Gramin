
<?php 
include 'header.php';
include 'connect.php';
?>


    <section class="page-header padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-content text-center">
                <h2>Outstanding Activities!</h2>
                <p>Charitable giving as a religious act or duty is referred to as alms. The name <br>stems from the most obvious expression of the virtue of charity.</p>
                <div class="page-item">
                    <a href="#"><i class="ti-home"></i>Home </a>
                    <p>Outstanding Activities</p>
                </div>
            </div>
        </div>
    </section><!-- /. page-header -->

    <div class="gallary-section bg-grey bd-bottom padding">
        <div class="container">
            <ul class="gallery-filter text-center mb-30">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".education">Education</li>
                <li data-filter=".food">Food</li>
                <li data-filter=".medicine">Medicine</li>
                <li data-filter=".sanitation">Sanitation</li>
            </ul>
            <div class="row gallary-items">
                <div class="col-lg-4 col-md-6 padding-15 single-item education medicine">
                    <div class="gallary-item">
                        <img src="assets/new/img/gallery-1-450x420.jpg" alt="gallary">
                        <div class="gallary-hover">
                            <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/gallery-1.jpg"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item food medicine">
                    <div class="gallary-item">
                        <img src="assets/new/img/gallery-2-450x420.jpg" alt="gallary">
                        <div class="gallary-hover">
                            <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/gallery-2.jpg"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item medicine food">
                    <div class="gallary-item">
                        <img src="assets/new/img/gallery-3-450x420.jpg" alt="gallary">
                        <div class="gallary-hover">
                            <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/gallery-3.jpg"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item sanitation education">
                    <div class="gallary-item">
                        <img src="assets/new/img/gallery-4-450x420.jpg" alt="gallary">
                        <div class="gallary-hover">
                            <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/gallery-4.jpg"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item education food">
                    <div class="gallary-item">
                        <img src="assets/new/img/gallery-5-450x420.jpg" alt="gallary">
                        <div class="gallary-hover">
                            <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/gallery-5.jpg"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item food sanitation">
                    <div class="gallary-item">
                        <img src="assets/new/img/gallery-6-450x420.jpg" alt="gallary">
                        <div class="gallary-hover">
                            <a class="img-popup vbox-item" data-gall="gallery01" href="assets/new/img/gallery-6.jpg"><i class="ti-plus"></i></a>
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
