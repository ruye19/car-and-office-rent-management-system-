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
        Schema::create('agreement_renewals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_rent_agreement_id')->constrained()->cascadeOnDelete();
            $table->decimal('new_rent_amount', 10, 2);
            $table->date('new_start_date');
            $table->date('new_end_date')->nullable();
            $table->string('status')->default('pending');
            $table->foreignId('approved_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('agreement_renewals');
    }
};
