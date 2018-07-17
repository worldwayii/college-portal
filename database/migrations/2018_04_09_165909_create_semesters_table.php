<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use App\Models\Semester;

class CreateSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Semester::name(), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('semester_type_id')->unsigned();
            $table->integer('session_id')->unsigned();
            $table->timestamp('start_date')->default('1970-01-01 00:00:00');
            $table->timestamp('end_date')->default('1970-01-01 00:00:00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Semester::name());
    }
}
