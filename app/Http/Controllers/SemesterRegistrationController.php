<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use App\Models\Student;
use App\Models\Subscribe;
use App\Service\Payment\Checkout;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\Intl\Countries;
use function GuzzleHttp\json_decode;

class SemesterRegistrationController extends Controller
{
    public function index()
    {
        if(request()->query('cko-session-id')){
            $client = new Client(['base_uri' => 'https://api.checkout.com']);

            try {
                $response = $client->request('GET', '/payments/' . request()->query('cko-session-id'),
                    [
                        'headers' => [
                            'Authorization' => "sk_f9b4d5dd-d1d0-4943-bdbf-e5cd88f37403"
                        ]
                    ]);

                $data = json_decode($response->getBody()->getContents());

                if ($response->getStatusCode() != 404){
                    Subscribe::query()
                        ->where('payment_id', '=', $data->id)
                        ->update([
                            'payment_status' => $data->status
                        ]);

                    session()->flash('success', __('resubscribe.The registration process has been completed successfully'));
                }else{
                    session()->flash('error', __('resubscribe.Payment failed, please try again'));
                }

                return redirect()->route('semester.registration.index');
            }catch (\GuzzleHttp\Exception\ClientException $e) {
//                $response = $e->getResponse();
                session()->flash('error', __('resubscribe.Payment failed, please try again'));
                return redirect()->route('semester.registration.index');
            }
        }

        $countries = Countries::getNames(App::getLocale());
        return view('old_students', ['countries' => $countries]);
    }

    public function store(Request $request)
    {

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
