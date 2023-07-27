<div class="classes-section">
    @php
     function student_b($s){
         if($s->certificate){
             return true;
         }else{
             return false;
         }
     }

 @endphp
    <div class="classes-sec">
        <div class="row">
            @foreach ($students as $student)
                @if(student_b($student))
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="classes-col">
                        {{--                        @dd($student)--}}
                        <div class="class-thumb"><img src="{{ asset('images/' . $student->image) }}"
                                                      alt="Student's class image"
                                                      class="w-100">
                        </div>
                        <div class="class-info">
                          <p>
                                @php
                                    $a=\App\Models\About::find($student->school_id);
                                @endphp
                       {{$a->name}} O'quvchisi:
                            </p>
                            <h3><a href="#" title="">{{ $student->fullname }}</a>
                            </h3>
                            <span>
                                @if (!empty($student->certificate))
                                    @if (App\Models\Student::TYPES[$student->certificate->type] == 1)
                                        {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                        {{ $student->certificate->ball }}
                                    @else
                                        {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                        {{ App\Models\Student::DEGREE[$student->certificate->degree] }}
                                    @endif
                                @else
                                    Sertifikat yo'q
                                @endif
                            </span> <span></span>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="posted-by">
                                    <a href="#" title="">{{ $student->class->class }} Sinf
                                    </a>
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
                @if(count(\App\Models\Student::where('school_id',env('SCHOOL_ID'))->get()->ToArray()) > $count)
                    <li class="page-item"><a wire:click="viewMore()" class="page-link" role="button"
                                             type="button">Yana</a>
                        @endif
                    </li>
            </ul>
        </nav>
        {{-- <button wire:click="viewMore" role="button" type="button" class="btn btn-danger">Yana</button> --}}
    </div>
    <!--pagination-end-->


</div>
