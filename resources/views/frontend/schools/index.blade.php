@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::with('students')->get();
    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>maktablar</h2>
                <ul>
                    <li><a href="{{route('home')}}" title="">Bosh sahifa</a></li>
                    <li><span>Maktablar</span></li>
                </ul>
            </div>
            <!--pager-content end-->
{{--            <h2 class="page-titlee">{{$a->name}}</h2>--}}
        </div>
    </section>
    <!--pager-section end-->
    <section class="classes-page">
        <div class="container">
            <div class="classes-banner"><span>Hozir urinib ko'ring</span>
                <h2>Ozingizga mos maktabni tanlang va biz bilan bog`laning</h2><a href="{{route('about')}}" title="" class="btn-default">Biz Haqimizda <i
                        class="fa fa-long-arrow-alt-right"></i></a>
            </div>
            <!--classes-banner end-->
            <!--classes-banner end-->
            @livewire('schools-index')
        </div>
    </section>
    <!--classes-page end-->
    <!--newsletter-sec end-->
@endsection
