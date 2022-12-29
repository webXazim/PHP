<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customorders', function (Blueprint $table) {
            $table->id();
            $table->string('_token');
            $table->string('name');
            $table->string('email');
            $table->text('msg1');
            $table->text('msg2');
            $table->text('msg3');
            $table->text('msg4');
            $table->text('msg5');
            $table->text('msg6');
            $table->text('msg7');
            $table->text('msg8');
            $table->text('msg9');
            $table->text('msg10');
            $table->text('msg11');
            $table->text('msg12');
            $table->text('msg13');
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
        Schema::dropIfExists('customorders');
    }
}
