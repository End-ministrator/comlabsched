@php
    use Carbon\Carbon;
@endphp

<div class="bg-white dark:bg-gray-700 p-5 text-black dark:text-white">
    <h2 class="text-2xl ml-2 font-bold ">Schedule Details</h2>

    <table class="mt-4 w-full">
        <tr>
            <th>Title</th>
            <td>{{ $schedule->title }}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{ Carbon::parse($schedule->date)->format('F d, Y') }}</td>
        </tr>
        <tr>
            <th>Start Time</th>
            <td>{{ Carbon::parse($schedule->start_time)->format('g:i A') }}</td>
        </tr>
        <tr>
            <th>End Time</th>
            <td>{{ Carbon::parse($schedule->end_time)->format('g:i A') }}</td>
        </tr>
        <tr>
            <th>Laboratory</th>
            <td>{{ $schedule->laboratory }}</td>
        </tr>
        <tr>
            <th>School Year</th>
            <td>{{ $schedule->school_year }}</td>
        </tr>
        <tr>
            <th>Semester</th>
            <td>{{ $schedule->semester }}</td>
        </tr>
        <tr>
            <th>Recurrence</th>
            <td>{{ $schedule->recurrence }}</td>
        </tr>
        <tr>
            <th>Recurrence Value</th>
            <td>{{ $schedule->recurrence_value }}</td>
        </tr>
        <tr>
            <th>User</th>
            <td>{{ $schedule->user->firstname }} {{ $schedule->user->lastname }} </td>
        </tr>
    </table>
</div>
