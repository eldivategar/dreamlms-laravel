<?php $page = 'instructor-orders'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Order History
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            Order History
        @endslot
    @endcomponent

   	<!-- Page Wrapper -->
       <div class="page-content">
        <div class="container">
            <div class="row">
                
                  
                @component('components.sidebar')
               @endcomponent 
                
                
                <!-- Instructor Order History -->
                <div class="col-xl-9 col-lg-9">	

                    <div class="settings-widget card-details">
                        <div class="settings-menu p-0">
                            <div class="profile-heading">
                                <h3>Order History</h3>
                            </div>
                            <div class="checkout-form">

                                <!-- Order Tabs -->
                                <div class="wishlist-tab order-tab">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="active" data-bs-toggle="tab" data-bs-target="#today">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#month">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#year">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Order Tabs -->

                                <!-- Tab Content -->
                                <div class="tab-content">

                                    <!-- Today -->
                                    <div class="tab-pane show active" id="today">
                                        <div class="table-responsive custom-table">
                                            <table class="table table-nowrap mb-0">
                                                <thead>
                                                  <tr>
                                                    <th>Order ID</th>
                                                    <th>Course Name</th>
                                                    <th>Date</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2643</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Build Responsive Real World Websites with HTML5 and CSS3</a></td>
                                                        <td>March 24, 2024</td>
                                                        <td>$34</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2644</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Sketch from A to Z (2024): Become an app designer</a></td>
                                                        <td>March 26, 2024</td>
                                                        <td>$40</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2645</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Learn Angular Fundamentals Beginners Guide</a></td>
                                                        <td>April 12, 2024</td>
                                                        <td>$25</td>
                                                        <td>Completed</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2646</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Build Responsive Real World Websites with HTML5 and CSS3</a></td>
                                                        <td>April 16, 2024</td>
                                                        <td>$35</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Today -->

                                    <!-- Month -->
                                    <div class="tab-pane fade" id="month">
                                        <div class="table-responsive custom-table">
                                            <table class="table table-nowrap mb-0">
                                                <thead>
                                                  <tr>
                                                    <th>Order ID</th>
                                                    <th>Course Name</th>
                                                    <th>Date</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2643</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Build Responsive Real World Websites with HTML5 and CSS3</a></td>
                                                        <td>March 24, 2024</td>
                                                        <td>$34</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2644</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Sketch from A to Z (2024): Become an app designer</a></td>
                                                        <td>March 26, 2024</td>
                                                        <td>$40</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Month -->

                                    <!-- Yearly -->
                                    <div class="tab-pane fade" id="year">
                                        <div class="table-responsive custom-table">
                                            <table class="table table-nowrap mb-0">
                                                <thead>
                                                  <tr>
                                                    <th>Order ID</th>
                                                    <th>Course Name</th>
                                                    <th>Date</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2643</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Build Responsive Real World Websites with HTML5 and CSS3</a></td>
                                                        <td>March 24, 2024</td>
                                                        <td>$34</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2644</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Sketch from A to Z (2024): Become an app designer</a></td>
                                                        <td>March 26, 2024</td>
                                                        <td>$40</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2645</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Learn Angular Fundamentals Beginners Guide</a></td>
                                                        <td>April 12, 2024</td>
                                                        <td>$25</td>
                                                        <td>Completed</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="tab-title">#2646</a></td>
                                                        <td><a href="{{url('course-details')}}" class="tab-title title-course">Build Responsive Real World Websites with HTML5 and CSS3</a></td>
                                                        <td>April 16, 2024</td>
                                                        <td>$35</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"><i class="bx bxs-download"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Yearly -->

                                </div>
                                <!-- /Tab Content -->

                            </div>
                        </div>
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
                <!-- /Instructor Order History -->
                
            </div>
        </div>
    </div>	
    <!-- /Page Wrapper -->
@endsection
