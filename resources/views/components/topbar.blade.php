<nav id="topbar" class="bg-white  dark:bg-gray-700   shadow-black shadow-sm w-full rounded-none h-14"> 
            <!-- <span class="sm:text-red-500 md:text-yellow-500 lg:text-green-500">md</span> -->
            <div class="flex flex-row justify-between"> 
                <a href="#" class="flex items-center space-x-2 ml-1 sm:ml-2 md:ml-3 lg:ml-8 opacity-0 sm:opacity-0 md:opacity-100 lg:opacity-100">
                    <i class="fa-solid fa-cube text-2xl"></i>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LabSched</span>
                </a>
             <!-- search -->
                <!-- <div class="items-center flex relative">
                    <div class="relative rounded-md lg:w-96 md:w-52 sm:w-24 w-24 ">
                        <input class="pl-10 pr-4 py-2 w-full rounded-md  bg-white border border-gray-300 placeholder-gray-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 " type="text" placeholder="Search...">
                        <div class="absolute  left-0 inset-y-3 flex  pl-3">
                            <i class="fa-solid fa-magnifying-glass mr-2"></i>
                        </div>
                    </div>
                </div> -->

                <!-- menu -->

            
                <div>
                    <ul class="flex  flex-row h-full items-center mr-2  ">
                        <li>
                            <button id="themee"class="flex justify-center items-center translate-y-3 lg:translate-y-0 -translate-x-10 sm:-translate-x-6 text-2xl">
                                <i id="sun"class="fa-solid fa-sun absolute"></i>
                                <i id="moon"class="fa-solid fa-moon invisible absolute"></i>
                            </button>
                        </li>
                        <li class="w-12 h-12 mt-2 sm:hidden md:hidden lg:block hidden"><img src=" {{ asset(Auth::user()->image) }} " alt="Profile Picture" class="rounded-full bg-contain bg-no-repeat "> </li>
                        <li class="-inset-y-4 sm:hidden md:hidden lg:block hidden ml-2">Welcome {{Auth::user()->firstname}}</li>
                    </ul>
                </div>
            </div>
            <script>
    const userTheme = localStorage.getItem("theme");
    const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
    // initial Theme check
    const themeCheck = () => {
    if(userTheme === "dark" || (!userTheme && systemTheme)){
        document.documentElement.classList.add('dark');
        return;

    }else {
        document.documentElement.classList.remove('dark');
        return;
    }

    };

    // manual Theme Switch
    const themeSwitch = () => {
    if(document.documentElement.classList.contains("dark")){
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme","light");

        return;
    }
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme","dark");

    }
    themeCheck();
    const theme = document.getElementById('themee');


    const sunIcon = document.getElementById('sun');

    const moonIcon = document.getElementById('moon');

        theme.addEventListener('click', function (){
            if (sunIcon.classList.contains('invisible')) {
                sunIcon.classList.remove('invisible');
                moonIcon.classList.add('invisible');
                themeSwitch();
                
        } else {
                sunIcon.classList.add('invisible');
                moonIcon.classList.remove('invisible');
                themeSwitch();
        }
    }   );

    </script>
                
</nav>