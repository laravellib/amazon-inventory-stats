<?php

namespace App\Console\Commands;

use App\Jobs\Amazon\RequestReportJob;
use App\User;
use Illuminate\Console\Command;

class RequestReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mws:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Request Report';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct ()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle ()
    {
//        $users = User::with([
//            'marketplaces' => function ($query) {
////                $query->wherePivot('')
//            },
//        ])->get();

//        dd($users);

        dispatch(
            new RequestReportJob( User::first(), 2)
        );

    }
}
