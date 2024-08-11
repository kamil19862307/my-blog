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
        Schema::create('notes', function (Blueprint $table) {
//            $table->id();

            $table->increments('id')->unsigned()->from(100);

            $table->string('title', 200)->unique();

            $table->string('slug')->unique()->nullable();

            $table->mediumText('content');

            $table->boolean('status')->default(true);

            $table->timestamps();

            $table->timestamp('updated')
                ->nullable()
                ->useCurrent()
                ->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
