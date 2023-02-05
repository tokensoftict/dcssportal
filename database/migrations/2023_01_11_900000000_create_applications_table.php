<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('firstname');
            $table->string('othernames')->nullable();
            $table->string("exam_number")->unique()->nullable();
            $table->string("gender")->nullable();;
            $table->string("passport_path")->nullable();
            $table->string("age")->nullable();;
            $table->string("telephone")->nullable();
            $table->text("local_govt")->nullable();
            $table->string("email")->nullable();
            $table->string("address")->nullable();;
            $table->foreignId("parental_status_id")->nullable()->constrained()->cascadeOnDelete();
            $table->text("parent_names")->nullable();
            $table->string("rank")->nullable();
            $table->string("svc")->nullable();
            $table->string("svc_number")->nullable();
            $table->boolean("retired")->default(0);
            $table->string("retired_number")->nullable();
            $table->date("dob")->nullable();;
            $table->string("unitFormation")->nullable();
            $table->foreignId('school_type_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('school_type_id2');
            $table->foreignId("school_id")->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger("school2_id")->nullable();
            $table->unsignedBigInteger("school3_id")->nullable();
            $table->foreignId("state_id")->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger("exam_state_id")->nullable();
            $table->foreignId("center_id")->nullable()->constrained()->nullOnDelete();
            $table->integer("num_of_edits")->default(0);
            $table->foreignId("user_id")->nullable()->constrained()->nullOnDelete();
            $table->foreignId("session_id")->nullable()->constrained()->nullOnDelete();
            $table->timestamps();

            $table->foreign('school2_id')->references('id')->on('schools')->nullOnDelete();
            $table->foreign('school3_id')->references('id')->on('schools')->nullOnDelete();
            $table->foreign('exam_state_id')->references('id')->on('states')->nullOnDelete();
            $table->foreign('school_type_id2')->references('id')->on('school_types')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
