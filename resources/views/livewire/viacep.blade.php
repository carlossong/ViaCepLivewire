<div class="p-4">

    <div>
        @if (session()->has('message'))
        <div role="alert">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
              {{'Ooops'}}
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
              <p>{{ session('message') }}</p>
            </div>
        @endif
    </div>

    <div>
        <x-jet-label for="cep" value="{{ __('Cep') }}" />
        <x-jet-input wire:change='getCep($event.target.value)' id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" />
    </div>

    <div class="mt-4">
        <x-jet-label for="logradouro" value="{{ __('Rua') }}" />
        <x-jet-input wire:model='logradouro' id="logradouro" class="block mt-1 w-full" type="text" name="logradouro" :value="old('logradouro')" required />
    </div>

    <div class="mt-4">
        <x-jet-label for="complemento" value="{{ __('Complemento') }}" />
        <x-jet-input wire:model='complemento' id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" required />
    </div>

    <div class="mt-4">
        <x-jet-label for="bairro" value="{{ __('Bairro') }}" />
        <x-jet-input wire:model='bairro' id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required />
    </div>

    <div class="mt-4">
        <x-jet-label for="localidade" value="{{ __('Cidade') }}" />
        <x-jet-input wire:model='localidade' id="localidade" class="block mt-1 w-full" type="text" name="localidade" :value="old('localidade')" required />
    </div>

    <div class="mt-4">
        <x-jet-label for="uf" value="{{ __('Estado') }}" />
        <x-jet-input wire:model='uf' id="uf" class="block mt-1 w-full" type="text" name="uf" :value="old('uf')" required />
    </div>


</div>
