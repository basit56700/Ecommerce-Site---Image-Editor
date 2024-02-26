<!-- Start Footer Area -->
<footer id="mt-footer" class="style1 wow fadeInUp" data-wow-delay="0.4s"
    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
    <!-- Footer Holder of the Page -->
    <?php
    $settings= DB::table("settings")->first();
    ?>
    <div class="footer-holder dark" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row footer-div" bis_skin_checked="1">
                <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm" bis_skin_checked="1">
                    <!-- F Widget About of the Page -->
                    <div class="f-widget-about" bis_skin_checked="1">
                        
                        <div class="logo" bis_skin_checked="1">
                            <a href="#"><img id="logo-footer" src='{{ asset("$settings->logo")}}' alt="Schon"></a>
                        </div>
                        <p>{{$settings->description}}</p>
                        <!-- Social Network of the Page -->
                        <ul class="list-unstyled social-network">
                            <li><a href="#"><i class="fa-brands fa-square-x-twitter fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp fa-2x"></i></a></li>
                        </ul>
                        <!-- Social Network of the Page end -->
                    </div>
                    <!-- F Widget About of the Page end -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm" bis_skin_checked="1">
                    <div class="f-widget-news" bis_skin_checked="1">
                        <h3 class="f-widget-heading">Twitter</h3>
                        <div class="news-articles" bis_skin_checked="1">
                            <div class="news-column" bis_skin_checked="1">
                                <i class="fa fa-twitter"></i>
                                <div class="txt-box" bis_skin_checked="1">
                                    <p>Laboris nisi ut <a href="#">#schön</a> aliquip econse- <br>quat. <a
                                            href="#">https://t.co/vreNJ9nEDt</a></p>
                                </div>
                            </div>
                            <div class="news-column" bis_skin_checked="1">
                                <i class="fa fa-twitter"></i>
                                <div class="txt-box" bis_skin_checked="1">
                                    <p>Ficia deserunt mollit anim id est labo- <br>rum. incididunt ut labore et dolore
                                        <br><a href="#">https://t.co/vreNJ9nEDt</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs" bis_skin_checked="1">
                    <!-- Footer Tabs of the Page -->
                   
                    <?php
                    $tags= DB::table("post_tags")->where("status",1)->get();
                    ?>
                    
                    <div class="f-widget-tabs" bis_skin_checked="1">
                        <h3 class="f-widget-heading">Product Tags</h3>
                        <ul class="list-unstyled tabs">
                            @foreach ($tags as $tag)
                            <li><a href="#">{{$tag->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>  
                  
                    
                    <!-- Footer Tabs of the Page -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 text-right" bis_skin_checked="1">
                    <!-- F Widget About of the Page -->
                    <div class="f-widget-about" bis_skin_checked="1">
                        <h3 class="f-widget-heading">Information</h3>
                        <ul class="list-unstyled address-list align-right">
                            <li><i class="fa fa-map-marker"></i>
                                <address>{{$settings->address}}</address>
                            </li>
                            <li><i class="fa fa-phone"></i><a href="tel:15553332211" bis_skin_checked="1">{{$settings->phone}}</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@schon.chair"
                                    bis_skin_checked="1">{{$settings->email}}</a></li>
                        </ul>
                    </div>
                    <!-- F Widget About of the Page end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Holder of the Page end -->
    <!-- Footer Area of the Page -->
    
    <!-- Footer Area of the Page end -->
</footer>

<style>

    
    </style>

<!-- /End Footer Area -->

<!-- Jquery -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

<!-- Editor -->
<script src="{{ asset('editor/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('editor/js/jquery.mobile.custom.min.js') }}"></script> <!-- Resource jQuery -->
<script src="{{ asset('editor/js/main.js') }}"></script> <!-- Resource jQuery -->

<!-- Main Slider -->
<script src="{{ asset('frontend/js/slider-script.js') }}"></script>




@stack('scripts')
<script></script>
