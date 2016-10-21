<!--Teachers Column Carousel Start-->
<div class="teachers-column-carousel-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Nasza załoga</h3>
                        <p>Każdy z nich jest inny, ale każdy tak samo wyjątkowy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="teachers-column-carousel carousel-style-one">
                @each('techedu/pages/teacher/partials/index_profile', $teachers, 'teacher')
                <div class="col-md-3">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="img/teacher/7.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Ola</h4>
                            <span>Professor, Harvard College</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the industry's standard dummy.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="img/teacher/10.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Kinga</h4>
                            <span>Professor, Harvard College</span>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="img/teacher/9.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Agnieszka</h4>
                            <span>Professor, Harvard College</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-teachers-column text-center">
                        <div class="teachers-image-column">
                            <a href="teacher-info.html">
                                <img src="img/teacher/8.jpg" alt="">
                                <span class="image-hover">
                                    <span><i class="fa fa-edit"></i>View Profile</span>
                                </span>
                            </a>
                        </div>
                        <div class="teacher-column-carousel-text">
                            <h4>Renia</h4>
                            <span>Professor, Harvard College</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the industry's standard dummy.</p>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Teachers Column Carousel-->