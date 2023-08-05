<x-landing-layout>

    <div class="flex justify-center my-5">
        <h3 class="font-semibold text-neutral">Button Components</h3>
    </div>
    <div class="flex flex-col items-center justify-center lg:flex-row lg:justify-around mb-10">
        <livewire:components.buttons.submit-button label="Simpan" attributes="disabled"/>
        <livewire:components.buttons.secondary-button label="Secondary"/>
        <livewire:components.buttons.dark-button label="Dark"/>
        <livewire:components.buttons.success-button label="Success"/>
        <livewire:components.buttons.danger-button label="Danger"/>
        <livewire:components.buttons.warning-button label="Warning"/>
        <livewire:components.buttons.alternative-button label="Alternative"/>
    </div>
    <hr>

    <div class="flex justify-center my-5">
        <h3 class="font-semibold text-neutral">Input Form</h3>
    </div>
    <div class="flex flex-col items-center lg:justify-around my-2 xl:flex-row">
        <livewire:components.input-group labelTitle="Nama Lengkap" label="nama" placeholder="Nama" type="text"/>
        <livewire:components.input-group labelTitle="Email Anda" label="email" placeholder="Email.." type="email"/>
        <livewire:components.input-group labelTitle="Tanggal Lahir"
                                         label="tanggal" placeholder="Tanggal lahir.." type="date"/>
        <livewire:components.input-file label="Upload File"/>
    </div>
    <div class="flex flex-col items-center lg:justify-around my-5 xl:flex-row">
        <livewire:components.input-text-area placeholder="Masukan alamat" label="Alamat"/>
    </div>
    <hr>
    <div class="flex flex-col items-center lg:justify-around my-5 xl:flex-row">
        <livewire:components.banner button="Kunjungi" message="Berhasil"/>
    </div>
    <div class="flex justify-center my-5">
        <h3 class="font-semibold text-neutral">Alert</h3>
    </div>
    <div class="flex flex-col items-center lg:justify-around my-5 xl:flex-row">
        <livewire:components.alerts.primary-alert message-alert="Informasi" id-alert="primary"/>
        <livewire:components.alerts.danger-alert message-alert="Peringatan" id-alert="danger"/>
        <livewire:components.alerts.success-alert message-alert="Berhasil" id-alert="success"/>
    </div>
    <div class="flex justify-center my-5">
        <h3 class="font-semibold text-neutral">Toast</h3>
    </div>
    <livewire:components.toast id-toast="ok" toast-message="Pesan sukses"/>


</x-landing-layout>
