<?php $page = 'help-center'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('item1')
            Pages
        @endslot
        @slot('item2')
            Help Center
        @endslot
    @endcomponent
    @component('components.pagebanner')
        @slot('title')
            How can we help you?
        @endslot
        @slot('li1')
            Have questions? Search through our Help Center
        @endslot
    @endcomponent

    <!-- Help Details -->
    <div class="help-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="help-title">
                        <h1>Most frequently asked questions</h1>
                        <p>Here are the most frequently asked questions you may check before getting started</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <!-- Faq -->
                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqone" aria-expanded="false">Is there a
                                14-days trial?</a>
                        </h6>
                        <div id="faqone" class="collapse">
                            <div class="faq-detail">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod.</p>
                                <p>If several languages coalesce, the grammar of the resulting language is more simple and
                                    regular than that of the individual languages. The new common language will be more
                                    simple and regular than the existing European languages.</p>
                            </div>
                        </div>
                    </div>


                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">How much
                                time I will need to learn this app?</a>
                        </h6>
                        <div id="faqtwo" class="collapse">
                            <div class="faq-detail">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod.</p>
                                <p>If several languages coalesce, the grammar of the resulting language is more simple and
                                    regular than that of the individual languages. The new common language will be more
                                    simple and regular than the existing European languages.</p>
                            </div>
                        </div>
                    </div>


                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">Is there a
                                month-to-month payment option?</a>
                        </h6>
                        <div id="faqthree" class="collapse">
                            <div class="faq-detail">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod.</p>
                                <p>If several languages coalesce, the grammar of the resulting language is more simple and
                                    regular than that of the individual languages. The new common language will be more
                                    simple and regular than the existing European languages.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Faq -->

                </div>

                <div class="col-lg-6">

                    <!-- Faq -->
                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">What’s the
                                benefits of the Premium Membership?</a>
                        </h6>
                        <div id="faqfour" class="collapse">
                            <div class="faq-detail">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod.</p>
                                <p>If several languages coalesce, the grammar of the resulting language is more simple and
                                    regular than that of the individual languages. The new common language will be more
                                    simple and regular than the existing European languages.</p>
                            </div>
                        </div>
                    </div>


                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">Are there
                                any free tutorials available?</a>
                        </h6>
                        <div id="faqfive" class="collapse">
                            <div class="faq-detail">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod.</p>
                                <p>If several languages coalesce, the grammar of the resulting language is more simple and
                                    regular than that of the individual languages. The new common language will be more
                                    simple and regular than the existing European languages.</p>
                            </div>
                        </div>
                    </div>


                    <div class="faq-card">
                        <h6 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqsix" aria-expanded="false">How can I
                                cancel my subscription plan?</a>
                        </h6>
                        <div id="faqsix" class="collapse">
                            <div class="faq-detail">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod.</p>
                                <p>If several languages coalesce, the grammar of the resulting language is more simple and
                                    regular than that of the individual languages. The new common language will be more
                                    simple and regular than the existing European languages.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Faq -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Help Details -->

    <!-- Help Details -->
    <div class="support-sec">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="help-title sup-title">
                        <h1>Can't find what you're looking for?</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="support-card">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Contact us</h3>
                                <p>We can provide you with the support you need. Just contact us and our team will reply
                                    quick to you.</p>
                                <a href="javascript:;" class="btn btn-contact">Contact us</a>
                            </div>
                            <div class="col-md-4">
                                <div class="support-img">
                                    <img src="{{ URL::asset('/build/img/service-01.png') }}" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="support-card">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Support</h3>
                                <p>The good news is that you’re not alone, and you’re in the right place. Contact us for
                                    more detailed support.</p>
                                <a href="javascript:;" class="btn btn-ticket">Submit a Ticket</a>
                            </div>
                            <div class="col-md-4">
                                <div class="support-img">
                                    <img src="{{ URL::asset('/build/img/service-02.png') }}" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Help Details -->
@endsection
