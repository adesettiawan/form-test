<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function setHobiAttribute($value)
    {
        $this->attributes['hobi'] = json_encode($value);
    }

    public function getHobiAttribute($value)
    {
        return $this->attributes['hobi'] = json_decode($value);
    }
}
