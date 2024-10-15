<?php

use App\Models\Product;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id('item_id');
            $table->foreignId('type_id')->references('type_id')->on('product_types');
            $table->string('name');
            $table->timestamps();
        });
        
        Product::create([
            'type_id' => 2,
            'name' => 'Kép',
            
        ]);
        Product::create([
            'type_id' => 1,
            'name' => 'Gép',
            
        ]);
        Product::create([
            'type_id' => 2,
            'name' => 'Ásó',
            
        ]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
