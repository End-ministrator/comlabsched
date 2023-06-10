<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use carbon\carbon;

class RfidController extends Controller
{
    public function startRfidScanning(Request $request)
    {
        $tagId = $this->rfidReader();

        // Pass the tag ID to the access verification process
        $this->verifyAccess($tagId);
    }

    private function rfidReader()
    {
        //dd("hello");
        $tagId = shell_exec("python3 ~/Desktop/comlabsched/app/access_control/access_control.py");
        return trim($tagId);
        //dd($tagId);
    }

    private function verifyAccess($tagId)
    {
<<<<<<< HEAD
        // TODO: Implement the access verification logic here
        $user = $this->retrieveUser($tagId);
        // dd($user);
        // if ($this->isFacultyUser($user)) {
        $schedule = $this->retrieveFacultySchedule($user);

            if ($this->hasCurrentSchedule($schedule)) {
                // Access granted
                return response()->json(['status' => 'success', 'message' => 'Access granted']);
            } else {
                // No schedule for the current time slot
                return response()->json(['status' => 'error', 'message' => 'No schedule for the current time slot']);
            }
        // } else {
        // // User is not a faculty
        // return response()->json(['status' => 'error', 'message' => 'Access denied']);
    // }
=======
        $tagId = shell_exec("python3 /app/access_control/access_control.py");
        //return trim($tagId);
        dd($tagId);
>>>>>>> 516b15ac5e8beba788150697da81424cc9c046ac
    }

    private function retrieveUser($tagId)
{
    // Assuming you have a 'rfid_tag' column in the users table to store the RFID tag ID
    $user = User::where('tag_id', $tagId)->first();
    return $user;
}

private function retrieveFacultySchedule($user)
{

    // $currentDateTime = $user->schedules()->first()->start_time;;
    $currentDateTime = Carbon::now();

    // $schedule = $user->schedules()->whereDate('date', $currentDateTime->toDateString())
    //     ->whereTime('start_time', '<=', $currentDateTime->toTimeString())
    //     ->whereTime('end_time', '>=', $currentDateTime->toTimeString())
    //     ->first();
    $schedule = Schedule::where('user_id', $user->id)
        ->whereDate('date', $currentDateTime->toDateString())
        ->whereTime('start_time', '<=', $currentDateTime->toTimeString())
        ->whereTime('end_time', '>=', $currentDateTime->toTimeString())
        ->first();
    dd($schedule);
    return $schedule;
}

private function hasCurrentSchedule($schedule)
{
    return $schedule !== null;
}

// private function grantOrDenyAccess($user, $hasCurrentSchedule)
// {
//     if ($user && $hasCurrentSchedule) {
//         // Access granted
//         return response()->json(['status' => 'success', 'message' => 'Access granted']);
//     }
//     return response()->json(['status' => 'error', 'message' => 'Access denied']);
// }

}
