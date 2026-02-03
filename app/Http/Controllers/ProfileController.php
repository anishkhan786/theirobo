<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\WebsiteSetting;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show() {
        return view('user-profile');
    }

    public function update(Request $request) {
        if (config('app.is_demo')) {
            $attributes = $request->validate([
                'name' => 'required',
                'phone' => 'max:12',
                'email' => 'required',

            ]);
        } else {
            $attributes = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email', Rule::unique('users')->ignore(auth()->user()->id)],
                'phone' => 'max:10',
            ]);
        }

        auth()->user()->update([
            'name' => $request->get('name'),
            'email' => config('app.is_demo') ? auth()->user()->email : $request->get('email') ,
            'phone' => $request->get('phone'),
        ]);

        return back()->with('succes', 'Profile succesfully updated');
    }

    public function website_show() {
        return view('website_setting');
    }

    public function website_update(Request $request) {

        $attributes = $request->validate([
            'title' => 'required',
            'support_email' => ['required', 'email', Rule::unique('setting')->ignore(auth()->user()->id)],
            'phone' => 'required',
            'description' => 'required',
            'address' => 'required'

        ]);

        $uuid = Str::uuid()->toString();
            if($request->attachment){
                $file =$request->file('attachment');
                $filename = $uuid.'-'.time().'.'.$request->attachment->extension();
                $file->move("upload/website-logo/",$filename);

                $data = array(
                    'website_title' => $request->title,
                    'support_email' => $request->support_email,
                    'contact_no' => $request->phone,
                    'address' => $request->address,
                    'description' => $request->description,
                    'logo' => $filename,
                );
            } else {
                $data = array(
                    'website_title' => $request->title,
                    'support_email' => $request->support_email,
                    'contact_no' => $request->phone,
                    'address' => $request->address,
                    'description' => $request->description,
                );
            }

        $website_setting_update = WebsiteSetting::first();
        if(!empty($website_setting_update)){
            $website_setting_update->update($data);
        } else {
            WebsiteSetting::create($data);
        }
    
        return back()->with('succes', 'Website setting succesfully updated');
    }

}
