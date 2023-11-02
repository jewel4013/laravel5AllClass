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
        Schema::create('signups', function (Blueprint $table) {
            $table->id('id');
            $table->string('fname', 150);
            $table->string('lname', 150);
            $table->string('email', 150)->unique();
            $table->string('uname', 150)->unique();
            $table->timestamp('date_of_birth');
            $table->string('phone');
            $table->text('bio');
            $table->integer('post_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signups');
    }
};
