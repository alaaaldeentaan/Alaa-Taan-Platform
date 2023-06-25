{{-- @dd('dashboard teacher'); --}}
<x-teacher-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard  Teacher') }}
        </h2>
    </x-slot>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 dark:text-gray-200 leading-tight">
            {{ Auth::guard('teacher')->user()->user_name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Teacher Dashboard</h1>
                    {{ __("You're logged in!") }}<br>
                    {{ __("WELCOME IN Teacher Dashboard") }}
                    
                </div>
            </div>
        </div>
    </div> --}}
    <x-slot name="header">
        <h2 class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
           <pre> {{ __('Dashboard Teacher ') }}                              {{Auth::user()->user_Name}}          </pre>
        </h2>
         <h2 class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
           <pre> {{ __('Your Email Teacher ') }}                             {{Auth::user()->email}}          </pre>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in! seccassafly") }}
                    <br>
                    {{ __("You're Teacher in the site") }}
                </div>
            </div>
        </div>
    </div>
</x-teacher-layout>
