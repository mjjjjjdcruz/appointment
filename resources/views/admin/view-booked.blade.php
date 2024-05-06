<x-app-layout>



    
    <div class="flex justify-center items-center lg:h-screen uppercase">
        <div class="bg-gray-700 text-gray-100 flex flex-col lg:flex-row lg:w-2/3 md:w-full sm:w-full justify-between px-10 py-10 lg:py-10 rounded-2xl">
            {{-- personal --}}
            <div class="bg-gray-500 py-5 px-5 lg:flex-1 rounded-lg">
                <h2 class="text-4xl uppercase my-5 font-bold">{{$appointment->firstname. ' '. $appointment->lastname}}</h2>
                <h4 class="text-xl my-5 font-extrabold"><span class="font-normal mr-2">Age: </span>{{$appointment->age}}</h4>
                <h4 class="text-xl my-5 font-extrabold"><span class="font-normal mr-2">Phone Number: </span>{{$appointment->phone}}</h4>
                <h4 class="text-xl my-5 font-extrabold"><span class="font-normal mr-2">Street/Barangay: </span>{{$appointment->address}}</h4>
                <h4 class="text-xl my-5 font-extrabold"><span class="font-normal mr-2">City: </span>{{$appointment->city}}</h4>
            </div>
            {{-- event --}}
            <div class="py-5 px-5 lg:flex-1 flex justify-between">
                <div>
                    <h2 class="text-4xl uppercase">Date:</h2>
                    <h2 class="text-lg my-5">Time:</h2>
                    <h2 class="text-lg my-5">Location:</h2>
                    <h2 class="text-lg my-5">Event Type:</h2>
                    <h2 class="text-lg my-5">Event Theme:</h2>
                    <h2 class="text-lg my-5">Event Package:</h2>
                </div>
                <div class="text-right">
                    <h2 class="text-4xl uppercase">{{$appointment->date}}</h2>
                    <h4 class="text-lg my-5">{{$appointment->time}}</h4>
                    <h4 class="text-lg my-5">{{$appointment->location}}</h4>
                    <h4 class="text-lg my-5">{{$appointment->type}}</h4>
                    <h4 class="text-lg my-5">{{$appointment->theme}}</h4>
                    <h4 class="text-lg my-5">{{$appointment->package}}</h4>
                    <div>
                        <a href="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-800 cursor-pointer">Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    

</x-app-layout>