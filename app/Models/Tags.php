<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function subMainMenu(){
        return $this->belongsToMany(SubMainMenu::class, 'sub_menu_tags');
    }
}
