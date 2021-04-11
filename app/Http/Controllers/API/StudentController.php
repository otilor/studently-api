<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        $student = User::with('department')->firstWhere('matric_no','like', $request->id);
        return response()->json(['student' => $student])->setStatusCode(Response::HTTP_OK);
    }
    public function faculty()
    {
        $faculty = Faculty::all();
        return response()->json($faculty);
    }
}
