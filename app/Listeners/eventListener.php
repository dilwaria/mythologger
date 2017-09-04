<?php

namespace App\Listeners;

use App\Events\eventTrigger;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Redis;

class eventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  eventTrigger  $event
     * @return void
     */
    public function handle(eventTrigger $event)
    {

        $redis  = Redis::connection();
        // print_R($redis);die;
        $t=$redis->subscribe(['anewTestDummy'], function ($message) {
            echo $message;
        });
        $r=$redis->publish('anewTestDummy',json_encode($event));
        var_dump($r,$t);
        file_put_contents('/tmp/evt',var_export($event,true));   
    }
}
