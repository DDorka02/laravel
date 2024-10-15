<?php

use App\Models\Product_type;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->string('description');
            $table->integer('cost')->default(1800);
            $table->timestamps();
        });

        Product_type::create([
            'name' => 'Gép',
            'description' => 'Megy a gép',
            'name' => 2000,
            
        ]);
        Product_type::create([
            'name' => 'Telefon',
            'description' => 'Bla bla',
            'name' => 2200,
            
        ]);
        Product_type::create([
            'name' => 'Számítógép',
            'description' => 'Xy',
            'name' => 2500,
            
        ]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
