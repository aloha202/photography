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
        Schema::create('promocodes', function (Blueprint $table) {
            $table->string('promocode');
            $table->string('username')->nullable(true);
            $table->unsignedInteger('percent');
            $table->enum('status', ['active', 'used'])->default('active');
            $table->dateTime('used_at')->default('1970-01-01 00:00:00');
            $table->timestamps();
                ;

            $table->primary(['promocode', 'used_at']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promocodes');
    }
};
