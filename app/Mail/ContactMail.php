<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    protected $content;
    protected $viewStr;

    public function __construct($content, $viewStr = 'to')
    {
        $this->content = $content;
        $this->viewStr = $viewStr;
    }

    public function build()
    {
        return $this->view('contact.emails.'.$this->viewStr)
            ->to($this->content['to'], $this->content['to_name'])
            // ->to($this->content['tel'], $this->content['tel'])
            // ->to($this->content['job'])
            ->from($this->content['from'], $this->content['from_name'])
            ->subject($this->content['subject'],$this->content['sub'])
            ->with([
                'content' => $this->content,
            ]);
    }
}
