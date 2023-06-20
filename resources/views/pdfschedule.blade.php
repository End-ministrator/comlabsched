<div class="flex p-7 w-full h-screen justify-center items-center">
    <div
        class="flex flex-col justify-center w-full h-full pb-8 pt-4 my-8 bg-white dark:bg-gray-700 shadow shadow-black rounded-lg">
        <h2 class="text-2xl font-bold text-center mb-4">Your Schedule</h2>
        <div
            class="row dark:bg-gray-700 bg-white shadow shadow-black w-11/12 h-full rounded-lg overflow-x-auto ml-14 mt-10">
            <div class="table-responsive flex justify-center items-center">
                <table id="tableko" class="w-full text-white !important rounded-lg border-spacing-3 p-10 font-medium">
                    <thead class="sticky top-0 bg-gray-700">
                        <tr class="h-12">
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Laboratory</th>
                            <th>School Year</th>
                            <th>Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $sch)
                            <tr class="h-12">
                                <td class="text-center invisible sm:invisible md:visible lg:visible">
                                    {{ $loop->iteration }}</td>
                                <td class="text-center overflow-x-visible">{{ $sch->title }}</td>
                                <td class="text-center overflow-x-visible">{{ date('F d, Y', strtotime($sch->date)) }}
                                </td>
                                <td class="text-center overflow-x-visible">
                                    {{ date('h:i A', strtotime($sch->start_time)) }}</td>
                                <td class="text-center overflow-x-visible">
                                    {{ date('h:i A', strtotime($sch->end_time)) }}</td>
                                <td class="text-center overflow-x-visible">{{ $sch->laboratory }}</td>
                                <td class="text-center overflow-x-visible">{{ $sch->school_year }}</td>
                                <td class="text-center overflow-x-visible">{{ $sch->semester }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
