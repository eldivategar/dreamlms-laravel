<?php $page = 'instructor-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Dashboard
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Dashboard
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row">

                @component('components.sidebar')
                @endcomponent

                <!-- Student Dashboard -->
                <div class="col-xl-9 col-lg-9">

                    <!-- Dashboard Grid -->
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card dash-info flex-fill">
                                <div class="card-body">
                                    <h5>Enrolled Courses</h5>
                                    <h2>13</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card dash-info flex-fill">
                                <div class="card-body">
                                    <h5>Active Courses</h5>
                                    <h2>08</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card dash-info flex-fill">
                                <div class="card-body">
                                    <h5>Completed Courses</h5>
                                    <h2>06</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card dash-info flex-fill">
                                <div class="card-body">
                                    <h5>Total Students</h5>
                                    <h2>5</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card dash-info flex-fill">
                                <div class="card-body">
                                    <h5>Total Courses</h5>
                                    <h2>11</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card dash-info flex-fill">
                                <div class="card-body">
                                    <h5>Total Earnings</h5>
                                    <h2>$486</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Dashboard Grid -->

                    <div class="instructor-course-table">
                        <div class="dashboard-title">
                            <h4>Recently Created Courses</h4>
                        </div>
                        <div class="table-responsive custom-table">

                            <!-- Referred Users-->
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Courses</th>
                                        <th>Enrolled</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="table-course-detail">
                                                <a href="{{url('course-details')}}" class="course-table-img">
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/instructor/instructor-table-01.jpg') }}"
                                                            alt="Img"></span>
                                                    Complete HTML, CSS and Javascript Course
                                                </a>
                                            </div>
                                        </td>
                                        <td>0</td>
                                        <td>Published</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-course-detail">
                                                <a href="{{url('course-details')}}" class="course-table-img">
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/instructor/instructor-table-05.jpg') }}"
                                                            alt="Img"></span>
                                                    Complete Course on Fullstack Web Developer
                                                </a>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>Published</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-course-detail">
                                                <a href="{{url('course-details')}}" class="course-table-img">
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/instructor/instructor-table-02.jpg') }}"
                                                            alt="Img"></span>
                                                    Data Science Fundamentals and Advanced Bootcamp
                                                </a>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>Published</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-course-detail">
                                                <a href="{{url('course-details')}}" class="course-table-img">
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/instructor/instructor-table-03.jpg') }}"
                                                            alt="Img"></span>
                                                    Master Microservices with Spring Boot and Spring Cloud
                                                </a>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>Published</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-course-detail">
                                                <a href="{{url('course-details')}}" class="course-table-img">
                                                    <span><img
                                                            src="{{ URL::asset('/build/img/instructor/instructor-table-04.jpg') }}"
                                                            alt="Img"></span>
                                                    Information About UI/UX Design Degree
                                                </a>
                                            </div>
                                        </td>
                                        <td>3</td>
                                        <td>Published</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="dashboard-title">
                        <h4>Recently Enrolled Courses</h4>
                    </div>
                    <div class="row">

                        <!-- Course Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="course-box flex-fill">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{ url('course-details') }}">
                                            <img class="img-fluid" alt="Img"
                                                src="{{ URL::asset('/build/img/course/course-02.jpg') }}">
                                        </a>
                                        <div class="price">
                                            <h3>$80 <span>$99.00</span></h3>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-group d-flex">
                                            <div class="course-group-img d-flex">
                                                <a href="{{ url('instructor-profile') }}"><img
                                                        src="{{ URL::asset('/build/img/user/user2.jpg') }}" alt="Img"
                                                        class="img-fluid"></a>
                                                <div class="course-name">
                                                    <h4><a href="{{ url('instructor-profile') }}">Cooper</a></h4>
                                                    <p>Instructor</p>
                                                </div>
                                            </div>
                                            <div class="course-share d-flex align-items-center justify-content-center">
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Wordpress
                                                for Beginners - Master Wordpress Quickly</a></h3>
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img">
                                                <p>70hr 30min</p>
                                            </div>
                                        </div>
                                        <div class="rating mb-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-rating"><span>5.0</span> (20)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Course Grid -->

                        <!-- Course Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="course-box flex-fill">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{ url('course-details') }}">
                                            <img class="img-fluid" alt="Img"
                                                src="{{ URL::asset('/build/img/course/course-03.jpg') }}">
                                        </a>
                                        <div class="price combo">
                                            <h3>FREE</h3>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-group d-flex">
                                            <div class="course-group-img d-flex">
                                                <a href="{{ url('instructor-profile') }}"><img
                                                        src="{{ URL::asset('/build/img/user/user5.jpg') }}"
                                                        alt="Img" class="img-fluid"></a>
                                                <div class="course-name">
                                                    <h4><a href="{{ url('instructor-profile') }}">Jenny</a></h4>
                                                    <p>Instructor</p>
                                                </div>
                                            </div>
                                            <div class="course-share d-flex align-items-center justify-content-center">
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Sketch
                                                from A to Z (2022): Become an app designer</a></h3>
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                    alt="Img">
                                                <p>10+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                    alt="Img">
                                                <p>40hr 10min</p>
                                            </div>
                                        </div>
                                        <div class="rating mb-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>3.0</span> (18)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Course Grid -->

                        <!-- Course Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="course-box flex-fill">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{ url('course-details') }}">
                                            <img class="img-fluid" alt="Img"
                                                src="{{ URL::asset('/build/img/course/course-04.jpg') }}">
                                        </a>
                                        <div class="price">
                                            <h3>$65 <span>$70.00</span></h3>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-group d-flex">
                                            <div class="course-group-img d-flex">
                                                <a href="{{ url('instructor-profile') }}"><img
                                                        src="{{ URL::asset('/build/img/user/user4.jpg') }}"
                                                        alt="Img" class="img-fluid"></a>
                                                <div class="course-name">
                                                    <h4><a href="{{ url('instructor-profile') }}">Nicole Brown</a></h4>
                                                    <p>Instructor</p>
                                                </div>
                                            </div>
                                            <div class="course-share d-flex align-items-center justify-content-center">
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Learn
                                                Angular Fundamentals From beginning to advance lavel</a></h3>
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                    alt="Img">
                                                <p>15+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                    alt="Img">
                                                <p>80hr 40min</p>
                                            </div>
                                        </div>
                                        <div class="rating mb-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.0</span> (10)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Course Grid -->

                        <!-- Course Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="course-box flex-fill">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{ url('course-details') }}">
                                            <img class="img-fluid" alt="Img"
                                                src="{{ URL::asset('/build/img/course/course-05.jpg') }}">
                                        </a>
                                        <div class="price combo">
                                            <h3>FREE</h3>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-group d-flex">
                                            <div class="course-group-img d-flex">
                                                <a href="{{ url('instructor-profile') }}"><img
                                                        src="{{ URL::asset('/build/img/user/user3.jpg') }}"
                                                        alt="Img" class="img-fluid"></a>
                                                <div class="course-name">
                                                    <h4><a href="{{ url('instructor-profile') }}">John Smith</a></h4>
                                                    <p>Instructor</p>
                                                </div>
                                            </div>
                                            <div class="course-share d-flex align-items-center justify-content-center">
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Build
                                                Responsive Real World Websites with Crash Course</a></h3>
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                    alt="Img">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                    alt="Img">
                                                <p>70hr 30min</p>
                                            </div>
                                        </div>
                                        <div class="rating mb-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Course Grid -->

                        <!-- Course Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="course-box flex-fill">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{ url('course-details') }}">
                                            <img class="img-fluid" alt="Img"
                                                src="{{ URL::asset('/build/img/course/course-07.jpg') }}">
                                        </a>
                                        <div class="price">
                                            <h3>$70 <span>$80.00</span></h3>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-group d-flex">
                                            <div class="course-group-img d-flex">
                                                <a href="{{ url('instructor-profile') }}"><img
                                                        src="{{ URL::asset('/build/img/user/user6.jpg') }}"
                                                        alt="Img" class="img-fluid"></a>
                                                <div class="course-name">
                                                    <h4><a href="{{ url('instructor-profile') }}">Stella Johnson</a></h4>
                                                    <p>Instructor</p>
                                                </div>
                                            </div>
                                            <div class="course-share d-flex align-items-center justify-content-center">
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Learn
                                                JavaScript and Express to become a Expert</a></h3>
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                    alt="Img">
                                                <p>15+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                    alt="Img">
                                                <p>70hr 30min</p>
                                            </div>
                                        </div>
                                        <div class="rating mb-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.6</span> (15)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Course Grid -->

                        <!-- Course Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="course-box flex-fill">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{ url('course-details') }}">
                                            <img class="img-fluid" alt="Img"
                                                src="{{ URL::asset('/build/img/course/course-08.jpg') }}">
                                        </a>
                                        <div class="price combo">
                                            <h3>FREE</h3>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-group d-flex">
                                            <div class="course-group-img d-flex">
                                                <a href="{{ url('instructor-profile') }}"><img
                                                        src="{{ URL::asset('/build/img/user/user1.jpg') }}"
                                                        alt="Img" class="img-fluid"></a>
                                                <div class="course-name">
                                                    <h4><a href="{{ url('instructor-profile') }}">Nicole Brown</a></h4>
                                                    <p>Instructor</p>
                                                </div>
                                            </div>
                                            <div class="course-share d-flex align-items-center justify-content-center">
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <h3 class="title instructor-text"><a
                                                href="{{ url('course-details') }}">Introduction to Programming- Python &
                                                Java</a></h3>
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}"
                                                    alt="Img">
                                                <p>10+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center">
                                                <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}"
                                                    alt="Img">
                                                <p>70hr 30min</p>
                                            </div>
                                        </div>
                                        <div class="rating mb-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-rating"><span>5.0</span> (13)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Course Grid -->

                    </div>
                    <div class="dash-pagination">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p>Page 1 of 2</p>
                            </div>
                            <div class="col-6">
                                <ul class="pagination">
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="bx bx-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Dashboard -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
