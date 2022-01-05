<?php

namespace App\Http\Controllers;

use App\Models\Schema;
use App\Models\Workout;
use Illuminate\Http\Request;

class SchemaController extends Controller
{
    public function schema()
    {
        return view("schema.schema",[
            "schemas" => Schema::all()
        ]);
    }

    public function select()
    {
        return view("select.select",[
            "exercises" => Workout::all()
        ]);
    }

    public function create(Schema $schema)
    {
        request()->validate([
            "day" => "required"
        ]);

        $schema->create([
            "day" => \request("day"),
            "user_id" => \request()->user()->id
        ]);

    }

//    public function create(Schema $schema)
//    {
//        $schema->workout()->create([
//            "workout_id" => request("workout_id"),
//            "repetition" => request("repetition"),
//            "weight" => request("weight")
//        ]);
//
//    }

    public function getExercise($id)
    {
        return view("exercise.exercise", [
            "exercises" => Workout::all()->where("id", $id)
        ]);
    }
    //
}
