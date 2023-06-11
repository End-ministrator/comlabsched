

@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')
<div class="flex flex-row">

    <div class=" flex">
                @if(auth()->user()->role == 'Admin')
                <script>const flag = 1;</script>
                <x-nav-bar/>
                @endif
                @if(auth()->user()->role == 'Faculty')
                <script>const flag = 2;</script>
                <x-nav-bar-user/>
                @endif
    </div>

    <div class=" lg:ml-x sm:ml-xsm  md:ml-xsm ml-xsm  flex-col w-full ">
            <x-topbar/>
            <!-- main content goes here -->
            <div class="flex px-7 py-7 w-full h-full bg-smokeywhite dark:bg-gray-800">
                <div class="flex w-full h-full bg-white dark:bg-gray-700 rounded-lg text-black !important">
                    <livewire:monitoring-calendar year="2023" month="12" />
                </div>
            </div>
    </div>

</div>

<script>



// Check the user's role and show/hide the button accordingly
if (flag === 1) {
        ds.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        us.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        lg.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        mn.classList.add('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        sc.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        st.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');

   
} else {
        ds.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        lg.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        mn.classList.add('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        st.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');

}

        
 


</script>





@endsection



   


