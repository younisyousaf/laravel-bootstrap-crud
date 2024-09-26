<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Add a Single Record
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4056'
        ]);
        // Prepare data
        $data = $request->only(['firstname', 'lastname', 'email']);

        // Image Uploading
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName; //Add Image to the Data Array
        }

        // Store the data in the database
        Student::create($data);
        // Student::create($request->all());
        // Second Method
        // Student::create([
        //     'name' => $request->firstname,
        //     'lastname' => $request->lastname,
        //     'email' => $request->email
        // ]);
        return redirect('/students')->with('status', 'Student Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Show a Single Record
        $student = Student::find($id);
        if ($student) {
            return view('students.show', compact('student'));
        } else {
            return redirect('/students')->with('status', 'Student Not Found!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Show the Single Record in Form
        $student = Student::find($id);
        if ($student) {
            return view('students.edit', compact('student'));
        } else {
            return redirect('/students')->with('status', 'Student Not Found!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Update the Single Record
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email'
        ]);

        // dd($request->all());
        $student = Student::findOrFail($id);
        if ($request->hasFile('image')) {
            unlink(public_path('images/' . $student->image));
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $student->image = $imageName;
        }

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->save();
        // $student->update($request->all());
        return redirect('/students')->with('status', 'Student Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete Single Record
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/students')->with('status', 'Student Deleted Successfully!');
    }
}
