<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function blogCategoryData(){
        return $this->hasOne(BlogCategory::class,'id','category_id');
    }

    public function staffData(){
        return $this->hasOne(Admin::class,'id','staff_id');
    }
}
