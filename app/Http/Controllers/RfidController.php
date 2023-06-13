<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use App\Models\Log;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class RfidController extends Controller
{
    public function startRfidScanning(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tag_id' => 'required|alpha_num', // Adjust the validation rules as per your requirements
        ]);

        if ($validator->fails()) {
            // Return an appropriate response if validation fails
            return response()->json(['status' => 'error', 'message' => 'Invalid tag ID'], 400);
        }

        $tagId = $request->tag_id;

        // Check if the tag ID belongs to any user in the system
        $user = $this->retrieveUser($tagId);
        if (!$user) {
            // Return an appropriate response indicating that the tag ID does not belong to any user
            return response()->json(['status' => 'error', 'message' => 'Invalid tag ID'], 400);
        }

        // Proceed with the access verification process
        $this->verifyAccess($tagId);
    }


    private function retrieveUser($tagId)
    {
        $user = User::where('tag_id', $tagId)->first();
        return $user ? $user : null;
    }

    private function verifyAccess($tagId)
{
    $user = $this->retrieveUser($tagId);

    if ($user === null) {
        return ['status' => 'error', 'message' => 'RFID tag not registered'];
    }

    $schedule = $this->retrieveFacultySchedule($user);
    $accessResponse = $this->grantOrDenyAccess($user, $schedule);

    if ($schedule && $schedule->laboratory === 'lab1') {
        // Access granted for lab1 schedule
        $accessResponse = ['status' => 'success', 'message' => 'Access granted'];
        $this->logAccess($tagId, true);
        // Perform any additional actions for granting access
    } else {
        // Access denied for lab2 or other schedules
        $accessResponse = ['status' => 'error', 'message' => 'Access denied'];
        $this->logAccess($tagId, false);
        // Perform any additional actions for denying access
    }

    return $accessResponse;
}



    private function retrieveFacultySchedule($user)
    {
        $currentDateTime = Carbon::now()->setTimezone('Asia/Manila');
        $schedule = Schedule::where('user_id', $user->id)
            ->where('laboratory', 'lab1')
            ->whereDate('date', $currentDateTime->toDateString())
            ->whereTime('start_time', '<=', $currentDateTime->toTimeString())
            ->whereTime('end_time', '>=', $currentDateTime->toTimeString())
            ->first();
        return $schedule;
    }


    private function grantOrDenyAccess($user, $schedule)
    {
        if ($user && $schedule) {
            // Access granted
            return ['status' => 'success', 'message' => 'Access granted'];
        } else {
            // Access denied or other error
            return ['status' => 'error', 'message' => 'Access denied'];
        }
    }

    private function logAccess($tagId, $accessGranted)
    {
        $log = new Log();
        $log->rfid = $tagId;
        $log->access_granted = $accessGranted;
        $log->created_at = Carbon::now()->setTimezone('Asia/Manila');
        $log->save();
    }
}
