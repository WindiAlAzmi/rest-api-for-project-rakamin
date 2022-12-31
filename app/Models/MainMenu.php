<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
    
    public function subMainMenu(){
        return $this->hasMany(SubMainMenu::class);
    }
}
