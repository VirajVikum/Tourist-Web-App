<?php

namespace App\Livewire\Contact;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{

    public $name;
    public $email;
    public $message;
    public $success = false;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // Example email (You can customize it later)
        Mail::raw("Message from {$this->name} ({$this->email}):\n\n{$this->message}", function ($mail) {
            $mail->to('adhsulthan@gmail.com')->subject('Contact Form Message');
        });

        $this->reset(['name', 'email', 'message']);
        $this->success = true;
    }
    public function render()
    {
        return view('livewire.contact.index')->layout('welcome');
    }
}
