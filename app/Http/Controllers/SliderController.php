<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(Slider $model)
    {
        $this->authorize('manage-users', User::class);
        return view('slider.index', ['sliders' => $model->all()]);
    }

    public function create(Slider $model)
    {
        return view('slider.create');
    }
    

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $uuid = Str::uuid()->toString();
        if($request->attachment){
            $file =$request->file('attachment');
            $filename = $uuid.'-'.time().'.'.$request->attachment->extension();
            $file->move("upload/slider/",$filename);
        }else{
            $filename = '';
        }

      
        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename,
        ]);

        return redirect()->route('slider-management')->with('succes', 'Slider succesfully added');
    }


    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('manage-users', User::class);
        $slider = Slider::find($id);

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $uuid = Str::uuid()->toString();

        if($request->attachment){
            $file =$request->file('attachment');
            $filename = $uuid.'-'.time().'.'.$request->attachment->extension();
            $file->move("upload/slider/",$filename);

            $data = array(
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
            );
        }else{
             $data = array(
                'title' => $request->title,
                'description' => $request->description
            );
        }
        $slider->update($data);

        return redirect()->route('slider-management')->with('succes', 'Slider succesfully updated');
    }

    public function destroy($id)
    {
        $this->authorize('manage-users', User::class);
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('slider-management')->with('succes', 'The slider was succesfully deleted');
    }
}
