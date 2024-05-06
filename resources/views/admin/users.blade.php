<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg lg:mx-10 lg:my-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">User Type</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->name }}</th>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">{{ $user->usertype }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('usertype.edit', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">Edit</a>
                        <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Deactivate</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No users found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        var msg='{{Session::get('alert')}}';
        var exist='{{Session::has('alert')}}';

        if(exist)
        {
            alert(msg);
        }
    </script>

    
</x-app-layout>