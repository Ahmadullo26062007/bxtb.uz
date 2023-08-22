@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title 0">Maktablar haqida</h5>
                            <a href="{{route('abouts.create')}}"
                               class="btn btn-success">Yaratish</a>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>Maktab nomi</th>
                                <th class="d-none d-xl-table-cell">Rasimi</th>
                                <th>Telefon raqam</th>
                                <th class="d-none d-xl-table-cell">Joylashgan viloyati</th>
                                <th class="d-none d-xl-table-cell">Joylashgan Joyi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $about)

                                <tr>
                                    <td>{{$about->name}}</td>
                                    <td class="d-none d-xl-table-cell"><img width="100px"
                                                                            src="{{$about->image}}"
                                                                            alt="{{$about->name}} rasimi"></td>
                                    <td>{{$about->phone_number}}</td>
                                    <td class="d-none d-md-table-cell">{{$about->viloyat}}</td>
                                    <td class="d-none d-md-table-cell">{{$about->tuman}}</td>
                                    <td>
                                        <a href="{{route('abouts.edit',[$about->id])}}"
                                           class="btn btn-info">Edit</a>
                                        <a href="{{route('abouts.show',[$about->id])}}"
                                           class="btn btn-success">View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
