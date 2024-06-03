<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
    
    public function getAboutAttribute($value)
    {
        return ucfirst($value);
    }

    public function getdiskonLabelAttribute(){

       $diskon =$this->price*(1-($this->discount/100));
       return number_format($diskon);

    }

    public function getSubTotalLabelAttribute(){
        $subTotal=$this->quantity*$this->diskonLabel;
        return number_format($subTotal);
    }


}
