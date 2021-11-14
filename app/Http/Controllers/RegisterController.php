<?php

namespace App\Http\Controllers;

use App\FilesHelper;
use App\Models\Register;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use FilesHelper;

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {
        $this->validation($request);
        $data = $request->all();
        if ($request->hasFile('student_id')) {
            $data['student_id'] = $this->fileUpload($request->file('student_id'), 'files');
        }

        if ($request->hasFile('parent_id')) {
            $data['parent_id'] = $this->fileUpload($request->file('parent_id'), 'files');
        }

        Register::create($data);
        return view('welcome');
    }

    /**
     * @param Request $request
     */
    private function validation(Request $request)
    {
        $request->validate([
            'sex' => ['sometime', 'string'],
            'period' => ['sometime', 'string'],
            'dob' => ['sometime', 'string'],
            'payment_method' => ['sometime', 'string'],
            'serial_number' => ['sometime', 'string'],
            'name' => ['sometime', 'string'],
            'nationality' => ['sometime', 'string'],
            'country_of_residence' => ['sometime', 'string'],
            'city' => ['sometime', 'string'],
            'address' => ['sometime', 'string'],
            'post_code' => ['sometime', 'string'],
            'place_of_birth' => ['sometime', 'string'],
            'id_passport_number' => ['sometime', 'string'],
            'student_fathers_mobile_number' => ['sometime', 'string'],
            'student_mothers_mobile_number' => ['sometime', 'string'],
            'student_fathers_email' => ['sometime', 'string'],
            'student_mothers_email' => ['sometime', 'string'],
            'preferred_language' => ['sometime', 'string'],
            'student_fathers_name' => ['sometime', 'string'],
            'student_fathers_employer' => ['sometime', 'string'],
            'student_mothers_name' => ['sometime', 'string'],
            'student_mothers_employer' => ['sometime', 'string'],
            'student_social_status' => ['sometime', 'string'],
            'student_disease' => ['sometime', 'string'],
            'participated' => ['sometime', 'string'],
            'al_nooraniah' => ['sometime', 'string'],
            'student_id' => ['sometime', 'string'],
            'parent_id' => ['sometime', 'string'],
        ]);
    }
}
