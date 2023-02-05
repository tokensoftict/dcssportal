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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamp('registration_begins')->nullable();
            $table->timestamp('registration_ends')->nullable();;
            $table->year("session");
            $table->decimal("form_fee",8,2);
            $table->decimal("split_one",8,2);
            $table->decimal("split_two",8,2);
            $table->boolean("status")->default(1);
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
        Schema::dropIfExists('sessions');
    }
};
