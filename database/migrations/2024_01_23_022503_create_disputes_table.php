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
        Schema::create('disputes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disputer_id')->nullable();
            $table->unsignedBigInteger('member_id')->nullable();
            $table->unsignedBigInteger('dispute_type')->nullable();
            $table->string('dispute_person_name')->nullable();
            $table->string('dispute_person_father_name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('dispute_person_cnic')->nullable();
            $table->string('dispute_person_contact_number')->nullable();
            $table->string('dispute_person_address')->nullable();
            $table->string('againstdisputerimage')->nullable();
            $table->string('final_review')->nullable();
            $table->integer('dispute_status')->default('0')->nullable(); // Status 0 is the default which means if member_id is null its pending
            $table->string('final_decision_favor')->nullable(); // 'disputer' or 'against'
            $table->string('assigned_date')->nullable();
            $table->timestamps();
            // Define foreign key constraints
            $table->foreign('disputer_id')->references('id')->on('disputers')->onDelete('cascade');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('dispute_type')->references('id')->on('dispute_type_settings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disputes');
    }
};
