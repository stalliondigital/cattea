<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Portfolio Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                Creation page
                {{-- <div class="bg-white shadow-xl p-20 rounded-2xl">
                    <h2 class="text-lg font-bold mb-10">Welcome {{ Auth::user()->name }}</h2>
                    <a class="p-3 ml-0 bg-gray-900 m-4 text-white rounded-lg"
                        href="{{ route('portfolio.create') }}">Add
                        Portfolio
                        Item</a>
                </div> --}}

            </div>
        </div>
    </div>
</x-app-layout>
