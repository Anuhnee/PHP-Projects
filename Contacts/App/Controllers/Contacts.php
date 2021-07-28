<?php

namespace App\Controllers;

use App\Models\Contact;

class getContacts
{
    public function index()
    {
        $contact = new Contact();
        $contacts = $contact->getContacts();
    }
}
