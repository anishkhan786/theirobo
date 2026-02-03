<?php 

namespace App\Http\Controllers;

use App\Models\ConsultationServiceFeature;
use App\Models\ConsultationService;
use Illuminate\Http\Request;

class ConsultationServiceFeatureController extends Controller
{
    public function index()
    {
        $services = ConsultationServiceFeature::with('serviceType')->latest()->get();
        return view('consultation_services_feature.index', compact('services'));
    }

    public function create()
    {
        return view('consultation_services_feature.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'consultation_service_id' => 'required',
            'feature_title' => 'required'
        ]);

        ConsultationServiceFeature::create($request->all());

        return redirect()->route('consultation-services-feature.index')
                         ->with('success', 'Service feature created successfully');
    }

    public function edit($id)
    {
        $ConsultationServiceFeature = ConsultationServiceFeature::findOrFail($id);
        return view('consultation_services_feature.edit', compact('ConsultationServiceFeature'));
    }

   // UPDATE
    public function update(Request $request, $id)
    {
        $ConsultationServiceFeature = ConsultationServiceFeature::findOrFail($id);
        $ConsultationServiceFeature->update($request->all());

        return redirect()->route('consultation-services-feature.index')
                        ->with('success', 'Service feature updated successfully');
    }

    // DELETE
        public function destroy($id)
        {
            ConsultationServiceFeature::findOrFail($id)->delete();

            return redirect()->route('consultation-services-feature.index')
                            ->with('success', 'Service feature deleted successfully');
        }
}
