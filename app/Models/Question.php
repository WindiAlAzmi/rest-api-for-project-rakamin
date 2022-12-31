<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'sub_main_menu_id'];

    public function subMainMenu() {
        return $this->belongsTo(SubMainMenu::class, 'sub_main_menu_id');
    }

    public function answer() {
        return $this->hasOne(Answer::class);
    }

}
