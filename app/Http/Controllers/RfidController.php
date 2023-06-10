<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use App\Models\Log;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $tagId = shell_exec("python3 ~/Desktop/comlabsched/app/access_control/access_control.py");
        return trim($tagId);
    }

    private function verifyAccess($tagId)
    {
        $user = $this->retrieveUser($tagId);
        $schedule = $this->retrieveFacultySchedule($user);
        $accessResponse = $this->grantOrDenyAccess($user, $schedule);

        if ($accessResponse['status'] === 'success') {
            // Access granted
            $this->logAccess($tagId, true);
            // Perform any additional actions for granting access
        } else {
            // Access denied or other error
            $this->logAccess($tagId, false);
            // Perform any additional actions for denying access
        }

        return $accessResponse;
    }

    private function retrieveUser($tagId)
    {
        $user = User::where('tag_id', $tagId)->first();
        return $user;
    }

    private function retrieveFacultySchedule($user)
    {
        $currentDateTime = Carbon::now()->setTimezone('Asia/Manila');
        $schedule = Schedule::where('user_id', $user->id)
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
        $log->tag_id = $tagId;
        $log->access_granted = $accessGranted;
        $log->created_at = Carbon::now()->setTimezone('Asia/Manila');
        $log->save();
    }
}
