<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMainMenu extends Model
{
    use HasFactory;

    protected $fillable = ['main_menu_id', 'title', 'content', ''];

    public function mainMenu() {
        return $this->belongsTo(MainMenu::class);
    }

    public function question() {
        return $this->hasMany(Question::class);
    }

    public function tags(){
        return $this->belongsToMany(Tags::class, 'sub_menu_tags', 'sub_main_menus_id', 'tags_id' );
    }

    public function benefit(){
        return $this->hasMany(Benefit::class);
    }
}
