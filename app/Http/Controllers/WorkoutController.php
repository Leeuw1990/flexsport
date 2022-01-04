<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function workout()
    {
            return view('workout.workout', [
            "workouts" => Workout::all()
            ]);
    }
    //
}
