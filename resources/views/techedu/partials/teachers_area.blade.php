<!--Teachers Column Carousel Start-->
<div class="teachers-column-carousel-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a name="stuff"></a>
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
            </div>
        </div>
    </div>
</div>
<!--End of Teachers Column Carousel-->