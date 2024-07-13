<?php $page = 'view-invoice'; ?>
@extends('layout.mainlayout')
@section('content')
    <!--Dashbord Student -->
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Profile Details -->
                <div class="col-xl-9 col-md-8">
                    <div class="settings-widget profile-details">
                        <div class="settings-menu invoice-list-blk p-0 ">
                            <div class="card pro-post border-0 mb-0">
                                <div class="card-body">
                                    <div class="invoice-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="invoice-logo">
                                                    <img src="{{ URL::asset('/build/img/logo.svg') }}" alt="logo">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="invoice-details">
                                                    <strong>Order:</strong> #00124 <br>
                                                    <strong>Issued:</strong> 20/06/2023
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Invoice Item -->
                                    <div class="invoice-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="invoice-info">
                                                    <strong class="customer-text">Invoice From</strong>
                                                    <p class="invoice-details invoice-details-two">
                                                        John Doe <br>
                                                        806 Twin Willow Lane, Old Forge,<br>
                                                        Newyork, USA <br>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="invoice-info invoice-info2">
                                                    <strong class="customer-text">Invoice To</strong>
                                                    <p class="invoice-details">
                                                        Walter Roberson <br>
                                                        299 Star Trek Drive, Panama City, <br>
                                                        Florida, 32405, USA <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Invoice Item -->

                                    <!-- Invoice Item -->
                                    <div class="invoice-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="invoice-info">
                                                    <strong class="customer-text">Payment Method</strong>
                                                    <p class="invoice-details invoice-details-two">
                                                        Debit Card <br>
                                                        XXXXXXXXXXXX-2541 <br>
                                                        HDFC Bank<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Invoice Item -->

                                    <!-- Invoice Item -->
                                    <div class="invoice-item invoice-table-wrap">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="invoice-table table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Project</th>
                                                                <th>Description</th>
                                                                <th class="text-center">Quantity</th>
                                                                <th class="text-end">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Research</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                                </td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-end">$100</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Research 101</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                                                </td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-end">$250</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4 ms-auto">
                                                <div class="table-responsive">
                                                    <table class="invoice-table-two table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <th>Subtotal:</th>
                                                                <td><span>$350</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Discount:</th>
                                                                <td><span>-10%</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total Amount:</th>
                                                                <td><span>$315</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Invoice Item -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile Details -->

            </div>
        </div>
    </div>
    <!-- /Dashbord Student -->
@endsection
