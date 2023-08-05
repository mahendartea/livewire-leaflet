<x-landing-layout>
    @livewire('components.widget')
    <div class="px-16 h-96 border border-blue-50 my-10 overflow-y-hidden">
        <h3 class="my-5">Peta Provinsi Aceh</h3>
        <x-maps-leaflet class="my-4 w-full mx-auto"
                        :markers="[['lat' => 5.595950, 'long' =>  95.394131]]"
                        :zoomLevel="7"
                        :centerPoint="['lat' => 1.998984, 'long'=> 96.70027405656897]"

        ></x-maps-leaflet>
    </div>
    {{--            <x-maps-leaflet></x-maps-leaflet>--}}
    <livewire:components.buttons.submit-button label="Lihat Peta"/>

</x-landing-layout>
