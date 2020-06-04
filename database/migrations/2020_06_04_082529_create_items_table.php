<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('subtitle', 100);
            $table->mediumtext('text');
            $table->string('imageurl', 100);
            $table->string('pageurl', 100);
            $table->string('itemauthor', 100);
            $table->date('item_created');
            $table->date('item_changed');
            $table->boolean('hidden');
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
        Schema::dropIfExists('items');
    }
}
