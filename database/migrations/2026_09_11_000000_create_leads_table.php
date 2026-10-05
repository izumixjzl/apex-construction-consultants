<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('email', 150);
            $table->string('phone', 30);
            $table->string('company', 150)->nullable();
            $table->enum('project_type', [
                'pre_construction',
                'on_site_oversight',
                'trade_consulting',
                'dispute_resolution',
                'not_sure',
            ]);
            $table->string('project_location', 150);
            $table->enum('budget_range', [
                'under_100k',
                '100k_500k',
                '500k_2m',
                '2m_10m',
                'over_10m',
            ]);
            $table->enum('timeline', [
                'immediately',
                '1_3_months',
                '3_6_months',
                'planning_stage',
            ]);
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
