<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use DB;
use PDF;

class HotelBookinInvoiceEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $title;
    public $body;
    public $pdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title,$body,$pdf)
    {
        $this->title=$title;
        $this->body=$body;
        $this->pdf=$pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_email='info@puriurbanruralcoop.com';
        return $this->from($from_email)
                    ->subject('Cloud Travel - Login Details and Invoice')
                    ->view('emails.hotel.register-invoice')
                    ->attachData($this->pdf->output(), 'invoice.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
