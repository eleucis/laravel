<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;

    use SoftDeletes;

    public $timestamps = false;

    protected $guarded = [];


    protected $fillable = [
        'title',
        'description',
        'status',
        'category_id',
        'author_id',

    ];
    //protected $fillable = ['title', 'description', 'status', 'created_at', 'category_id'];

    public function category(){

        return $this->hasOne(category::class, "id", "category_id");
    }

}
