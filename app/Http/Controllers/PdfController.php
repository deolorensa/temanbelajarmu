<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Redirect;

class PdfController extends Controller
{
    public function upload($id)
    {
        $quiz = Quiz::find($id);
        return view('upload', compact('quiz'));
    }

    public function update($id, Request $request) {
        // dd($request->all());
        $quiz = Quiz::find($id);
        $rules = [
            'pdf' => 'file|max:2048|mimes:pdf',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
            'max' => 'ukuran :attribute harus kurang dari 2 MB',
            'mimes' => ':attribute hanya boleh png, jpeg, jpg, pdf',
        ];

        $this->validate($request, $rules, $customMessages);

        $file = $request->pdf;
        if ($request->hasFile('pdf')) {
            // $projectName = str_replace(' ','-', $request->name);
            $extension = $request->file('pdf')->guessExtension();
            $fileName = 'materi'.$id.'.'.$extension;
            $file = $request->file('pdf')->storeAs('', $fileName);
        }

        $quiz->id = $request->id;
        $quiz->name = $request->name;
        $quiz->description = $request->description;
        $quiz->pdf = $file;
        $quiz->minutes = $request->minutes;
        $quiz->save();
        return Redirect::back()->with('msg', 'upload PDF complete.');
    }
}
