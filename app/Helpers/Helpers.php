<?php 
use Carbon\Carbon;
use App\Models\Role;
use App\Models\WebsiteSetting;
use App\Models\Slider;
use App\Models\Services;
use App\Models\Products;
use App\Models\ProductImage;
use App\Models\ConsultationService;
use App\Models\ConsultationServiceFeature;


function singleConsultationService($id){
  $recent_data = ConsultationService::where('type', $id)->orderBy('updated_at', 'desc')->get();
  return  $recent_data;
}

function singleConsultationServiceFeature($id){
  $recent_data = ConsultationServiceFeature::where('consultation_service_id', $id)->orderBy('updated_at', 'desc')->get();
  return  $recent_data;
}

function slider_get(){
    $recent_data = Slider::orderBy('updated_at', 'desc')->limit(5)->get();
    return  $recent_data;
}
function service_type($type){
    if($type==1){
        return 'Cloud Consulting';
    } elseif ($type==2) {
        return 'Robotic Consulting';
    } elseif ($type==3) {
        return 'AI Consulting';
    } else {
        return 'NA';
    }
}

function consultationService(){
    $recent_data = ConsultationService::orderBy('updated_at', 'desc')->get();
    return  $recent_data;
}


function services_get(){
    $recent_data = Services::orderBy('updated_at', 'desc')->get();
    return  $recent_data;
}

function products_get(){
    $recent_data = Products::orderBy('updated_at', 'desc')->get();
    return  $recent_data;
}

function products_images_get($id){
    $recent_data = ProductImage::where('product_id', $id)->get();
    return  $recent_data;
}


function website_data(){
    $website_setting_update = WebsiteSetting::first();
    if(!empty( $website_setting_update)){
        $data = array(
            'website_title' => $website_setting_update->website_title,
            'support_email' => $website_setting_update->support_email,
            'website_contact_no' => $website_setting_update->contact_no,
            'webiste_address' => $website_setting_update->address,
            'website_logo' => $website_setting_update->logo,
        );

    } else {
        $data = array(
            'website_title' => 'XYZ',
            'support_email' => 'support@gmail.com',
            'website_contact_no' => '+91 0000 000 000',
            'webiste_address' => 'ABC 12344 , India',
            'website_logo' => 'oldlogo.png',
        );
    }

    return $data;
}

function website_title(){
    $website_setting_update = WebsiteSetting::first();
    if(!empty( $website_setting_update)){
        $data = $website_setting_update->website_title;
    } else {
        $data = 'XYZ';
    }
    return $data;
}

function support_email(){
    $website_setting_update = WebsiteSetting::first();
    if(!empty( $website_setting_update)){
        $data = $website_setting_update->support_email;
    } else {
        $data = 'support@gmail.com';
    }
    return $data;
}
function website_contact_no(){
    $website_setting_update = WebsiteSetting::first();
    if(!empty( $website_setting_update)){
        $data = $website_setting_update->contact_no;
    } else {
        $data = '+91 0000 000 000';
    }
    return $data;
}
function webiste_address(){
    $website_setting_update = WebsiteSetting::first();
    if(!empty($website_setting_update)){
        $data = $website_setting_update->address;
    } else {
        $data = '452001, indore, India';
    }
    return $data;
}
function website_logo(){
    $website_setting_update = WebsiteSetting::first();
    if(!empty( $website_setting_update)){
        $data = $website_setting_update->logo;
    } else {
        $data = 'oldlogo.png';
    }
    return $data;
}

function webiste_description(){
    $website_setting_update = WebsiteSetting::first();
    if(!empty( $website_setting_update)){
        $data = $website_setting_update->description;
    } else {
        $data = 'Tthis tropic port aboard this tiny ship today still wanted by theam government they survive on up east side to a deluxe as soldiers.';
    }
    return $data;
}

?>