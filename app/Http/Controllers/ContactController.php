<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|min:4',
            'subject_mail' => 'required|min:4',
            'email' => 'required|email',
            'content' => 'required|min:4',
        ]);

        // Récupération de l'adresse e-mail de contact à partir de la base de données
        $contact_email = Setting::select('contact_mail')->where('id', 1)->first();

        // Envoi de l'e-mail au contact principal défini dans les paramètres
        Mail::to($contact_email->contact_mail)
            ->send(new ContactMail($request->name, $request->email, $request->subject_mail, $request->content));

        // Envoi de l'e-mail à une adresse e-mail secondaire (pour des raisons de test)
        Mail::to('kebem2446@gmail.com')
            ->send(new ContactMail($request->name, $request->email, $request->subject_mail, $request->content));

        // Envoi d'un e-mail de test statique à une autre adresse (pour des raisons de test)
        // Mail::to("kebedev313@gmail.com")
        //     ->send(new ContactMail('nnn', 'e@z.com', 'bla bla', 'bla bla bla bla'));

        // Redirection avec un message de succès
        return to_route('home')->with('message', 'Message sent successfully!');
    }
}
