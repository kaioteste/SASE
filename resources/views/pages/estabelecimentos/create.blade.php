<x-app-layout>

    @isset($enderecos)
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Adicione um endereço!</strong>
            <span class="block sm:inline">Não há nenhum endereço cadastrado, cadastre clicando <a href="{{ route('enderecos.create') }}" class="underline" >aqui</a></span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            </span>
        </div>
    @endisset

    <div id="FormWrap" class="grid h-screen place-items-center">

        <form action="{{ route('estabelecimentos.store') }}" method="post" class="w-full max-w-sm">
            @csrf

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                    Nome
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" name="name" type="text" value="">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="descr">
                    Descrição
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="descr" name="descr" type="text" value="">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="phone">
                    Telefone
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="phone" name="phone" type="text" value="">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                    E-mail
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="email" name="email" type="email" value="">
                </div>
            </div>
            <div>
                <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="endereco">

                </label>
                </div>
                <div class="md:w-2/3">
                <select name="endereco_id" id="endereco_id" class="form-control">
                    @foreach ($enderecos as $endereco)
                        <option value="{{ $endereco->id }}">{{ $endereco->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Confirmar
                </button>
                <a href={{ route('estabelecimentos.index') }} >
                        <button type="button" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Cancelar</button>
                </a>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>
