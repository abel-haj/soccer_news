@extends('layouts.app')

@section('style')
<style>
    .trending-main img {width:100%;}
    .trending-area {text-align:right;}
    .what-img img {width:370px;height:344px;background:#000000aa;}
    .trand-right-img {width: 150px;display: -ms-flexbox;display: flex;-ms-flex-align: center;align-items: center;}
</style>
@endsection

@section('content')
<!-- Trending Area Start -->
<div class="trending-area fix mt-50">
    <div class="container">
        <div class="trending-main" >
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                            <div class="trend-top-cap">
                                <span>Appetizers</span>
                                <h2><a href="">هناك حقيقة مثبتة منذ زمن طويل <br> وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            <div class="col-lg-4">
                            <div class="single-bottom mb-35">
                                <div class="trend-bottom-img mb-30">
                                    <img src="https://dummyimage.com/600x400/000/fff" alt="">
                                </div>
                                <div class="trend-bottom-cap">
                                    <span class="color1">Lifestyple</span>
                                    <h4><a href="">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ </a></h4>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="https://dummyimage.com/hd1080" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color2">Sports</span>
                                        <h4><h4><a href="">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ </a></h4></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color3">Travels</span>
                                        <h4><a href=""> خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img ml-10">
                            <img src="https://dummyimage.com/hd1080" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">Concert</span>
                            <h4><a href="">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img ml-10">
                            <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color3">sea beach</span>
                            <h4><a href="">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</a></h4>
                        </div>
                    </div>
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img ml-10">
                            <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color2">Bike Show</span>
                            <h4><a href="">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</a></h4>
                        </div>
                    </div> 
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img ml-10">
                            <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color4">See beach</span>
                            <h4><a href="">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->

<!--  Recent Articles start -->
<div class="recent-articles pt-50 pb-20">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row mb-10">
                <div class="col-lg-12">
                    <div class="section-tittle mb-40">
                        <h3 class="text-right">آخر الأخبار</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                            </div>
                            <div class="what-cap">
                                <span class="color1">لوريم ايبسوم</span>
                                <h4><a href="#">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه</a></h4>
                            </div>
                        </div>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                            </div>
                            <div class="what-cap">
                                <span class="color1">دولار سيت</span>
                                <h4><a href="#">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه</a></h4>
                            </div>
                        </div>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                            </div>
                            <div class="what-cap">
                                <span class="color1">كونسيكتيتور أدايبا</span>
                                <h4><a href="#">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه</a></h4>
                            </div>
                        </div>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img src="https://newspaperss-demos.imonthemes.com/wp-content/uploads/2018/10/iMac-Screen-Mockup.jpg" alt="">
                            </div>
                            <div class="what-cap">
                                <span class="color1">يسكينج أليايت</span>
                                <h4><a href="#">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>           
<!--Recent Articles End -->
@endsection
