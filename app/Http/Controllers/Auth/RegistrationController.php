<?php
/**
 * Created by PhpStorm.
 * User: alexanderschneider
 * Date: 17.11.17
 * Time: 09:39
 */

namespace App\Http\Controllers\Auth;


class RegistrationController extends Controller
{
    public function validateAndSave(Request $request)
    {
        $contact = new Notification;
        $contact->senderfirstname = $request->input('sender-firstname');
        $contact->sender = $request->sender;
        $contact->type = $request->contact_type;
        $contact->message = $request->message;
        $contact->email = $request->email;
        $contact->tel = $request->tel;

        $errMsg = $this->validateContact($contact);

        if (!empty($errMsg)) {
            return view('notification.kontaktformular', ["errMsg" => $errMsg,'contact' => $contact]);
        } else {
            $contact->save();
            return view('notification.thankyou', ['contact' => $contact]);
        }
    }

    public function showAllContacts(Request $request)
    {
        $contacts = Notification::all();
        return view('notification.showAllContacts', ['contacts' => $contacts]);
    }


    public function showContact(Request $request, $id)
    {
        $contact = Notification::where('id',$id)->first();
        return view('notification.showContact', ['contact' => $contact]);
    }


    function validateContact(Notification $contact)
    {
        $errMsg = "";
        if (empty($contact->senderfirstname)) {
            $errMsg = $errMsg . "Das Feld Vorname muss ausgefüllt sein.<BR>";
        }

        if (empty($contact->sender)) {
            $errMsg = $errMsg . "Das Feld Nachname muss ausgefüllt sein.<BR>";
        }

        if (empty($contact->type)) {
            $errMsg = $errMsg . "Es muß eine Kontakmöglichkeit angegeben werden.<BR>";
        }

        if ($contact->type == "email") {
            if (empty($contact->email)) {
                $errMsg = $errMsg . "Sie haben E-Mail als Kontaktmittel ausgewält. In diesem Fall muß das Feld E-Mail Adresse ausgefüllt sein. <BR>";
            }
        }

        if ($contact->type == "fon") {
            if (empty($contact->tel)) {
                $errMsg = $errMsg . "Sie haben Telefon als Kontaktmittel ausgewält. In diesem Fall muß das Feld Telefonnummer ausgefüllt sein. <BR>";
            }
        }

        if (empty( $contact->message)) {
            $errMsg = $errMsg . "Das Feld Nachricht muss ausgefüllt sein. ";
        }
        return $errMsg;
    }
}