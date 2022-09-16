<?php

namespace App\Console\Commands;

use App\Jobs\envioEmailTeste;
use Illuminate\Console\Command;
use stdClass;

class CommandSendEmailTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:emailTest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviado email de forma agendada';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = new stdClass();
        $user->name = 'Joallisson';
        $user->email = 'joallisson.ti@gmail.com';
        
        envioEmailTeste::dispatch($user)->delay(now()->addSeconds('10'));
    }
}
