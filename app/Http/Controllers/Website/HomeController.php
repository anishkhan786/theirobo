<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\ContactUs;
use App\Models\Products;
use App\Models\ProductImage;
use App\Models\ConsultationService;
use App\Models\ConsultationOrder;



class HomeController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function aboutUs()
    {
        return view('website.about-us');
    }

    public function services()
    {
        return view('website.service');
    }

    public function products()
    {
        return view('website.product');
    }

    public function product_details($id)
    {
        $product = Products::where('id',$id)->first();
        return view('website.product-details', compact('product'));
    }

    public function contactUs()
    {
        return view('website.contact');
    }

    public function contactStore(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'email' => 'required',
        ]);

        ContactUs::create([
            'name' => $attributes['name'],
            'phone' => $attributes['phone'],
            'email' => $attributes['email'],
            'service_name' => isset($request->service_name)?$request->service_name:'',
            'message' => $request->message,
        ]);

        return redirect()->route('w-contactUs')->with('success', 'Contact successfully submit');
    }

        public function ConsultationStore(Request $request)
        {
            $request->validate(
                [
                    'name'        => 'required|string|max:255',
                    'email'       => 'required|email|max:255',
                    'phone_number'=> 'required|digits_between:10,15',
                    'planSelect'  => 'required|in:Basic,Standard,Premium,Cloud Consulting,Starter AI Consultation,Growth AI Strategy,Enterprise AI Blueprint',
                    'message'     => 'nullable|string|max:1000',
                    'type'        => 'required|integer',
                ],
                [
                    'name.required'         => 'Please enter your name',
                    'email.required'        => 'Email is required',
                    'email.email'           => 'Enter a valid email address',
                    'phone_number.required' => 'Phone number is required',
                    'phone_number.digits_between' => 'Enter a valid phone number',
                    'planSelect.required'   => 'Please select a consultation plan',
                ]
            );

            

            $service = ConsultationService::where('type', $request->type)
                ->where('name', $request->planSelect)
                ->firstOrFail();

            $order = ConsultationOrder::create([
                'order_id' => 'IROBO-ROB-' . now()->format('YmdHis'),
                'service_id' => $service->id,
                'name'   => $request->name,
                'email'  => $request->email,
                'phone'  => $request->phone_number,
                'message'=> $request->message,
                'amount' => $service->price,
                'status' => 'pending'
            ]);

            $order_data = ConsultationOrder::with('service')->where('id',$order->id)->first();
            return view('website.proceed_to_pay', compact('order_data'));

            // return redirect()->route('proceed-to-payment')
            //     ->with('success', 'Consultation booked successfully');
        }

        public function proceeToPayment(){
            $order_data = ConsultationOrder::with('service')->where('id','2')->first();
            return view('website.proceed_to_pay', compact('order_data'));
        }

         public function bookYourConsultation(Request $request){
            return view('website.book_your_consultation', [
                    'type' => $request->type,
                    'name' => $request->name,
                ]);

        }

        public function initBooking(Request $request)
        {
            return redirect()
                ->route('services.book.your.consultation', [
                    'type' => $request->type,
                    'name' => $request->name,
                ]);
        }

        
}
