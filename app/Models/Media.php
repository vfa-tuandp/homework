<?php
/**
 * Created by PhpStorm.
 * User: phuocnt
 * Date: 4/15/18
 * Time: 9:43 AM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';

    public function mediable()
    {
        return $this->morphTo();
    }

    public function getNameAttribute($imageName)
    {
        // Just for example
        $baseUrl = 'https://s3.aws.abc/';
        $path = 'preorder/iamges/thumbnail/';
        return $baseUrl . $path . $imageName;
    }
}