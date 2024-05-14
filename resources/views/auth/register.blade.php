<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- name_estabelecimento -->
        <div>
            <x-input-label for="name_estabelecimento" :value="__('name_estabelecimento')" />
            <x-text-input id="name_estabelecimento" class="block mt-1 w-full" type="text" name="name_estabelecimento" :value="old('name_estabelecimento')" required autofocus autocomplete="name_estabelecimento" />
            <x-input-error :messages="$errors->get('name_estabelecimento')" class="mt-2" />
        </div>

        {{-- name_dono --}}
        <div>
            <x-input-label for="name_dono" :value="__('name_dono')" />
            <x-text-input id="name_dono" class="block mt-1 w-full" type="text" name="name_dono" :value="old('name_dono')" required autofocus autocomplete="name_donoo" />
            <x-input-error :messages="$errors->get('name_dono')" class="mt-2" />
        </div>

        {{-- telefone --}}
        <div x-data>
            <x-input-label for="telefone" :value="__('telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone"  x-mask="(99)99999-9999" placeholder="(99)99999-9999" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div x-data>
            <!-- cep -->
            <x-input-label for="cep" :value="__('cep')" />
            <x-text-input 
                
                id="cep" 
                class="block mt-1 w-full" 
                type="text" 
                name="cep" 
                :value="old('cep')" 
                required autofocus autocomplete="cep" 
                x-mask="99999-999"
                placeholder="99999-999"/>

            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>


        <div>
            <!-- cidade -->
            <x-input-label for="cidade" :value="__('cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autofocus autocomplete="cidade" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <div>
            <!-- bairro -->
            <x-input-label for="bairro" :value="__('bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autofocus autocomplete="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <div>
            <!-- rua -->
            <x-input-label for="rua" :value="__('rua')" />
            <x-text-input id="rua" class="block mt-1 w-full" type="text" name="rua" :value="old('rua')" required autofocus autocomplete="rua" />
            <x-input-error :messages="$errors->get('rua')" class="mt-2" />
        </div>

        <div>
            <!-- numeroEsbeb -->
            <x-input-label for="numeroEstab" :value="__('numeroEstab')" />
            <x-text-input id="numeroEstab" class="block mt-1 w-full" type="text" name="numeroEstab" :value="old('numeroEstab')" required autofocus autocomplete="numeroEstab" />
            <x-input-error :messages="$errors->get('numeroEstab')" class="mt-2" />
        </div>

        <div>
            <!-- complemento -->
            <x-input-label for="complemento" :value="__('complemento')" />
            <x-text-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" required autofocus autocomplete="complemento" />
            <x-input-error :messages="$errors->get('complemento')" class="mt-2" />
        </div> 

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
