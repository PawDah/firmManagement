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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->text('contract_details');
            $table->decimal('payment_amount');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('contract_type_id')->constrained('contract_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
