<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('institution');
            $table->string('type'); // Jenis konsultasi
            $table->string('email');
            $table->string('phone');
            $table->text('details');
            $table->string('status')->default('Baru'); // Baru, Ditinjau, Dijadwalkan, Selesai, Ditolak
            $table->text('internal_notes')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('consultations'); }
};