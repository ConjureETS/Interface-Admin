<?php
/**
 * Created by PhpStorm.
 * User: Massimo
 * Date: 2019-09-29
 * Time: 3:07 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }
}
