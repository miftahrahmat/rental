<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('title', array('Dr', 'Mr', 'Mrs', 'Ms', 'Other', 'Prof', 'Rev'))->default('Dr');
            $table->unsignedBigInteger('user_id');
            $table->string('telephone', 15);
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->text('address');
            $table->string('zip', 10)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
