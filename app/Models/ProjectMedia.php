<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectMedia extends Model
{
    use HasFactory;
    public function projects()
    {
        return $this->belongTo(Project::class);
    }
    public function getNextId()
    {

        $statement = DB::select("show table status like 'project_media'");

        return $statement[0]->Auto_increment;
    }
}
