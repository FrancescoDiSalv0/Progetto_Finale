<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string("name");

            $table->timestamps();
        });
        $categories = [
        "Elettronica",
        "Abbigliamento e accessori",
        "Casa e giardino",
        "Sport e tempo libero",
        "Salute e bellezza",
        "Libri, film e musica",
        "Prodotti per bambini e neonati",
        "Cibo e bevande",
        "Articoli per animali domestici",
        "Articoli per ufficio e scuola"
    ];

        foreach ($categories as $category) {
            Category::create(["name" => $category]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
