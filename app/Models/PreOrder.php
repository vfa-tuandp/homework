<?php
/**
 * Created by PhpStorm.
 * User: phuocnt
 * Date: 4/15/18
 * Time: 9:43 AM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Constants\PreOrder as PreOderConst;

class PreOrder extends Model
{
    protected $table = 'pre_orders';

    private $statusMap = [
        PreOderConst::STATUS_ACTIVE  => 'active',
        PreOderConst::STATUS_PENDING => 'pending',
        PreOderConst::STATUS_DELETED => 'deleted',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    public function deliveryOptions()
    {
        return $this->belongsToMany(DeliveryOption::class)->withPivot('cost');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function medias()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function getStatusAttribute($status)
    {
        return $this->statusMap[$status];
    }

    public function getMainImageAttribute($mainImageName)
    {
        // Just for example
        $baseUrl = 'https://s3.aws.abc/';
        $path = 'preorder/main_image/thumbnail/';
        return $baseUrl . $path . $mainImageName;
    }
}