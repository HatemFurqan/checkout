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

                if ($response->getStatusCode() != 404){
                    Subscribe::query()
                        ->where('payment_id', '=', $response->id)
                        ->update([
                            'payment_status' => $response->status
                        ]);

                    session()->flash('success', __('resubscribe.The registration process has been completed successfully'));
                }else{
                    session()->flash('error', __('resubscribe.Payment failed, please try again'));
                }

                return redirect()->back();
            }catch (\GuzzleHttp\Exception\ClientException $e) {
//                $response = $e->getResponse();
                session()->flash('error', __('resubscribe.Payment failed, please try again'));
                return redirect()->back();
            }

        }

        $countries = Countries::getNames(App::getLocale());
        return view('old_students', ['countries' => $countries]);
    }

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
