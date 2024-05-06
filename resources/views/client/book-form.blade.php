<x-app-layout>
    <!-- component -->
    <form action="/appointment" method="POST">
        @csrf
    <div class="min-h-screen p-6 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-white rounded shadow-lg shadow-yellow-100 p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Personal and Event Details</p>
                                <p>Please fill out all the fields.</p>
                            </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-2">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" id="age" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="address">Address / Street</label>
                                    <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="city">City</label>
                                    {{-- <input type="text" name="city" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" /> --}}
                                    <select name="city" id="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1">
                                        <option value="San Carlos City">San Carlos City</option>
                                        <option value="Calasiao">Calasiao</option>
                                        <option value="Dagupan City">Dagupan City</option>
                                        <option value="Sta. Barbara">Sta. Barbara</option>
                                        <option value="Lingayen">Lingayen</option>
                                        <option value="Basista">Basista</option>
                                        <option value="Bayambang">Bayambang</option>
                                        <option value="Mangatarem">Mangatarem</option>
                                        <option value="Urbiztondo">Urbiztondo</option>
                                        <option value="Aguilar">Aguilar</option>
                                        <option value="Bugallon">Bugallon</option>
                                        <option value="Mangaldan">Mangaldan</option>
                                        <option value="Mapandan">Mapandan</option>
                                        <option value="Manaoag">Manaoag</option>
                                        <option value="San Fabian">San Fabian</option>
                                        <option value="Urdaneta City">Urdaneta City</option>
                                        <option value="Villasis">Villasis</option>
                                        <option value="Malasiqui">Malasiqui</option>
                                        <option disabled selected></option>
                                    </select>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="firstname">Event Locaton</label>
                                    <input type="text" name="location" id="location" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="lastname">Event Date</label>
                                    <input type="date" name="date" id="date" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" />
                                </div>
                                <script>
                                    var today = new Date();
                                    var minDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 9);
                                    var minDateString = minDate.toISOString().split('T')[0];
                                    document.getElementById("date").setAttribute('min', minDateString);
                                </script>

                                <div class="md:col-span-1">
                                    <label for="age">Event Time</label>
                                    {{-- <input type="time" name="time" id="time" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" /> --}}
                                    <select name="time" id="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1">
                                        <option value="8:00 am">8:00 am</option>
                                        <option value="8:30 am">8:30 am</option>
                                        <option value="9:00 am">9:00 am</option>
                                        <option value="9:30 am">9:30 am</option>
                                        <option value="10:00 am">10:00 am</option>
                                        <option value="10:30 am">10:30 am</option>
                                        <option value="11:00 am">11:00 am</option>
                                        <option value="11:30 am">11:30 am</option>
                                        <option value="12:00 pm">12:00 pm</option>
                                        <option value="12:30 pm">12:30 pm</option>
                                        <option value="1:00 pm">1:00 pm</option>
                                        <option value="1:30 pm">1:30 pm</option>
                                        <option value="2:00 pm">2:00 pm</option>
                                        <option value="2:30 pm">2:30 pm</option>
                                        <option value="3:00 pm">3:00 pm</option>
                                        <option value="3:30 pm">3:30 pm</option>
                                        <option value="4:00 pm">4:00 pm</option>
                                        <option value="4:30 pm">4:30 pm</option>
                                        <option value="5:00 pm">5:00 pm</option>
                                        <option value="5:30 pm">5:30 pm</option>
                                        <option value="6:00 pm">6:00 pm</option>
                                        <option value="6:30 pm">6:30 pm</option>
                                        <option value="7:00 pm">7:00 pm</option>
                                        <option value="7:30 pm">7:30 pm</option>
                                        <option disabled selected></option>
                                    </select>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="email">Event Type</label>
                                    {{-- <input type="text" name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" /> --}}
                                    <select name="type" id="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1">
                                        <option value="1st Birthday">1st Birthday</option>
                                        <option value="18th Birthday">18th Birthday</option>
                                        <option value="60th Birthday">60th Birthday</option>
                                        <option value="Christening">Christening</option>
                                        <option value="Christening/1st Birthday">Christening/1st Birthday</option>
                                        <option value="Intimate Wedding">Intimate Wedding</option>
                                        <option disabled selected></option>
                                    </select>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="address">Theme</label>
                                    {{-- <input type="text" name="theme" id="theme" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" /> --}}
                                    <select name="theme" id="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1">
                                        <optgroup label="Male">
                                            <option value="Avengers">Avengers</option>
                                            <option value="Jungle">Jungle</option>
                                            <option value="Roblox">Roblox</option>
                                            <option value="Blue and White">Blue and White</option>
                                        </optgroup>
                                        <optgroup label="Female">
                                            <option value="Disney Princess">Disney Princess</option>
                                            <option value="Princess">Princess</option>
                                            <option value="Butterfly">Butterfly</option>
                                            <option value="Boho">Boho</option>
                                            <option disabled selected></option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="city">Package</label>
                                    {{-- <input type="text" name="package" id="package" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1" value="" /> --}}
                                    <select name="package" id="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:border-yellow-500 focus:ring-yellow-500 focus:ring-1">
                                        <option value="Styling">Styling</option>
                                        <option value="Basic">Basic</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinum">Platinum</option>
                                        <option value="Diamond">Diamond</option>
                                        <option value="Sapphire">Sapphire</option>
                                        <option disabled selected></option>
                                    </select>
                                </div>

                                <div class="md:col-span-5 text-right">
                                    <input type="submit" name="submit" value="Submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</x-app-layout>
