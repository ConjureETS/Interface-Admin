<?php
/**
 * Created by PhpStorm.
 * User: Massimo
 * Date: 2019-10-12
 * Time: 9:17 PM
 */

namespace App\Http\Controllers;

use App\Mail\InscriptionMail;
use App\Models\LaboratoryType;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendInscriptionMail($member)
    {
        $laboratories = LaboratoryType::inscription()->get();
        Mail::to($member->email)->send(new InscriptionMail($member, $laboratories));
    }
}
