<?php
/**
 * Created by PhpStorm.
 * User: Massimo
 * Date: 2019-09-29
 * Time: 3:07 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaboratoryType extends Model
{
    public const STATUS = ["Inactif", "Draft", "Actif"];
    public const TYPE = ["Inscription", "Formation", "Défi Technique"];

    public function getStatusAttribute()
    {
        return self::STATUS[$this->status_id];
    }

    public function getTypeAttribute()
    {
        return self::TYPE[$this->type_id];
    }

    public function laboratory()
    {
        return $this->belongsTo('App\Models\Laboratory');
    }

    public function scopeInscription($query)
    {
        return $query->where('status_id', array_search("Actif", self::STATUS))
            ->where('type_id', array_search("Inscription", self::TYPE));
    }
}
