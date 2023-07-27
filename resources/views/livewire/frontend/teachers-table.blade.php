<section class="page-content">
    @php
        function teacher_b($t){
            if(!count($t->degrees->TOArray())==0){
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
        <div class="teachers-section p-0">
            <div class="teachers">
                <div class="row griddd">
                    @foreach ($teachers as $teacher)
                        @if(teacher_b($teacher) )
                            @php if($c++ == 1)continue; @endphp
                            @if($c<=20)
                        <div>
                            <div class="teacher">
                                <div class="teacher-img">
                                    <div style="height: 300px">

                                        <img style="width: 235px; height: 300px;" src="{{ asset("images/$teacher->image") }}" alt="" class="w-100">
                                    </div>

                                    <div class="teacher-info">
                                        <p>
                                            @php
                                                $a=\App\Models\About::find($teacher->school_id);
                                            @endphp
                                            {{$a->name}} O'qtuvchisi:
                                        </p>
                                        <h3><a href="#" title="">{{ $teacher->firstname }}
                                                {{ $teacher->lastname }}</a></h3>
                                        <span>{{ $teacher->category }}
                                            O'qituvchisi</span>
                                        @if (empty($teacher->degrees[0]))
                                            <span class="text-dark">
                                                Birinchi toifa
                                            </span>
                                        @else
                                            @foreach ($teacher->degrees as $degree)
                                                <span class="text-dark">
                                                    {{ App\Models\Degree::TYPES[$degree->type_id] }}

                                                </span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!--teacher end-->
                            </div>
                        </div>
                            @endif
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
</section>
