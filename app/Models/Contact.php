<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['fullname','gender','email','postcode','address','building_name','opinion','created_at','updated_at'];

    public function getDetail()
    {
        $txt = $this->id.''. $this->fullname.''.$this->gender.' '.$this->email.' '.$this->opinion;
        return $txt;
    }
}