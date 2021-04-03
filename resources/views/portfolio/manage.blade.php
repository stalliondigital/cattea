<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-white shadow-xl p-20 rounded-2xl">
                    <a class="transition-colors hover:bg-gray-600 p-3 ml-0 bg-gray-900 m-4 text-white rounded-lg"
                        href="{{ route('portfolio.create') }}">Add
                        Portfolio
                        Item</a>

                    <div class="mt-10">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Title
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Alt Text
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Category
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Actions</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($portfolio as $item)
                                                    <tr>
                                                        {{-- Image --}}
                                                        <td class="px-6 py-4 whitespace-nozwrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-12 w-12">
                                                                    <img class="h-12 w-12 rounded"
                                                                        src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                                                        alt="{{ $item->altText }}">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        {{ $item->title }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        {{-- Alt Text --}}
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">{{ $item->altText }}
                                                            </div>
                                                        </td>
                                                        {{-- Category --}}
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                                {{ $item->category }}
                                                            </span>
                                                        </td>
                                                        {{-- Path --}}
                                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $item->imagePath }}
                                                        </td> --}}
                                                        {{-- Actions --}}
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <form action="{{ route('portfolio.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you would like to delete this image?')"
                                                                    title="delete"
                                                                    class="font-bold text-red-600 hover:text-red-90">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="m-3 p-2">
                                        {{ $portfolio->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
