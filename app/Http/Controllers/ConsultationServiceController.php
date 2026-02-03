<?php 

namespace App\Http\Controllers;

use App\Models\ConsultationService;
use Illuminate\Http\Request;

class ConsultationServiceController extends Controller
{
    public function index()
    {
        $services = ConsultationService::latest()->get();
        return view('consultation_services.index', compact('services'));
    }

    public function create()
    {
        return view('consultation_services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'price' => 'required',
            'duration_minutes' => 'required',
        ]);

        ConsultationService::create($request->all());

        return redirect()->route('consultation-services.index')
                         ->with('success', 'Service created successfully');
    }

    public function edit($id)
    {
        $consultationService = ConsultationService::findOrFail($id);
        return view('consultation_services.edit', compact('consultationService'));
    }

   // UPDATE
    public function update(Request $request, $id)
    {
        $consultationService = ConsultationService::findOrFail($id);
        $consultationService->update($request->all());

        return redirect()->route('consultation-services.index')
                        ->with('success', 'Service updated successfully');
    }

    // DELETE
        public function destroy($id)
        {
            ConsultationService::findOrFail($id)->delete();

            return redirect()->route('consultation-services.index')
                            ->with('success', 'Service deleted successfully');
        }
}
