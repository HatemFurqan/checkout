<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use App\Models\Student;
use App\Service\Payment\Checkout;
use Illuminate\Http\Request;

class SemesterRegistrationController extends Controller
{
    public function create()
    {
        return view('subscribe');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * @param string $token
     * @return string
     */
    public function payment(string $token): string
    {
        $data = (new Checkout())->payment($token);
        return $data->status;
    }

    public function getStudentInfo()
    {
        $student = Student::query()
            ->where('serial_number', '=', \request()->std_number)
            ->where('section', '=', \request()->std_section)
            ->first();


        if ($student){
            return response()->json(['name' => $student->name], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['name' => $student->name], 500);

    }
}
