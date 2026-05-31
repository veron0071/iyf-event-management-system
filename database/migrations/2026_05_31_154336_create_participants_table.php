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
        Schema::create('participants', function (Blueprint $table) {

            $table->id();

            $table->string('registration_code')->unique();

            $table->string('name');

            $table->string('email');
            $table->string('phone');

            $table->enum('gender', [
                'male',
                'female'
            ]);

            $table->date('birth_date');

            $table->string('city');

            $table->foreignId('shirt_size_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('emergency_contact_name');

            $table->string('emergency_contact_phone');

            $table->text('medical_notes')->nullable();

            $table->enum('payment_status', [
                'pending',
                'paid',
                'expired',
                'failed'
            ])->default('pending');

            $table->timestamp('paid_at')->nullable();

            $table->string('portal_token')->unique();

            $table->boolean('checkin_status')
                ->default(false);

            $table->timestamp('checkin_at')
                ->nullable();

            $table->boolean('agreed_terms');

            $table->boolean('agreed_media');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
