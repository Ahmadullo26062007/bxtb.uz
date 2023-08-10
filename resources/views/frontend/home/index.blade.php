@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));
        $classes = $a->classes;
    @endphp
    <section class="about-page-content">
        <div class="container">
            <div class="abt-page-row">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2><span>Andijon viloyati Baliqchi tumani Xalq talimi bo'limi</span>
                                <p class="mw-100">
                                    Bu yerda siz Andijon viloyatida baliqchi tumanidagi maktablarni topishingiz mumkin
                                </p><a href="{{ route('schools.index') }}" title=""
                                       class="btn-default">Maktablar <i class="fa fa-long-arrow-alt-right"></i></a></h2>
                        </div>
                        <!--section-title end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img"><img width="500" height="500" src="{{$a->image }}"
                                                  alt=""></div>
                        <!--avt-img end-->
                    </div>
                </div>

            </div>
            <!--abt-page-row end-->
        </div>
    </section>
    <!--main-banner end-->
    <!--about-us-section end-->
    <section class="classes-section">
        <div class="container">
            <div class="sec-title">
                <h2>Bizning Maktablar </h2>
                <p>Bizning Maktablarimiz ichida jonli muloqot qilish imkonini beradi va shu bilan
                    o'quvchilarimizning o'rganish natijalarini optimallashtiradigan</p>
            </div>
            <!--sec-title end-->
            <div class="classes-sec">
                <div class="row classes-carousel">
                    @foreach ($schools as $school)
                        @if(empty($school->id==1))
                            <div class="col-lg-3 ">
                                <div class="classes-col wow fadeInUp slider-card" data-wow-duration="1000ms">
                                    <div class="class-thumb card-img">
                                        <img src="{{ $school->image }}" alt=""
                                             class="w-100">
                                    </div>
                                    <div class="class-info card-info">
                                        <h3><a href="http://{{$school->name}}.bxtb.uz"
                                               title="">{{ $school->name }}
                                            </a></h3>
                                        <span>
                            Boshlanish va tugash <br> vaqtlari:
                          {{$school->start_time}} - {{$school->end_time}}</span>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="posted-by">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--classes-col end-->
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="lnk-dv text-center"><a href="{{ route('schools.index') }}" title=""
                                                   class="btn-default">Maktablar <i
                            class="fa fa-long-arrow-alt-right"></i></a></div>
            </div>
            <!--classes-sec end-->
            {{--            @livewire('schools-index')--}}

        </div>
    </section>
    <!--classes-section end-->


    <section class="classes-page">
        <div class="section-title text-center">
            <h2>Bizning ajoyib<br>O'qtuvchilar</h2>
            <p>"Yaxshi o'qituvchi umidni ilhomlantirishi, tasavvurni yoqishi va o'rganishga muhabbat uyg'otishi
                mumkin."
            </p>
        </div>
        <div class="container">
            <!--classes-banner end-->
            <div class="classes-section">
                <div class="classes-sec">
                    <div class="row">
                        @foreach ($teachers as $teacher)
                            @if($teacher->great_teacher==1)
                            @dd(1)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="classes-col">
                                        <div class="class-thumb"><img src="{{"$teacher->image"}}"
                                                                      alt="Student's class image"
                                                                      style="width: 277px; height: 100px;">
                                        </div>
                                        <div class="class-info">
                                            <p>@php
                                                    $ab=\App\Models\About::find($teacher->school_id);
                                                @endphp
                                                {{$ab->name}} O'qtuvchisi
                                            </p>
                                            <h3>{{ $teacher->firstname }} {{$teacher->lastname}}
                                            </h3>
                                            <span>{{$teacher->category}} O'qtuvchisi</span>
                                            <h5>
                                                @if (empty($teacher->degrees[0]))
                                                    <span class="text-dark">
                                                            2-foifali O'qtuvchi
                                                        </span>
                                                @else
                                                    @foreach ($teacher->degrees as $degree)
                                                        <span class="text-dark">
                                                    {{ App\Models\Degree::TYPES[$degree->type_id] }}
                                                </span>
                                                    @endforeach
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                    <!--classes-col end-->
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!--classes-sec end-->
            </div>

        </div>
    </section>

    <section class="course-section">
        <div class="container">
            <div class="row">

                {{-- Ma'lumot yo' --}}

                <!--schools-section end-->
                <section class="blog-section">
                    <div class="container">
                        <div class="section-title text-center">
                            <h2>So'nggi yangiliklar</h2>
                            <p>Biz haqimizdagi eng sara so'nggi yangiliklar haqida bilib oling</p>
                        </div>
                        <!--section-title end-->
                        <div class="blog-posts">
                            <div class="row">
                                @foreach ($blogs as $blog)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="blog-post">


                                            <div class="blog-thumbnail"><img style="width: 369px; height: 246px;"
                                                                             src="{{ $blog->image }}"
                                                                             alt="" class="w-100">

                                                <span class="category">{{$blog->category->name}}, {{$a->name}}</span>
                                            </div>
                                            <div class="blog-info">
                                                <ul class="meta">
                                                    <li><a title=""></a>
                                                        @php
                                                            $a=\App\Models\About::find($teacher->school_id);
                                                        @endphp {{$a->name}} </li>

                                                    <li><a title="">by
                                                            Admin</a></li>
                                                    <li><img src="assets/img/icon13.png" alt=""><a
                                                            title="">{{ $blog->category->name }},</a><a
                                                            title="">
                                                            School</a></li>
                                                </ul>
                                                <h3><a href="{{ route('blog.show', $blog->id) }}"
                                                       title="">{{substr($blog->title,0,30)}}</a></h3>
                                                <p>{{ substr($blog->description, 0, 25) }}...
                                                </p><a href="{{ route('blog.show', $blog->id) }}" title=""
                                                       class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                        <!--blog-post end-->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--blog-posts end-->
                    </div>
                </section>
                <!--blog-section end-->
                <!--newsletter-sec end-->
@endsection
