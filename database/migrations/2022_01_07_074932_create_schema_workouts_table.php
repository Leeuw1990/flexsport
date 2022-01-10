<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchemaWorkoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schema_workout', function (Blueprint $table) {
            $table->id();
//            $table->integer("workout_id")->unsigned()->index();
            $table->foreignId("workout_id")->references("id")->on("schemas")->onDelete("cascade");
//            $table->integer("schema_id")->unsigned()->index();
            $table->foreignId("schema_id")->references("id")->on("workouts")->onDelete("cascade");
//            $table->primary(["workout_id", "schema_id"]);
        });
    }

//$table->integer("repetition");
//$table->integer("weight");

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schema_workouts');
    }
}
