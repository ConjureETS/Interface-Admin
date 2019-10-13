<?php
/**
 * Created by PhpStorm.
 * User: Massimo
 * Date: 2019-09-29
 * Time: 3:12 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public const ACTIVITY = ['Actif', 'En Inscription', 'Inactif', 'Quitté', 'Gradué'];
    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "universal_code",
        "phone",
        "start_semester",
        "program_id",
        "laboratory_id",
        "activity",
        "expectation",
        "preferred_communication_method_id"
    ];

    public function getActivityAttribute()
    {
        return self::ACTIVITY[$this->activity_id];
    }


    /* ------------------------------------------------------------------------------------------------ Relationships */
    public function program()
    {
        return $this->hasOne('App\Models\Program');
    }

    public function laboratory()
    {
        return $this->hasOne('App\Models\Laboratory');
    }

    public function interests()
    {
        return $this->hasMany('App\Models\Interest');
    }

    public function communicationMethod()
    {
        return $this->hasOne('App\Models\CommunicationMethod', "preferred_communication_method_id", 'id');
    }


    /* ------------------------------------------------------------------------------------------------------- Static */
    public static function getSemesterLetter()
    {
        $month = date('n');
        if ($month >= 9) {
            $semester = "A";
        }
        elseif ($month >= 5) {
            $semester = "É";
        }
        else {
            $semester = "H";
        }

        return $semester;
    }
}
