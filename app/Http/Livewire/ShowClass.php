<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Illuminate\Routing\Route;
use Livewire\Component;

class ShowClass extends Component
{
    public $detailQuiz;
    public $applicants;

    public function getIdQuiz($id) {
        $detailQuiz = Quiz::find($id);
        $this->detailQuiz = $detailQuiz;
        // dd($detailQuiz);
    }

    public function render()
    {
        $class = Quiz::get();
        $data = [
            'class' => $class,
            'detailQuiz' => $this->detailQuiz,
        ];
        return view('livewire.show-class', $data);
    }
}
