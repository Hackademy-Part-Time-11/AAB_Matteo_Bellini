<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tag;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) 
        {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $names = [
            'politica', 'attualità', 'sport', 'tecnologia', 'gossip', 'auto-emoto', 'food' ];
            foreach($names as $name)
            {
                Tag::create(['name'=>$name]);
            }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
