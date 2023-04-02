<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index - Guest Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-table>
                        <x-slot:head>
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Organization
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Provice
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    City
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </x-slot>
                        <x-slot:body>
                            @foreach ($guests as $guest)
                            <tr>
                                <td class="px-6 py-4">
                                    {{ $guest->fullname }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $guest->organization }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $guest->province_code }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $guest->city_code }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('guest.edit', $guest) }}">
                                        <x-primary-button>Edit</x-pimary-button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </x-slot>
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
