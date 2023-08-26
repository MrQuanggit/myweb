<?php

namespace App\Models;

use App\Http\Controllers\ImageConst;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        'description',
        'stock',
        'view',
        'priceEach',
        'slug',
        'size',
        'image1',
        'image2',
        'category_id',
    ];

    function category() {
        return $this->belongsTo(Category::class);
    }

    function image() {
        return $this->belongsTo(Image::class);
    }

    function orders() {
        return $this->belongsToMany(Order::class,'order_detail','product_id','order_id')->withPivot('quantity','priceEach');
    }

    public function getProductImage() {
//        return "https://quangvoc8.s3.amazonaws.com/".$this->image1;
        if(is_null($this->image1)) {
            return ImageConstant::PRODUCT;
        }
        return '/storage/products/' .ltrim($this->image1, '/public/products/');
    }

    public function getProductImage2() {
        if(is_null($this->image2)) {
            return ImageConstant::PRODUCT;
        }
        return '/storage/products/' .ltrim($this->image2, '/public/products/');
    }
    public function getProductImage3() {
        if(is_null($this->image3)) {
            return ImageConstant::PRODUCT;
        }
        return '/storage/products/' .ltrim($this->image3, '/public/products/');
    }
    public function getProductImage4() {
        if(is_null($this->image4)) {
            return ImageConstant::PRODUCT;
        }
        return '/storage/products/' .ltrim($this->image4, '/public/products/');
    }
    public function getProductImage5() {
        if(is_null($this->image5)) {
            return ImageConstant::PRODUCT;
        }
        return '/storage/products/' .ltrim($this->image5, '/public/products/');
    }

    public $timestamps = false;
}
