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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("application_id")->nullable()->constrained()->nullOnDelete();
            $table->string("transactionId")->unique();
            $table->decimal('amount');
            $table->string("currency");
            $table->string("country");
            $table->string("email");
            $table->string("phoneNumber");
            $table->string("surName");
            $table->string("firstName");
            $table->string("lastName");
            $table->string("customerUrl");
            $table->string("merchantId");
            $table->enum("gateway",['UPPERLINKPAYGATE',"INTERSWITCH-PAYMENTGATEWAY"]);
            $table->boolean("status")->default(0);
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
        Schema::dropIfExists('transactions');
    }
};
