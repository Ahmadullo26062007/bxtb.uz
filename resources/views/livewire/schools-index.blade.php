<div class="classes-section">
    <div class="classes-sec">
        <div class="row">
            @foreach($schools as $school)
                @if(empty($school->id==1))
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="classes-col">
                        <div class="class-thumb"><img src="{{$school->image}}" alt="" class="w-100">
                        </div>
                        <div class="class-info">
                            <h3><a href="http://{{$school->name}}.bxtb.uz" title="">{{$school->name}}</a>
                            </h3>
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

    </div>
    <!--classes-sec end-->
    <div class="mdp-pagiation">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @if((count( \App\Models\About::where('id',env('SCHOOL_ID'))->get()->ToArray() )>$count))
                    <li class="page-item"><a style="color:#f37335 " class="page-link" wire:click="pilus()">Yana+</a></li>
                @endif
            </ul>
        </nav>
    </div>
    <!--pagination-end-->
</div>

