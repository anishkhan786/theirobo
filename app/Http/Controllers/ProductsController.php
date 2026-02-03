<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Products;
use App\Models\ProductImage;
use App\Models\User;

class ProductsController extends Controller
{
    public function index(Products $model)
    {
        $this->authorize('manage-users', User::class);
        return view('products.index', ['products' => $model->all()]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $uuid = Str::uuid()->toString();
        if($request->attachment){
            $file =$request->file('attachment');
            $filename = $uuid.'-'.time().'.'.$request->attachment->extension();
            $file->move("upload/producs/",$filename);
        }else{
            $filename = '';
        }

        $res = Products::create([
            'p_name' => $attributes['name'],
            'p_description' => $attributes['description'],
            'image' => $filename,
        ]);

        if ($request->hasFile('multipal_attachment')) {
                foreach ($request->file('multipal_attachment') as $file) {
                    $uuid = Str::uuid()->toString();
                    $filename = $res->id.'-'.$uuid . '-' . time() . '.' . $file->extension();
                    $file->move(public_path("upload/producs/"), $filename);
                   
                    ProductImage::create([
                        'product_id' => $res->id,
                        'image' => $filename,
                    ]);
                }
        }

        return redirect()->route('products-management')->with('success', 'Product successfully added');
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('manage-users', User::class);
        $product = Products::findOrFail($id);

        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $uuid = Str::uuid()->toString();
        if($request->attachment){
            $file =$request->file('attachment');
            $filename = $uuid.'-'.time().'.'.$request->attachment->extension();
            $file->move("upload/producs/",$filename);

            $data = array(
                'p_name' => $request->name,
                'p_description' => $request->description,
                'image' => $filename,
            );
        }else{
             $data = array(
                'p_name' => $request->name,
                'p_description' => $request->description
            );
        }

        if ($request->hasFile('multipal_attachment')) {
            ProductImage::where('product_id', $id)->delete();
            foreach ($request->file('multipal_attachment') as $file) {
                $uuid = Str::uuid()->toString();
                $filename = $id.'-'.$uuid . '-' . time() . '.' . $file->extension();
                $file->move(public_path("upload/producs/"), $filename);
               
                ProductImage::create([
                    'product_id' => $id,
                    'image' => $filename,
                ]);
            }
    }

        $product->update($data);

        return redirect()->route('products-management')->with('success', 'Product successfully updated');
    }

    public function destroy($id)
    {
        $this->authorize('manage-users', User::class);
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('products-management')->with('success', 'The product was successfully deleted');
    }
}
