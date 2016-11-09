@extends('techedu.layout.basic')

@section('content')

@include('techedu/pages/partials/banner_breadcrumb' )

<!--Contact Area Strat-->
<div class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-area-container">
                    <div class="single-title">
                        <h3>@lang('page.contact.info.title')</h3>
                    </div>
                    <p>@lang('page.contact.info.desc')</p>
                    <div class="contact-address-container">
                        <div class="contact-address-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-text">
                                <h4>@lang('page.contact.info.adress')</h4>
                                <span>{{ config('agaja.adress')}}</span>
                            </div>
                        </div>
                        <div class="contact-address-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>@lang('page.contact.info.phone')</h4>
                                <span>{{ config('agaja.phone')}}</span>
                            </div>
                        </div>
                        <div class="contact-address-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4>@lang('page.contact.info.email')</h4>
                                <span>{{ config('agaja.email')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <div class="single-title">
                        <h3>@lang('page.contact.form.title')</h3>
                    </div>
                    <div class="contact-form-container">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="@lang('page.contact.form.placeholders.name') *">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="@lang('page.contact.form.placeholders.email') *">
                                </div>
                            </div>
                            <input type="text" name="subject" placeholder="@lang('page.contact.form.placeholders.subject') *">
                            <textarea name="message" class="yourmessage" placeholder="@lang('page.contact.form.placeholders.message') "></textarea>
                            <button type="submit" class="button-default button-yellow"><i class="fa fa-send"></i>@lang('page.contact.form.submit')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Contact Area-->

<!--Google Map Area Start -->
<div class="google-map-area">
    <!--  Map Section -->
    <div id="contacts" class="map-area">
        <div id="googleMap" style="width:100%;height:451px;"></div>
    </div>
</div>
<!--End of Google Map Area-->

@endsection

@push('scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4GgA1DQkaAcGLeEr_Z2G38lQzPPvHQBo"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="/js/run_google_maps.js"></script>
@endpush