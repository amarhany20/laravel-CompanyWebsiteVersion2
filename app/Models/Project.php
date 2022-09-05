<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    // use HasFactory;

    protected $fillable = ['title', 'lang2_Title', 'lang3_Title', 'subtitle', 'lang2_Subtitle', 'lang3_Subtitle', 'content', 'lang2_Content', 'lang3_Content', 'category_id ', 'date ', 'category_id ', 'thumbnail_url ', 'thumbnail_alt ', 'lang2_thumbnail_alt ', 'lang3_thumbnail_alt ', 'meta_Title ', 'lang2_meta_Title ', 'lang3_meta_Title ', 'meta_description ', 'lang2_meta_description ', 'lang3_meta_description ', 'is_Shown'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getNextId()
    {

        $statement = DB::select("show table status like 'projects'");

        return $statement[0]->Auto_increment;
    }

}
