        <!--Class Area Start-->
        <div class="class-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>{{trans('therapies.list.title')}}</h3>
                                <p>{{trans('therapies.list.description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="class-carousel carousel-style-one">
                        @each('techedu/pages/therapy/partials/list_item', $therapies, 'therapy')
                    </div>
                </div>
            </div>
        </div>
        <!--End of Class Area-->