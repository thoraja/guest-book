<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Guest') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto sm:max-w-xl px-2 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('guest.store') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="firstname" :value="__('First Name')" />
                            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="lastname" :value="__('Last Name')" />
                            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autocomplete="lastname" />
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="organization" :value="__('Organization')" />
                            <x-text-input id="organization" class="block mt-1 w-full" type="text" name="organization" :value="old('firstname')" required autocomplete="firstname" />
                            <x-input-error :messages="$errors->get('organization')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-area id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address"></x-text-area>
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="province" :value="__('Province')" />
                            <select id="province" name="province" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required autocomplete="off">
                                <option value="" disabled selected>== Select Province ==</option>
                                @foreach ($provinces as $province)
                                <option value="{{ $province['nama'] }}">{{ $province['nama'] }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('province')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="city" :value="__('City')" />
                                <select id="city" name="city" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required autocomplete="off">
                                    <option value="" disabled selected>== Select City ==</option>
                                    @foreach ($cities as $city)
                                    <option value="{{ $city['nama'] }}">{{ $city['nama'] }}</option>
                                    @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <div class="pt-6">
                            <x-primary-button>
                                Save
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
