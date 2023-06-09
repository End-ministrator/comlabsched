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
                                <div class="flex ">
                                    <button type="button" id="clearButton" class=" bg-gray-500 text-white px-4 py-2 rounded-l">Clear</button>
                                    <button type="button" id="filterButton" class=" bg-blue-500 text-white px-4 py-2 rounded-r">Filter</button>
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
                                            <th class="">Start Time</th>
                                            <th class="">End Time</th>
                                            <th class="">Laboratory</th>
                                            <th class="">School Year</th>
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
                                                    {{ $sch->semester }}</td>

                                                <td
                                                    class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">




                                                    <button
                                                    onclick="Livewire.emit('openModal', 'edit-schedule', { scheduleId: {{ $sch->id }}}) "
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>|
                                                </button>

                                                <button
                                                    onclick="Livewire.emit('openModal', 'delete-schedule', { scheduleId: {{ $sch->id }}}) "
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>|
                                                </button>


                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- main content ends here -->
            </div>
        </div>
<script>
// search bar
document.addEventListener("DOMContentLoaded", function() {
        var searchInput = document.getElementById('searchInput');
        var dataTable = document.getElementById('tableko');

        searchInput.addEventListener('input', filterTable);

        function filterTable() {
            var filterValue = searchInput.value.toLowerCase();
            var rows = dataTable.getElementsByTagName('tr');

            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                var titleCell = row.cells[1]; // Adjust the index to match the "Title" column

                var title = titleCell.innerText.toLowerCase();
                if (title.includes(filterValue)) {
                    row.style.display = ""; // Display the row if the title matches the search input
                } else {
                    row.style.display = "none"; // Hide the row if the title does not match
                }
            }
        }
    });

            // table colors
            // Add alternating row colors to the table
            const table = document.getElementById('tableko');
            const rows = table.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                if (i % 2 === 0) {
                    rows[i].classList.add('dark:bg-blue-800', 'bg-blue-500');
                } else {
                    rows[i].classList.add('dark:bg-blue-700', 'bg-blue-400');
                }
            }

    // Date Range Filter
    document.addEventListener("DOMContentLoaded", function() {
    var startDateInput = document.getElementById('startDateInput');
    var endDateInput = document.getElementById('endDateInput');
    var filterButton = document.getElementById('filterButton');
    var clearButton = document.getElementById('clearButton');
    var dataTable = document.getElementById('tableko');

    filterButton.addEventListener('click', applyDateFilter);
    clearButton.addEventListener('click', clearDateFilter);

    function applyDateFilter() {
        var startDate = new Date(startDateInput.value);
        var endDate = new Date(endDateInput.value);

        var rows = dataTable.getElementsByTagName('tr');
        for (var i = 1; i < rows.length; i++) {
            var row = rows[i];
            var dateCell = row.cells[2]; // Adjust the index to match the "Start Time" column

            var rowDate = new Date(dateCell.innerText);
            if (rowDate >= startDate && rowDate <= endDate) {
                row.style.display = ""; // Display the row if it falls within the selected date range
            } else {
                row.style.display = "none"; // Hide the row if it falls outside the selected date range
            }
        }
    }

    function clearDateFilter() {
        startDateInput.value = "";
        endDateInput.value = "";

        var rows = dataTable.getElementsByTagName('tr');
        for (var i = 1; i < rows.length; i++) {
            rows[i].style.display = ""; // Display all rows
        }
    }
});


            // nav style
            ds.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            us.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            lg.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            mn.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            sc.classList.add('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            st.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-900');
   

</script>