<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quoteRequestData)
    {
        $this->quoteRequestData = $quoteRequestData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if(!empty($this->quoteRequestData['model_attachment'])){
            return $this
                ->subject('Quote Request')
                ->markdown('email.quote_request_mail', ['quoteRequestData' => $this->quoteRequestData])
                ->attach($this->quoteRequestData['model_attachment']->getRealPath(), [
                    'as' => $this->quoteRequestData['model_attachment']->getClientOriginalName()
                ]);
        }else{
            return $this
                ->subject('Quote Request')
                ->markdown('email.quote_request_mail', ['quoteRequestData' => $this->quoteRequestData]);
        }
        
    }
}
