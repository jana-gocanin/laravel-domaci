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
        Schema::create('ugovors', function (Blueprint $table) {
            $table->id();
            $table->boolean('potpisano')->default(0);
            $table->timestamp('datum_potpisa')->useCurrent();
            $table->foreignId('pas_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('udomitelj_id')->nullable()->constrained()->nullOnDelete();
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
        Schema::dropIfExists('ugovors');
    }
};
