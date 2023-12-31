@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title 0">O'qtuvchini barcha ma'lumotlarini ko'rish</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <tr>
                                <th>Ismi</th>
                                <td>{{$teacher->firstname}}</td>
                            </tr>
                            <tr>
                                <th>Familyasi</th>
                                <td>{{$teacher->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Fani</th>
                                <td>{{$teacher->category}}</td>
                            </tr>
                                <tr>
                                    <th>Maktabi</th>
                                    <td>@php
                                            $a=\App\Models\About::find($teacher->school_id);
                                        @endphp
                                        {{$a->name}} O'qtuvchisi
                                    </td>
                                </tr>
                            <tr>
                                <th>Rasimi</th>
                                <td><img width="330px" src="{{$teacher->image}}"
                                         alt="O'qtuvchi rasimi"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a class="btn btn-secondary mt-3" href="{{route('teacher.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Orqaga
            </a>
        </div>
    </main>
@endsection
