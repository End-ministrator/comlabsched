@extends('layouts.main')
@section('title', 'Access Logs')
@section('content')






<div class="flex flex-row">

    <div class=" flex">
        <x-nav-bar/>
        <!--  -->
    </div>

    <div class=" lg:ml-x sm:ml-xsm  md:ml-xmd ml-xsm  flex-col w-full ">
            <x-topbar/>
            <!-- main content goes here -->
            <div class="flex justify-center items-center h-screen w-full ">
                <div class="w-11/12 h-auto bg-white dark:bg-gray-700 p-4 rounded-md ">
                    <div class="mb-6">
                        <span class="text-3xl">
                            List of Logs
                        </span>
                    </div>
                    <livewire:log-table theme="tailwind"/> 
                    
                </div>

                
  
                <!-- end -->
            </div>
            
                

    
    </div>

</div>

<script>

        ds.classList.remove('dark:bg-blue-800','bg-blue-700','shadow-inner','shadow-blue-700');
        us.classList.remove('dark:bg-blue-800','bg-blue-700','shadow-inner','shadow-blue-700');
        lg.classList.add('dark:bg-blue-800','bg-blue-700','shadow-inner','shadow-blue-700');
        mn.classList.remove('dark:bg-blue-800','bg-blue-700','shadow-inner','shadow-blue-700');
        sc.classList.remove('dark:bg-blue-800','bg-blue-700','shadow-inner','shadow-blue-700');


</script>
@endsection