<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuTags extends Model
{
    use HasFactory;

    protected $fillable = ['tags_id', 'sub_main_menus_id'];
}
