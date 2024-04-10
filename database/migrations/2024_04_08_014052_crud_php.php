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
        Schema::create('clients', function (Blueprint $table){
            $table->id();
            $table->string('nameClient', length: 100);
            $table->string('cnpj', length: 14);
            $table->timestamps();
        });

        Schema::create('address', function (Blueprint $table){
            $table->id();
            $table->string('address', length: 100);
            $table->double('num', length: 14);
            $table->double('cep');
            $table->string('district', length: 100);
            $table->string('city', length: 100);
            $table->foreignId('client_id');
            $table->timestamps();
        });
    }

    
        
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
