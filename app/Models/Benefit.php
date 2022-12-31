<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'sub_menu_id'];

    public function subMainMenu(){
        return $this->belongsTo(SubMainMenu::class, 'sub_menu_id');
    }
}
