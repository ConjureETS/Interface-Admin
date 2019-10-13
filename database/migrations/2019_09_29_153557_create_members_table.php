<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email")->unique();
            $table->string("universal_code", 7);
            $table->string("phone")->nullable();
            $table->string("start_semester");
            $table->string("last_semester")->nullable();
            $table->integer("program_id");
            $table->integer("laboratory_id")->nullable();
            $table->integer("activity");

            $table->text("expectation")->nullable();
            $table->integer("preferred_communication_method_id")->nullable();
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
        Schema::dropIfExists('members');
    }
}
