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
        Schema::create('branch', function (Blueprint $table) {
            $table->id();
            $table->string('shopId', 10);
            $table->string('branchId', 10)->unique();
            $table->string('branchName', 50);
            $table->string('address1', 50);
            $table->string('address2', 50);
            $table->date('dateOpened');
            $table->string('type', 1);
            $table->string('notes', 255);
            $table->string('remark', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch');
    }
};
