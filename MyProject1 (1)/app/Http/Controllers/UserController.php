<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $users=User::all();
    return view('users.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'phone'=> 'required|size:12',
                'gender'=>'required',
                'age'=>'required' ,
                'illness'=>'required',
                'location'=>'required',
            ],
            [
                'name' => 'لا تنسى الاسم من فضلك ',
                'last_name' => 'لا تنسى الكنية ',
                'phone'=> 'هذا الحقل مطلوب',
                'gender'=>'هذا الحقل مطلوب',
                'age'=>'ادخل عمرك رجاء',
                'illness'=>'اشرح  للطبيب عن مرضك',
                
           ]
        );
        User::create([
            'name' => $validatedData['name'],
            'last_name' => $validatedData['last_name'],
            'age' => $validatedData['age'],
            'phone' => $validatedData['phone'],
            'illness' => $validatedData['illness'],
            'gender' => $validatedData['gender'],
            'location' => $validatedData['location'],
        ]);
       
        
        // إنشاء المستخدم وحفظه في قاعدة البيانات
        // User::create($validatedData);
    
        return redirect()->route('users.index');
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $users=User->find($id);
        return view('users.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'phone'=> 'required|size:12',
                'gender'=>'required',
                'age'=>'required' ,
                'illness'=>'required',
                'age'=>'required'
            ],
            [
                'name' => 'لا تنسى الاسم من فضلك ',
                'last_name' => 'لا تنسى الكنية ',
                'phone'=> 'هذا الحقل مطلوب',
                'gender'=>'هذا الحقل مطلوب',
                'age'=>'ادخل عمرك رجاء',
                'illness'=>'اشرح  للطبيب عن مرضك',
                'age'=>'هذا الحقل مطلوب',
           ]
        );
        $users = User::find($id);
        $users->update($validatedData);
        return redirect()->route('users.index');
        
    

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user-> delete();
        return redirect()->route('user.index');
    }
}