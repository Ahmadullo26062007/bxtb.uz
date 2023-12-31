<div class="container">
    <div class="classes-section">
        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500; margin-bottom:5%;">Oliy toifalilar</h1>
                </div>
            </div>
            <div class="row">
                @php
                    $count_greate_teacher = 0;
                @endphp
                @foreach ($teachers as $teacher)
                    @if ($teacher->great_teacher == 1 && $teacher->degrees)
                        @if ($teacher->degrees[0]->type_id == 1)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="classes-col">
                                    {{-- @dd($teacher) --}}
                                    <div class="class-thumb"><img src="{{ "$teacher->image" }}"
                                            alt="Teacher's class image" style="width: 100%; height: 100px">
                                    </div>
                                    <div class="class-info">
                                        <p>@php
                                            $a = \App\Models\About::find($teacher->school_id);
                                        @endphp
                                            {{ $a->name }} O'qtuvchisi
                                        </p>
                                        <h3>{{ $teacher->firstname }} {{ $teacher->lastname }}
                                        </h3>
                                        <span>{{ $teacher->category }} Fani O'qtuvchisi</span>
                                        <h5>
                                            @if (empty($teacher->degrees[0]))
                                                <span class="text-dark">
                                                    O`rta maxsus
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
                            @php
                                $count_greate_teacher = 1;
                            @endphp
                        @endif
                    @endif
                @endforeach
                @if ($count_greate_teacher == 0)
                    <div class="col-12 d-flex justify-content-center">
                        <h1 style="color: #ff0000;font-size: 30px; font-weight: 500;  margin-bottom:5%;">Mavjud
                            emas
                        </h1>
                    </div>
                @endif
            </div>
            <!--teachers end-->
        </div>
        <!--teachers-section end-->

        <!--pagination-end-->
    </div>

    <div class="classes-section">
        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500;  margin-bottom:5%;">1-toifalilar
                    </h1>
                </div>


            </div>
            <div class="row">
                @php
                    $count_teacher = 0;
                @endphp
                @foreach ($teachers as $teacher)
                    @if ($teacher->great_teacher == 1 && $teacher->degrees)

                        @if ($teacher->degrees[0]->type_id == 2)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="classes-col">
                                    {{-- @dd($teacher) --}}
                                    <div class="class-thumb"><img src="{{ "$teacher->image" }}"
                                            alt="Teacher's class image" style="width: 100%; height: 100px">
                                    </div>
                                    <div class="class-info">
                                        <p>@php
                                            $a = \App\Models\About::find($teacher->school_id);
                                        @endphp
                                            {{ $a->name }} O'qtuvchisi
                                        </p>
                                        <h3>{{ $teacher->firstname }} {{ $teacher->lastname }}
                                        </h3>
                                        <span>{{ $teacher->category }} Fani O'qtuvchisi</span>
                                        <h5>
                                            @if (empty($teacher->degrees[0]))
                                                <span class="text-dark">
                                                    Yangi O'qtuvchi
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
                            @php
                                $count_teacher = 1;
                            @endphp
                        @endif
                    @endif
                @endforeach
                @if ($count_teacher == 0)
                    <div class="col-12 d-flex justify-content-center">
                        <h1 style="color: #ff0000;font-size: 30px; font-weight: 500;  margin-bottom:5%;">Mavjud
                            emas
                        </h1>
                    </div>
                @endif
            </div>
            <!--teachers end-->
        </div>
        <!--teachers-section end-->
        <div class="mdp-pagiation">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if (count(
                            \App\Models\Teacher::where('school_id', env('SCHOOL_ID'))->get()->ToArray()) > $count)
                        <li class="page-item"><a wire:click="viewMore" role="button" type="button"
                                class="page-link">Yana</a>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
        <!--pagination-end-->
    </div>
</div>
