<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        // trainings.index ビューにデータを渡す
        return view('trainings.index');
    }
    public function show()
    {
        $training=new Training();
        // dd($training->get());
        // この場合は特に引数を取らずに、chestトレーニングページを表示
        return view('trainings.show')->with(['trainings_data'=>$training->get()]);
    }
}

 