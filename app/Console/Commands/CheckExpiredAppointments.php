<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Appointment;
use Carbon\Carbon;

// class CheckExpiredAppointments extends Command
// {
//     /**
//      * The name and signature of the console command.
//      *
//      * @var string
//      */
//     protected $signature = 'app:check-expired-appointments';

//     /**
//      * The console command description.
//      *
//      * @var string
//      */
//     protected $description = 'Command description';

//     /**
//      * Execute the console command.
//      */
//     public function handle()
//     {
//         //
//     }
// }

class CheckExpiredRequests extends Command
{
    protected $signature = 'appointments:check-expired';
    protected $description = 'Check for appointment requests that are pending for over 24 hours and mark them as expired.';

    public function handle()
    {
        $expiredRequests = AppointmentRequest::where('status', 'pending')
            ->where('created_at', '<', Carbon::now()->subHours(24))
            ->get();

        foreach ($expiredRequests as $request) {
            $request->status = 'expired';
            $request->save();
        }

        $this->info('Expired appointment requests checked successfully.');
    }
}