<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

// Вывод наших текстов ошибок, а не из класса Request
class ContactController extends Controller {

    public function submit(ContactRequest $req) { 

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено'); // Переадрессация на главную страницу

        //$validation = $req->validate([
            // Переносим в файл ContactRequest.php
        //]);
    }
}

/*
// Вывод стандатных текстов ошибок класса Request
class ContactController extends Controller {

    public function submit(Request $req) {
        $validation = $req->validate([
            'name' => 'required',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:500'
        ]);
        //dd($req); // Выводим все параметры класса Реквест: кукки, сессии и многое другое
        //dd($req -> input('subject')); //Выводим тему сообщения
    }
}
*/