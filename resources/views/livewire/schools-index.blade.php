<div class="classes-section">
    <div class="classes-sec">
        <div class="row">
            @foreach($schools as $school)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="classes-col">
                        <div class="class-thumb"><img src="{{asset('images/'.$school->image)}}" alt="" class="w-100">
                        </div>
                        <div class="class-info">
                            <h3><a href="http://{{$school->name}}.bxtb.uz" title="">{{$school->name}}</a>
                            </h3>
                            <span>
                            Boshlanish va tugash <br> vaqtlari:
                          {{$school->start_time}} - {{$school->end_time}}</span>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="posted-by">
                                    Maktab direktori:
                                    @if($school->users)
                                        @foreach($school->users as $user)
                                            {{$user->name}}
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--classes-col end-->
                </div>
            @endforeach
        </div>

    </div>
    <!--classes-sec end-->
    <div class="mdp-pagiation">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
{{--                @if((count( \App\Models\Course::where('school_id',env('SCHOOL_ID'))->get()->ToArray() )>8))--}}
                    <li class="page-item"><a style="color:#f37335 " class="page-link" wire:click="pilus()">Yana+</a></li>
{{--                @endif--}}
            </ul>
        </nav>
    </div>
    <!--pagination-end-->
</div>

