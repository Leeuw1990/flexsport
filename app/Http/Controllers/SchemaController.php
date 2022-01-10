<?php

namespace App\Http\Controllers;

use App\Models\Schema;
use App\Models\User;
use App\Models\Workout;
use Illuminate\Support\Facades\DB;


class SchemaController extends Controller
{

    public function getById($id)
    {
        return view("singleworkout.singleworkout", [
            "workouts" => Schema::find($id)->workouts()->get()
        ]);
    }

    public function schema()
    {
        return view("schema.schema",[
            "exercises" => Workout::all()
        ]);
    }

    public function your()
    {

        return view("created.created", [
            "workouts" => Schema::all()->where("user_id", request()->user()->id)
        ]);

    }

//    public function your()
//    {
//
//        return view("created.created", [
//            "workouts" => Schema::first()->workouts()->get()
//        ]);
//
//    }

    public function delete()
    {
        $schema = Schema::find(request("schema_id"));

        $schema->workouts()->wherePivot("workout_id", "=", request("workout_id"))->detach();

        return redirect()->back();

    }

    public function create()
    {
        // schema_id word hier mee aangemaakt

        $data = Schema::create([
            "day" => \request("day"),
            "user_id" => \request()->user()->id

        ]);
            $data->save();

            $schemaId = $data->id;

            $schemas = Schema::find($schemaId);

            $schemas->workouts()->sync([$schemaId]);
            //$workout = Workout::find(1);
            // workout_id word hiermee aangemaakt
            $schemas->workouts()->attach(request("workout_id"));

            return redirect("/");

    }
//        $workout->schema()->sync([
//            $schema->id => [1],
//            $schema->id => [2],



   //     ]);

//       DB::table("schema_workout")->insert([
//           [""]
//       ]);



    //        request()->validate([
//            "day" => "required"
//        ]);
//
//        $schema->create([
//            "day" => \request("day"),
//            "user_id" => \request()->user()->id
//        ]);

//    public function createExercise(Schema $schema)
//    {
//        dd($d);
//        request()->validate([
//            "repetition" => "required",
//            "weight" => "required"
//        ]);


//        $schema->workout()->create([
//           "repetition" => \request("repetition"),
//            "weight" => \request("weight"),
//            "schema_id" => \request(1),
//            "workout_id" => \request(1)
//        ]);
//    }

//    public function create(Schema $schema)
//    {
//        $schema->workout()->create([
//            "workout_id" => request("workout_id"),
//            "repetition" => request("repetition"),
//            "weight" => request("weight")
//        ]);
//
//    }



//    public function getExercise(Request $request)
//    {
//        $getId = substr($request->id, -1);
//        return view("schema.schema", [
//            "exercises" => Workout::all()->where("id", $getId)
//        ]);
//    }

}
