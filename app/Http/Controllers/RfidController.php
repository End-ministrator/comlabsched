<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RfidController extends Controller
{
    public function startRfidScanning(Request $request)
    {
        $tagId = $this->rfidReader();

        // Pass the tag ID to the access verification process
        $this->verifyAccess($tagId);
    }

    private function verifyAccess($tagId)
    {
        // TODO: Implement the access verification logic here
    }

    private function rfidReader()
    {
        $tagId = shell_exec("python3 /app/access_control/access_control.py");
        // return trim($tagId);
        dd($tagId);
    }
}
