<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{

    /**
     * NoteController constructor.
     */
    public function __construct()
    {
    }

    public function index() {
        return view('notes.index')->with('notes', Note::all());
    }
}
