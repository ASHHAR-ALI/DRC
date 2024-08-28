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
        Schema::create('dispute_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dispute_id');
            $table->unsignedBigInteger('member_id')->nullable(); // disputer_id or member_id
            $table->unsignedBigInteger('disputer_id')->nullable();
            $table->text('comment');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('dispute_id')->references('id')->on('disputes')->onDelete('cascade');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('disputer_id')->references('id')->on('disputers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispute_comments');
    }
};
