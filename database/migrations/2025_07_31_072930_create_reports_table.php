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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->enum('return_type', ['borrow', 'return']);
            $table->string('report_desc', 255);
            $table->date('report_date');
            $table->foreignId('visitor_id')->constrained('visitors')->cascadeOnUpdate()->cascadeOnUpdate();
            $table->foreignId('borrowing_id')->constrained('borrowings')->cascadeOnUpdate()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
