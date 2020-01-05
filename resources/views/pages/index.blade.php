@extends('layouts.app')
@section('content')


<section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" id="header2-1">

    

                <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(118, 118, 118);"></div>
            
                <div class="container align-center">
                    <div class="row justify-content-md-center">
                        <div class="mbr-white col-md-10">
                            <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Gas Station Monitoring</h1>
                            
                            
                            
                        </div>
                    </div>
                </div>
                <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
                    <a href="#next">
                        <i class="mbri-down mbr-iconfont"></i>
                    </a>
                </div>
            </section>
            
            <section class="services1 cid-rGHzwzVNt5" id="services1-f">
                <!---->
                
                <!---->
                <!--Overlay-->
                
                <!--Container-->
                <div class="container">
                    <div class="row justify-content-center">
                        <!--Titles-->
                        <div class="title pb-5 col-12">
                            <h2 class="align-left pb-3 mbr-fonts-style display-1">
                                Gasoline Prices
                            </h2>
                            
                        </div>
                        <!--Card-1-->
                        <div class="card col-12 col-md-6 p-3 col-lg-4">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <img src="assets/images/red-194x193.png" alt="95" title="">
                                </div>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style display-5">
                                        95 Gasoline</h4>
                                    <p class="mbr-text mbr-fonts-style display-7"></p>
                                    <!--Btn-->
                                    <div class="mbr-section-btn align-left"><a href="#" class="btn btn-warning-outline display-4">
                                        {{$lastdata->premiumOctane}} SAR
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <!--Card-2-->
                        <div class="card col-12 col-md-6 p-3 col-lg-4">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <img src="assets/images/green-193x193.png" alt="91" title="">
                                </div>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style display-5">91 Gasoline</h4>
                                    <p class="mbr-text mbr-fonts-style display-7"></p>
                                    <!--Btn-->
                                    <div class="mbr-section-btn align-left"><a href="#" class="btn btn-warning-outline display-4">
                                        {{$lastdata->normalOctane}} SAR
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <!--Card-3-->
                        <div class="card col-12 col-md-6 p-3 col-lg-4 last-child">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <img src="assets/images/yellow-170x172.png" alt="D" title="">
                                </div>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style display-5">
                                        Diesel                    </h4>
                                    <p class="mbr-text mbr-fonts-style display-7"></p>
                                    <!--Btn-->
                                    <div class="mbr-section-btn align-left">
                                        <a href="#" class="btn btn-warning-outline display-4">
                                                {{$lastdata->diesel}} SAR
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Card-4-->
                        
                    </div>
                </div>
            </section>
            
            <section class="header1 cid-rGHwyIpez5" id="header16-a">
            
                
            
                
            
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10 align-center">
                            <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                                Report Gas Staion?</h1>
                            
                            <p class="mbr-text pb-3 mbr-fonts-style display-5"></p>
                            <div class="mbr-section-btn"><a class="btn btn-md btn-black-outline display-4" href="/report">Click me</a></div>
                        </div>
                    </div>
                </div>
            
            </section>
@endsection

