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
        Schema::create('coustomer', function (Blueprint $table) {
            $table->id('coustomer_id');//id for primary key
            $table->string('name' , 60);
            $table->string('email', 50);
            $table->enum('Gender',["M","F","O"])->nullable();
            $table->text('address');
            $table->date('dob');
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();//created at , updated at



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coustomer');
    }
};
