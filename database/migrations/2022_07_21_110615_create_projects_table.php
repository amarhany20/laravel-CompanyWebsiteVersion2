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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('lang2_Title')->nullable();
            $table->string('lang3_Title')->nullable();
            $table->string('subtitle');
            $table->string('lang2_Subtitle')->nullable();
            $table->string('lang3_Subtitle')->nullable();
            $table->string('content',2000);
            $table->string('lang2_Content', 2000)->nullable();
            $table->string('lang3_Content', 2000)->nullable();
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('date');
            $table->string('thumbnail_url');
            $table->string('thumbnail_alt')->nullable();
            $table->string('lang2_thumbnail_alt')->nullable();
            $table->string('lang3_thumbnail_alt')->nullable();
            $table->string('meta_Title')->nullable();
            $table->string('lang2_meta_Title')->nullable();
            $table->string('lang3_meta_Title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('lang2_meta_description')->nullable();
            $table->string('lang3_meta_description')->nullable();
            $table->boolean('is_Shown')->default(true);

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
        Schema::dropIfExists('projects');
    }
};
