<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Notification;

class ShowController extends Controller
{
    public function validateAndSave(Request $request)
    {
        $contact = new Notification;
        $contact->name = $request->input('name');
        $contact->email = $request->email;
        $contact->betreff = $request->betreff;
        $contact->nachricht = $request->nachricht;
        $contact->save();
            return view('notification.thankyou', ['contact' => $contact]);

    }

    public function showAllContacts(Request $request)
    {
        $contacts = Notification::all();
        return view('notification.showall', ['contacts' => $contacts]);
    }


    public function showContact(Request $request, $id)
    {
        $contact = Notification::where('id',$id)->first();
        return view('notification.showContact', ['contact' => $contact]);
    }
}