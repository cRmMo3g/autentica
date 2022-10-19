<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Mail;
use App\models\Transports;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
class cronFEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:emailf';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
                $datums = Carbon::now()->addDays(1)->toDateString();
                $offers = transports::whereNull('vainosutits')->where('lieto_no', '<=', $datums)->get();
        error_log($offers);
                        foreach ($offers as $u) {
                                $laiks = Carbon::parse($u->lieto_no)->subDays(1);
                                $sutu= $u->epasts;

                                    Mail::send(['html' =>'rezervacija-mail'], array('transports' => $u), function ($message) use ($sutu) {
                                        $message->subject("Rezervācijas info");
                                        $message->to($sutu);});
                                    transports::find($u->id)->update(['vainosutits' => 1 ]);
                                }

                        }

                }


