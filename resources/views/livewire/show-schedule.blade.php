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
                                type="date" id="filterDate" name="filterDate" placeholder="Filter Date">

                            <div class="flex">
                                <button type="button" id="clearButton"
                                    class="bg-gray-500 text-white px-4 py-2 rounded-l">Clear</button>
                                <button type="button" id="filterButton"
                                    class="bg-blue-500 text-white px-4 py-2 rounded-r">Filter</button>
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
                            <table id="tableko"
                                class="w-full text-white !important rounded-lg border-spacing-3 p-10 font-medium">
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
                                            <td
                                                class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                <button
                                                    onclick="Livewire.emit('openModal', 'edit-schedule', { scheduleId: {{ $sch['id'] }}})"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>|
                                                </button>
                                                <button
                                                    onclick="Livewire.emit('openModal', 'delete-schedule', { scheduleId: {{ $sch['id'] }}})"
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
</div>

<script>
    // search bar
    document.addEventListener("DOMContentLoaded", function() {
        var searchInput = document.getElementById('searchInput');
        var dataTable = document.getElementById('tableko');
        var tableBody = dataTable.getElementsByTagName('tbody')[0];
        var noResultsRow = document.createElement('tr');
        var noResultsCell = document.createElement('td');
        noResultsCell.setAttribute('colspan', '8');
        noResultsCell.classList.add('text-center');
        noResultsCell.textContent = 'No Results Found';
        noResultsRow.appendChild(noResultsCell);

        var originalTableHTML = tableBody.innerHTML; // Store the original table HTML

        searchInput.addEventListener('input', filterTable);

        function filterTable() {
            var filterValue = searchInput.value.toLowerCase();
            var rows = tableBody.getElementsByTagName('tr');
            var matchingRowCount = 0;

            if (filterValue.trim() === '') {
                // Search bar is empty, revert to original table
                tableBody.innerHTML = originalTableHTML;
                return;
            }

            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                var rowData = row.textContent.toLowerCase();

                if (rowData.includes(filterValue)) {
                    row.style.display = ''; // Show the row if it matches
                    matchingRowCount++;
                } else {
                    row.style.display = 'none'; // Hide the row if it doesn't match
                }
            }

            if (matchingRowCount === 0) {
                tableBody.innerHTML = ''; // Clear existing rows
                tableBody.appendChild(noResultsRow); // Append the "No Results Found" row
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

    // Date Filter
    document.addEventListener("DOMContentLoaded", function() {
        var filterButton = document.getElementById('filterButton');
        var clearButton = document.getElementById('clearButton');
        var dataTable = document.getElementById('tableko');
        var rows = dataTable.getElementsByTagName('tr');
        var noResultsRow = document.createElement('tr');
        var noResultsCell = document.createElement('td');
        noResultsCell.setAttribute('colspan', '8');
        noResultsCell.classList.add('text-center');
        noResultsCell.textContent = 'No Results Found';
        noResultsRow.appendChild(noResultsCell);

        var originalTableHTML = dataTable.innerHTML; // Store the original table HTML

        filterButton.addEventListener('click', applyDateFilter);
        clearButton.addEventListener('click', clearDateFilter);

        function applyDateFilter() {
            var filterDate = document.getElementById('filterDate').value;

            var matchingRowCount = 0;

            if (filterDate.trim() === '') {
                dataTable.innerHTML = originalTableHTML; // Revert to original table if filter is empty
                return;
            }

            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                var dateCell = row.cells[2]; // Adjust the index to match the "Date" column

                if (dateCell.innerText.trim() === filterDate) {
                    row.style.display = ''; // Show the row if it matches the selected date
                    matchingRowCount++;
                } else {
                    row.style.display = 'none'; // Hide the row if it doesn't match the selected date
                }
            }

            if (matchingRowCount === 0) {
                dataTable.innerHTML = ''; // Clear existing rows
                dataTable.appendChild(noResultsRow); // Append the "No Results Found" row
            }
        }

        function clearDateFilter() {
            document.getElementById('filterDate').value = '';

            for (var i = 1; i < rows.length; i++) {
                rows[i].style.display = ''; // Display all rows
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
