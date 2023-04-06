<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments(column:'id');
            $table->integer(column: 'id_user')->unsigned();
            $table->integer(column: 'id_user')->references(columns:'id')->on(table:'users');
            $table->string(column: 'title');
            $table->integer(column: 'pages');
            $table->double(column: 'price', total:10,places:2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
