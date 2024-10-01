<?php

namespace App\Console\Commands;



use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class FeedbackSendEmailCommand extends Command
{
 /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:feedback-send-email {email} {phone} {text}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending feedback';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::all()->sort(function ($a, $b) { return strcmp($a->id, $b->id); })->first();

        Mail::send(
            view: 'feedback.feedback',
            data: ['phone' => $this->argument('phone'), 'text' => $this->argument('text')],
            callback: function($message) use($user){
                $message
                    ->to($user->email)
                    ->subject("Сообщение от пользователя")
                    ->from($this->argument('email'));
            }
        );

        $this->line("send successfully");
        

    }
}

