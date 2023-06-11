<!-- c -->
<div>
    <div class="flex flex-row bg-smokeywhite">
        <div class="flex">
            <x-nav-bar />
            <!--  -->
        </div>

        <div
            class="lg:ml-x sm:ml-xsm md:ml-xmd ml-xsm flex-col w-full h-screen items-center flex bg-smokeywhite dark:bg-gray-800">
            <x-topbar />
            <!-- main content goes here -->

            <div class="flex p-7 w-full h-screen justify-center items-center">
                <div
                    class="flex flex-col justify-center w-full h-full pb-8 pt-4 my-8 bg-white dark:bg-gray-700 shadow shadow-black rounded-lg">
                    <div class="flex flex-row justify-between">
                        <button onclick="Livewire.emit('openModal', 'add-schedule')"
                            class="btn btn-success btn-sm flex justify-center items-center bg-blue-700 dark:bg-blue-700 hover:bg-blue-600 border ml-14 mt-8 rounded-md border-blue-700 w-32 h-10"
                            id="addfaculty" title="Add New Faculty">
                            <span class="text-lg text-white !important">Add Schedule</span>
                        </button>
                        <!-- date filter -->
                        <div class="flex text-gray-600 ml-8 mt-8 mr-12 space-x-3">
                            <input
                                class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none"
                                type="date" id="startDateInput" name="startDate" placeholder="Start Date">
                            <input
                                class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none"
                                type="date" id="endDateInput" name="endDate" placeholder="End Date">
                            <div class="flex">
                                <button type="button" id="clearButton"
                                    class=" bg-gray-500 text-white px-4 py-2 rounded-l">Clear</button>
                                <button type="button" id="filterButton"
                                    class=" bg-blue-500 text-white px-4 py-2 rounded-r">Filter</button>
                            </div>
                        </div>
                        <!--date  -->
                        <div class="flex text-gray-600 ml-8 mt-8 mr-12">
                            <input
                                class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none"
                                type="search" name="search" placeholder="Search" id="searchInput">
                            <button type="submit" class="absolute right-0 top-0 mt-3"></button>
                        </div>
                    </div>
                    <div class="row dark:bg-gray-700 bg-white shadow shadow-black w-11/12 h-full rounded-lg overflow-x-auto ml-14 mt-10">
                        <div class="table-responsive flex justify-center items-center">
                            <table id="tableko" class="w-full rounded-lg border-spacing-3 p-10 font-medium">
                                <thead class="sticky top-0">
                                    <tr class="h-12 bg-gray-700">
                                        <th class="">#</th>
                                        <th class="">Title</th>
                                        <th class="">Date</th>
                                        <th class="">Start Time</th>
                                        <th class="">End Time</th>
                                        <th class="">Laboratory</th>
                                        <th class="">School Year</th>
                                        <th class="">Recurrence</th>
                                        <th class="">Recurrence Value</th>
                                        <th class="">Semester</th>
                                        <th class="">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($schedules as $sch)
                                    <tr class="h-12">
                                        <td class="text-center invisible sm:invisible md:visible lg:visible">
                                            {{ $loop->iteration }}</td>
                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->title }}</td>
                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->date }}</td>
                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->start_time }}</td>
                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->end_time }}</td>

                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->laboratory }}</td>
                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->school_year }}</td>

                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->recurrence }}</td>
                                        <td
                                            class="text-center -text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->recurrence_value }}</td>
                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                            {{ $sch->semester }}</td>

                                        <td
                                            class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">

                           <button onclick="Livewire.emit('openModal', 'add-schedule')"
                               class="btn btn-success btn-sm flex justify-center items-center bg-blue-700 dark:bg-blue-700 hover:bg-blue-600 border ml-14 mt-8 rounded-md border-blue-700 w-32 h-10"
                               id="addfaculty" title="Add New Faculty">
                               <span class="text-lg text-white !important">Add Schedule</span>
                           </button>
                           <!-- date filter -->
                           <div class="flex text-gray-600 ml-8 mt-8 mr-12 space-x-3">
                               <input
                                   class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none"
                                   type="date" id="startDateInput" name="startDate" placeholder="Start Date">
                               <input
                                   class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none"
                                   type="date" id="endDateInput" name="endDate" placeholder="End Date">
                               <div class="flex ">
                                   <button type="button" id="clearButton"
                                       class=" bg-gray-500 text-white px-4 py-2 rounded-l">Clear</button>
                                   <button type="button" id="filterButton"
                                       class=" bg-blue-500 text-white px-4 py-2 rounded-r">Filter</button>
                               </div>
                           </div>
                           <!--date  -->
                           <div class="flex text-gray-600 ml-8 mt-8 mr-12">
                               <input
                                   class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none"
                                   type="search" name="search" placeholder="Search" id="searchInput">
                               <button type="submit" class="absolute right-0 top-0 mt-3"></button>
                           </div>
                       </div>
                       <div
                           class="row dark:bg-gray-700 bg-white shadow shadow-black w-11/12 h-full rounded-lg overflow-x-auto ml-14 mt-10">
                           <div class="table-responsive flex justify-center items-center">
                               <table id="tableko" class="w-full rounded-lg border-spacing-3 p-10 font-medium">
                                   <thead class="sticky top-0">
                                       <tr class="h-12 bg-gray-700">
                                           <th class="">#</th>
                                           <th class="">Title</th>
                                           <th class="">Date</th>
                                           <th class="">Start Time</th>
                                           <th class="">End Time</th>
                                           <th class="">Laboratory</th>
                                           <th class="">School Year</th>
                                           <th class="">Recurrence</th>
                                           <th class="">Recurrence Value</th>
                                           <th class="">Semester</th>
                                           <th class="">Action</th>
                                       </tr>
                                   </thead>
                                   <tbody class="">
                                       @foreach ($schedules as $sch)
                                           <tr class="h-12">
                                               <td class="text-center invisible sm:invisible md:visible lg:visible">
                                                   {{ $loop->iteration }}</td>
                                               <td
                                                   class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['title'] }}</td>
                                               <td
                                                   class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['date'] }}</td>
                                               <td
                                                   class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['start_time'] }}</td>
                                               <td
                                                   class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['end_time'] }}</td>

                                               <td
                                                   class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['laboratory'] }}</td>
                                               <td
                                                   class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['school_year'] }}</td>

                                               <td
                                                   class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['recurrence'] }}</td>
                                               <td
                                                   class="text-center -text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['recurrence_value'] }}</td>
                                               <td
                                                   class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                   {{ $sch['semester'] }}</td>

 

                                                   <button
                                                       onclick="Livewire.emit('openModal', 'edit-schedule', { scheduleId: {{ $sch['id'] }}}) "
                                                       class="btn btn-primary btn-sm">
                                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>|
                                                   </button>

                                                   <button
                                                       onclick="Livewire.emit('openModal', 'delete-schedule', { scheduleId: {{ $sch['id'] }}}) "
                                                       class="btn btn-primary btn-sm">
                                                       <i class="fa fa-trash-o" aria-hidden="true"></i>|
                                                   </button>
                                               </td>
                                           </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                           </div>

   