<?php
/**
 * Created by PhpStorm.
 * User: Massimo
 * Date: 2019-09-29
 * Time: 3:07 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    public const STATUS = ["Envoyé", "Remis", "Corrigé", "À Refaire", "Accepté", "Refusé", "Deadline Dépassé"];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function getStatusAttribute()
    {
        return self::STATUS[$this->status_id];
    }

    public function laboratoryType()
    {
        return $this->hasOne('App\Models\LaboratoryType');
    }


}
