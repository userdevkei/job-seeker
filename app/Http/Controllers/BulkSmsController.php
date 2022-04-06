<?php

namespace App\Http\Controllers;

use App\Shortlist;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Validator;

class BulkSmsController extends Controller
{
    public function getContact(Request $request, $id){
        $contact = Shortlist::find($id);
        $contact -> contact;
    }
    public function index(Request $request, $id)
    {
        $contact = Shortlist::find($id);
        $contact -> contact;
        $contact -> name;
        $contact -> job_name;
        $contact -> contract;
        $contact -> located;
        $contact -> hours;
        $contact -> duties;
        $contact -> salary;

        $receiverNumber = $contact->contact;
        $message = "Congratulations ".$contact->name . "! You have been selected for " .$contact->job_applied. " job that you had applied for. In this job you will be required to ".$contact->duties.'. Your working hours are between '.$contact->hours.' for '.$contact->contract.' and you will be paid '.$contact->salary.' . This job is located at '.$contact->located. '. For more information contact +254729434393. Thank you.' ;

        try {

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            $contact->t_status = 1;
            $contact->save();


        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
        return redirect('shortlist')->with('success', 'The applicant has been notified via text.');
    }
}
