<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold py-5">{{ __('Создание нового заявления')}}</h2>
    </x-slot>
    
    <form class="mx-auto max-w-2xl p-4 md:p-5 space-y-4 flex flex-col gap-5" method="POST" action="{{route('reports.store')}}">
        @csrf
        <div class="flex flex-col gap-5">
            <!-- Number -->
            <div>
                <x-input-label for="number" :value="__('Номер автомобиля')"/>
                <x-text-input id="number" class="block mt-1" type="text" name="number" required/>
                <x-input-error :messages="$errors->get('number')" class="mt-2" />
                <!-- <input name="number" type="text" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Номер" required /> -->
            </div>
            <!-- Desription -->
            <div>
                <x-input-label for="description" :value="__('Описание')"/>
                <x-textarea id="description" class="block mt-1" rows="10" cols="35" name="description" required/>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                <!-- <textarea name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Описание" required></textarea> -->
            </div>
            <div>
                <x-primary-button class="ms-3">
                    {{__('Создать')}}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>