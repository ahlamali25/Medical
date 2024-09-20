<?php
namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'phone' => 'required',    
                
                
                'specialization' => 'required|max:255',
                'gender'=>'required',
            ],
            [
                'name' => 'تأكد من الاسم المدخل',
                'phone' => 'هذا الحقل مطلوب',  
                
                'specialization' => 'تأكد من إدخال اختصاصك',
                'gender'=>' هذا الحقل مطلوب', 
                
            ]
        );

        // حفظ البيانات باستخدام موديل Doctor
        Doctor::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'specialization' => $validatedData['specialization'],
            'gender' => $validatedData['gender'],

        ]);

        return redirect()->route('doctors.index');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'phone' => 'required',    
                
                
                'specialization' => 'required|max:255',
                'gender'=>'required',
            ],
            [
                'name' => 'تأكد من الاسم المدخل',
                'phone' => 'هذا الحقل مطلوب',  
                
                'specialization' => 'تأكد من إدخال اختصاصك',
                'gender'=>' هذا الحقل مطلوب', 
                
            ]
        );

        $doctor = Doctor::find($id);
        $doctor->update($validatedData);

        return redirect()->route('doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route('doctors.index');
    }
}
