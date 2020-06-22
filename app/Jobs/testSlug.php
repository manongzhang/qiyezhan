<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class testSlug implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email=null)
    {
            $this->email = $email;
    }
    
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(testSlug $obj)
    {
        $mail = $obj->email;
        file_put_contents("./1.txt", $mail,FILE_APPEND);
    }
}
