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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('adresse');
            $table->string('dateNaissance');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('IsClient')->default(false);
            $table->integer('montantPaye')->default(null);
            $table->integer('montantRestant')->default(null);
            $table->string('permis');
            $table->boolean('admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
