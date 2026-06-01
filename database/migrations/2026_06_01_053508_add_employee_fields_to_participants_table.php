<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('participants', function (Blueprint $table) {

            $table->enum(
                'participant_type',
                ['general', 'employee']
            )->default('general');

            $table->string('npp')
                ->nullable();

            $table->string('work_unit')
                ->nullable();

            $table->string('payment_proof')
                ->nullable();

            
        });
    }

    public function down(): void
    {
        Schema::table('participants', function (Blueprint $table) {

            $table->dropColumn([
                'participant_type',
                'npp',
                'work_unit',
                'payment_proof',
                
            ]);
        });
    }
};