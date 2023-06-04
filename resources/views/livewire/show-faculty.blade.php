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


                        <button onclick="Livewire.emit('openModal', 'add-faculty')"
                            class="btn btn-success btn-sm flex justify-center items-center bg-blue-700 dark:bg-blue-700 hover:bg-blue-600 border ml-14 mt-8 rounded-md border-blue-700 w-28 h-10"
                            id="addfaculty" title="Add New Faculty">
                            <span class="text-lg text-white !important">Add Faculty</span>
                        </button>

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
                                        <th class="">Name</th>
                                        <th class="">Email</th>
                                        <th class="">Role</th>
                                        <th class="">Tag Id</th>
                                        <th class="">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($faculties as $faculty)
                                        <tr class="h-12">
                                            <td class="text-center invisible sm:invisible md:visible lg:visible">
                                                {{ $loop->iteration }}</td>
                                            <td
                                                class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                {{ $faculty->firstname . ' ' . $faculty->lastname }}</td>
                                            <td
                                                class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                {{ $faculty->email }}</td>
                                            <td
                                                class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                {{ $faculty->role }}</td>
                                            <td
                                                class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">
                                                {{ $faculty->tag_id }}</td>
                                            <td
                                                class="text-center text-xs sm:text-sm md:text-md lg:text-md overflow-x-visible">




                                                <button
                                                    onclick="Livewire.emit('openModal', 'edit-faculty', { facultyId: {{ $faculty->id }}}) "
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>|
                                                </button>

                                                <button
                                                    onclick="Livewire.emit('openModal', 'delete-faculty', { facultyId: {{ $faculty->id }}}) "
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
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', handleSearch);

            function handleSearch() {
                const searchValue = searchInput.value.toLowerCase();

                // Get all table rows
                const rows = document.querySelectorAll('table tbody tr');

                // Iterate over each row and check if it matches the search query
                rows.forEach(row => {
                    const rowData = row.textContent.toLowerCase();
                    if (rowData.includes(searchValue)) {
                        row.style.display = ''; // Show the row if it matches
                    } else {
                        row.style.display = 'none'; // Hide the row if it doesn't match
                    }
                });
            }

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

            //edit button
            const editFacultyButtons = document.getElementsByClassName('editFacultyButton');
            Array.from(editFacultyButtons).forEach(button => {
                button.addEventListener('click', function() {
                    const facultyId =
                        <?php echo $faculty->id; ?>; // Replace with the appropriate faculty ID
                    openEditFacultyModal(facultyId);
                });
            });

            //delete button
            const deleteFacultyButtons = document.getElementsByClassName('deleteFacultyButton');
            Array.from(deleteFacultyButtons).forEach(button => {
                button.addEventListener('click', function() {
                    const facultyId =
                        <?php echo $faculty->id; ?>; // Replace with the appropriate faculty ID
                    openDeleteFacultyModal(facultyId);
                });
            });

            //add button
            const addFacultyButton = document.getElementById('addFacultyButton');
            addFacultyButton.addEventListener('click', openAddFacultyModal);
        });
    </script>
</div>
