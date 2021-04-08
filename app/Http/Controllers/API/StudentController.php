<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Welcome to Studently API', 'status' => 200]);
    }
    public function students()
    {
        $student = User::with('department')->get();
        return response()->json($student);
    }
    public function student(Request $request)
    {
        $student = User::with('department')->findOrFail($request->id);
        return response()->json($student);
    }
}
