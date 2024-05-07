<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}

    <div class="text-gray-800 mt-10 lg:mt-44 lg:mb-60 max-w-lg mx-auto lg:ml-40">
        <h1 class="text-3xl lg:text-6xl font-semibold leading-normal text-center lg:text-left">The Siblings <br class="lg:hidden"> Catering Services</h1>
        <p class="text-center lg:text-left lg:mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, in!</p>
        <div class="mt-6 lg:mt-10 text-center lg:text-left">
            <a href="{{route('book-form')}}" class="bg-yellow-200 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:border-yellow-500 hover:bg-yellow-400 duration-300 hover:border border border-t">Get Started</a>
        </div>
    </div>

    <script>
    let lastAlertedAppointments = [];

    // Function to check for returned appointments
    const checkReturnedAppointments = async () => {
        try {
            console.log('Checking for returned appointments...');
            const response = await fetch('/api/returned-appointments');
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const data = await response.json();
            const newAppointments = data.appointments.filter(appointment => !lastAlertedAppointments.includes(appointment.id));

            if (newAppointments.length > 0) {
                console.log('New appointments found:', newAppointments);
                // Notify the user about new returned appointments
                newAppointments.forEach(appointment => {
                    let alertMessage = `Your appointment with ID ${appointment.id} has been returned.`;
                    if (appointment.reason_for_return) {
                        alertMessage += ` Reason: ${appointment.reason_for_return}`;
                    }
                    console.log('Showing alert:', alertMessage);
                    alert(alertMessage);
                });

                // Update lastAlertedAppointments with the new appointment IDs
                lastAlertedAppointments = lastAlertedAppointments.concat(newAppointments.map(appointment => appointment.id));
            } else {
                console.log('No new appointments found.');
            }
        } catch (error) {
            console.error('There was a problem with the fetch operation:', error);
        }
    };

    // Call the function initially and then every 5 seconds
    checkReturnedAppointments(); // Call immediately
    setInterval(checkReturnedAppointments, 5000); // Call every 5 seconds
</script>

</x-app-layout>
