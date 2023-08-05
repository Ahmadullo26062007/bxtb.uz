<section class="page-content">
    @php
        function teacher_b($t){
            if(!count($t->degrees->ToArray())==0){
               if($t->degrees[0]->type_id==1){
                 return true;
               }else{
                   return false;
               }
            }else{
                return false;
            }
        }
     $c=0;
    @endphp
    <div class="container">
        <!--classes-banner end-->
        <div class="classes-section">
            <div class="classes-sec">
                <div class="row">
                    @foreach ($teachers as $teacher)

                        @if($teacher->great_teacher==1)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="classes-col">
                                    {{-- @dd($teacher)--}}
                                    <div class="class-thumb"><img src="{{"$teacher->image"}}"
                                                                  alt="Student's class image"
                                                                  style="width: 277px; height: 100px">
                                    </div>
                                    <div class="class-info">
                                        <p>
                                            @php
                                                $a=\App\Models\About::find($teacher->school_id);
                                            @endphp
                                            {{$a->name}} O'quvchisi:
                                        </p>
                                        <h3>{{ $teacher->firstname }} {{$teacher->lastname}}
                                        </h3>

                                    </div>
                                </div>
                                <!--classes-col end-->
                            </div>
                        @endif

                    @endforeach
                </div>
                <!--teachers end-->
            </div>
            <!--teachers-section end-->
            <div class="mdp-pagiation">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        @if((count( \App\Models\Teacher::where('school_id',env('SCHOOL_ID'))->get()->ToArray() )>$count))
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
</section>
