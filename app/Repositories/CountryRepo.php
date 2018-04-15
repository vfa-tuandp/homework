<?php
/**
 * Created by PhpStorm.
 * User: phuocnt
 * Date: 4/15/18
 * Time: 9:42 AM
 */

namespace App\Repositories;

use App\Models\Country;

class CountryRepo extends BaseRepository
{
    public function model()
    {
        return Country::class;
    }
}