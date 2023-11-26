@extends("layouts.master")

@section("title", "About Me")
@section("content")
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Me</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <div class="video_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video_wrap">
                        <div class="thumb">
                           
                        </div>
                        <div class="video_text text-center">
                            <p>Hi there, I am Tanzina. I am web developer, animals  <br>
                                lover and I would like to share with you some of <br>
                                my ideas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about_me  -->
    <div class="about_me">
        <div class="about_large_title d-none d-lg-block">
            About
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_e_details">
                        <h3>About me</h3>
                        <p>Hello! I'm Tanzina Akther. I am a student in Leading University, Sylhet .I am a junior backend developer.
<br>
Skills:
<br>
C,CPP,JAVA,HTML,CSS, BOOTSTRAP,PHP,MATLAB and LARAVEL.
<br>
Education:
<br>
Bsc in Computer Science and Engineering | | Leading University
<br>
Jan-2020 – Running 
<br>
HSC | | Women’s Model College
<br>
2016 – 2017 
<br>
SSC | | Somuj Ali high school and College
<br>
2014 – 2015.
</p>
                        <div class="download_cv">
                            <a class="boxed-btn3" href="#">Download CV</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_img">
                        <div class="color_pattern d-none d-lg-block">
                            <img src="{{ asset("img/about/color_grid.png") }}" alt="">
                        </div>
                        <div class="my_Pic">
                            <img src="{{ asset("img/about/about.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_me  -->

    @include("components.counter")
    @include("components.testimonial")
    @include("components.discuss_projects")
@endsection
