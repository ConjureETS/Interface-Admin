<?php
/**
 * Created by PhpStorm.
 * User: Massimo
 * Date: 2019-10-12
 * Time: 9:24 PM
 */

namespace App\Mail;

use App\Models\LaboratoryType;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class InscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    private $member;

    public function __construct($member)
    {
        $this->member = $member;
    }

    public function build()
    {
        $laboratories = LaboratoryType::inscription()->get();
        return $this->from('conjure@etsmtl.ca')
            ->view('mails.inscription')
            ->with(
                [
                    "member" => $this->member,
                    "laboratories" => $laboratories
                ]);
    }
}
