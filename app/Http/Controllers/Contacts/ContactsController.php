<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactsController extends Controller
{
    function index() {
        $data = ContactUs::paginate(10);
        return view('dashboards.admins.contacts.index', compact('data'));
    }
}
