<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use DB;

class HotelBookinInvoiceEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user_name;
    public $remarks;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name,$remarks)
    {
        $this->user_name=$user_name;
        $this->remarks=$remarks;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_email=DB::table('md_params')->where('sl_no','6')->value('param_value');
        return $this->from($from_email)
                    ->subject('SCM - Account Play')
                    ->view('emails.account-play');
    }
}
