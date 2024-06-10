<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="min-w-full align-middle">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>

                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left">
                                        <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nome</span>
                                    </th>
                                </tr>

                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">

                                @foreach($enderecos as $endereco)
                                    <tr class="bg-white
                                    ">
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $endereco->name }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            <a href="{{ route('enderecos.show', ['endereco' => $endereco->id]) }}">
                                                <button>Ver Detalhes</button>
                                            </a>
                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class=" fixed bottom-5 left-5 hover:bg-[#96ACC2] text-white bg-[#272727] m-5 font-medium rounded-full text-xl w-14 h-14 text-center me-2 mb-2 ">
        <a href={{ route('enderecos.create') }}>
            +
        </a>
    </button>
</x-app-layout>
