<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Services;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(Services $model)
    {
        return view('services.index', ['services' => $model->all()]);
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|unique:services',
        ]);

        $uuid = Str::uuid()->toString();
        if($request->attachment){
            $file =$request->file('attachment');
            $filename = $uuid.'-'.time().'.'.$request->attachment->extension();
            $file->move("upload/services/",$filename);
        }else{
            $filename = '';
        }

        Services::create([
            'name' => $attributes['name'],
            'image' => $filename,

        ]);

        return redirect()->route('services-management')->with('succes', 'Service succesfully added');
    }

    public function edit($id)
    {

        $services = Services::find($id);
        return view('services.edit', compact('services'));
    }

    public function update(Request $request,$id)
    {
        $Services = Services::find($id);

        $attributes = request()->validate([
            'name' => ['required', Rule::unique('services')->ignore($Services->id)]          
        ]);

        $uuid = Str::uuid()->toString();
        if($request->attachment){
            $file =$request->file('attachment');
            $filename = $uuid.'-'.time().'.'.$request->attachment->extension();
            $file->move("upload/services/",$filename);

            $data = array(
                'name' => $request->name,
                'image' => $filename,
            );
        }else{
             $data = array(
                'name' => $request->name
            );
        }

        $Services->update($data);

        return redirect()->route('services-management')->with('succes', 'Service succesfully updated');
    }

    public function destroy($id)
    {
        $services = Services::find($id);      
        $services->delete();
        return redirect()->route('services-management')->with('succes', 'The service was succesfully deleted ');
    }
}
