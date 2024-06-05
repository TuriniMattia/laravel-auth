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
        Schema::create('boolfolio', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->text('project_description');
            $table->string('github_link');
            $table->dateTime('uploading_date');
            $table->text('about_me');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boolfolio');
    }
};
