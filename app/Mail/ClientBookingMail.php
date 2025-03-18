<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;

class ClientBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from = Config::get("mail.from.address");
        $app_name = Config::get("app.name");
        return $this->from($from, __("mail.description_2"))
        ->view('emails.booked_v2')
            ->subject(__('mail.booking_request').' - '.$app_name)
            ->with([
                'data' => $this->data,
            ]);
    }
}
