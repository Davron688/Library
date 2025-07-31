@extends('public.layouts.app')
@section('content')

    <section class="course-area pt-115 pb-100 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-65">
                        <span class="tp-bline-stitle mb-15">Our Courses</span>
                        <h2 class="tp-section-title mb-20">Explore Popular Courses</h2>
                    </div>
                </div>
            </div>
            <!-- course-nav-tab-start -->
            <div class="tp-course-nav-tabs">
                <nav>
                    <div class="nav d-flex justify-content-center mb-50" id="nav-tab" role="tablist">
                        <button class="tp-course-tab active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all-tab" aria-selected="true">All</button>
                        <button class="tp-course-tab" id="nav-design-tab" data-bs-toggle="tab" data-bs-target="#nav-design" type="button" role="tab" aria-controls="nav-design-tab" aria-selected="true">Design</button>
                        <button class="tp-course-tab" id="nav-develop-tab" data-bs-toggle="tab" data-bs-target="#nav-develop" type="button" role="tab" aria-controls="nav-develop" aria-selected="true">Devlopment</button>
                        <button class="tp-course-tab" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="true">Content Writing</button>
                        <button class="tp-course-tab" id="nav-search-tab" data-bs-toggle="tab" data-bs-target="#nav-search " type="button" role="tab" aria-controls="nav-search" aria-selected="true">Search Engine</button>
                        <button class="tp-course-tab" id="nav-marketing-tab" data-bs-toggle="tab" data-bs-target="#nav-marketing" type="button" role="tab" aria-controls="nav-marketing" aria-selected="false">Marketing</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="row">
                            @foreach($books as $book)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="tpcourse mb-40">
                                    <div class="tpcourse__thumb p-relative w-img fix">
                                        <a href="{{asset('storage/'.$book->src) }}"><img src="{{asset('storage/'.$book->image) }}" alt="course-thumb"></a>
                                        <div class="tpcourse__tag">
                                            <a href="{{asset('storage/'.$book->src) }}"><i class="fi fi-rr-heart"></i></a>
                                        </div>
                                        <div class="tpcourse__img-icon">
                                            <img src="assets/img/icon/course-3-avata-1.png" alt="course-avata">
                                        </div>
                                    </div>
                                    <div class="tpcourse__content-2">

                                        <div class="tpcourse__ava-title mb-15">
                                            <h4 class="tpcourse__title tp-cours-title-color"><a href="course-details.html">{{$book->title}}</a></h4>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- course-nav-tab-end -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="course-btn mt-20"><a class="tp-btn" href="course-list.html">Browse All Courses</a></div>
                </div>
            </div>
        </div>
    </section>

@endsection
