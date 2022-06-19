<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\NoteCollection;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Note;

class NoteController extends Controller
{

    /**
     * NoteController constructor.
     */
    public function __construct()
    {
    }

    public function index(Request $request) {
        $notes = Note::orderBy('id')->paginate(config('app.number_per_page'));
        if($request->ajax())
        {
            return view('notes.pagination_data', compact('notes'))->render();
        }
        return new NoteResource($notes);
    }
}
