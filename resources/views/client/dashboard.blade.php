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

    @if(isset($alertMessage))
        @push('scripts')
            <script>
                alert("{!! $alertMessage !!}");
            </script>
        @endpush
    @endif
    
    
</x-app-layout>