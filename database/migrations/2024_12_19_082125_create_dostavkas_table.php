<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dostavkas', function (Blueprint $table) {
            $table->id();
            $table->string('hpi')->unique();  // Уникальный номер отправления
            $table->string('status')->default('В обработке');  // Статус доставки
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dostavkas');
    }
};
