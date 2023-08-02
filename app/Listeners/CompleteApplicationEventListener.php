<?php

namespace App\Listeners;

use App\Events\CompleteApplicationEvent;
use App\Models\Session;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class CompleteApplicationEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    private $exam_number_suffix = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J");

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CompleteApplicationEvent  $event
     * @return void
     */
    public function handle(CompleteApplicationEvent $event)
    {
        //generate exam_number
        $exam_number = $this->generateExamNumber($event->application->id);

        $event->application->exam_number = $exam_number;

        $event->application->update();

        Storage::disk('local')->append('exam_number.txt', "{$exam_number},");
    }


    private function generateExamNumber($applicant_id)
    {
        $session = Session::where("status",1)->first();

        if($session)
        {
            $year = date('y',strtotime($session->session));
        }
        else {
            $year = date('y');
        }

        $rand_keys = array_rand($this->exam_number_suffix, 2);
        return (string) $year.str_pad($applicant_id, 4, '0', STR_PAD_LEFT) . $this->exam_number_suffix[$rand_keys[0]] . $this->exam_number_suffix[$rand_keys[1]];
    }
}
