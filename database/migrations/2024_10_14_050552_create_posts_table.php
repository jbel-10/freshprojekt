<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // ID prispevku
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade'); // Admin ID jako foreign key pro zaznameni ID autora clanku
            $table->string('category'); // Kategorie clanku
            $table->string('title'); // Titulek clanku
            $table->text('content'); // Text prispevku
            $table->binary('main_photo')->nullable(); // Nahledova fotka
            $table->json('images')->nullable(); // Uchovavani dalsich fotek patricich k clanku
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}