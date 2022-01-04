<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recaps', function (Blueprint $table) {
            $table->id();
            $table->integer('product');
            $table->integer('purchase');
            $table->integer('premium');
            $table->integer('inquiries');
            $table->float('revenue');
            $table->float('cost');
            $table->float('profit');
            $table->integer('completions');
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
        Schema::dropIfExists('recaps');
    }
}
