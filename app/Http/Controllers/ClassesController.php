<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Classes;
use App\Models\Teacher;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=Classes::with('teacher')->orderByDesc('id')->get();
        return view('admin.classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher=Teacher::pluck('firstname','id');
        $school=About::pluck('name','id');
        return view('admin.classes.create',compact('teacher','school'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'class'=>'required',
           'teacher_id'=>'required',
           'description'=>'required|min:10',
            'school_id' => 'required'
        ],[
            'class.required'=>'Sinf Nomi kiritilmadi',
            'school_id.required'=>'Maktab tanlanmadi',
            'teacher_id.required'=>'Sinf Raxbari tanlanmadi',
            'description.required'=>'Sinf Haqida ma\'lumot kiritilmadi',
            'description.min'=>'Sinf haqida ma\'lumot 10 ta so\'zdan kam b\'lmasligi kerak',
        ]);
        $data=$request->all();
        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('../../images'), $image_name);
        $n = 'https://bxtb.uz/images/' . $data['image'];

        $class=Classes::create([
            'class'=>$data['class'],
            'teacher_id'=>$data['teacher_id'],
            'description'=>$data['description'],
            'image'=>$n,
            'school_id'=>$data['school_id']
        ]);
        return redirect()->route('class.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $classes=Classes::find($id);
        return view('admin.classes.show',compact('classes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $classes=Classes::find($id);
        $teacher=Teacher::pluck('firstname','id');
        $school=About::pluck('name','id');

        return view('admin.classes.edit',compact('classes','teacher','school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $classes=Classes::find($id);
        $request->validate([
            'class'=>'required',
            'teacher_id'=>'required',
            'description'=>'required|min:10',
            'school_id' => 'required'
        ],[
            'class.required'=>'Sinf Nomi kiritilmadi',
            'school_id.required'=>'Maktab tanlanmadi',
            'teacher_id.required'=>'Sinf Raxbari tanlanmadi',
            'description.required'=>'Sinf Haqida ma\'lumot kiritilmadi',
            'description.min'=>'Sinf haqida ma\'lumot 10 ta so\'zdan kam b\'lmasligi kerak',
        ]);
        $data=$request->all();

        if ($request->image){
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $data['image'] = $image_name;
            $file->move(public_path('../../images'), $image_name);
            $n = 'https://bxtb.uz/images/' . $data['image'];

            $classes->update([
                'class'=>$data['class'],
                'teacher_id'=>$data['teacher_id'],
                'description'=>$data['description'],
                'image'=>$n,
                'school_id'=>$data['school_id']
            ]);
        }else{
            $classes->update([
                'class'=>$data['class'],
                'teacher_id'=>$data['teacher_id'],
                'description'=>$data['description'],
                'school_id'=>$data['school_id']
            ]);
        }
        return redirect()->route('class.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $classes=Classes::find($id);
        $classes->delete();
        return back();
    }
}
