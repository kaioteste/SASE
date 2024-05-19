<x-app-layout>
<div class="text-2xl bg-[#272727] text-white h-16 flex items-center px-5 ">
        Funcionarios
    </div>

    @if (session()->has('message'))

    <div class="flex justify-center">
        <h1 class=" flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-300 dark:text-green-800 dark:border-green-800 w-96 mt-5" role="alert">{{session()->get('message')}}</h1>
        
    </div>

    @endif

    <div class="flex items-center justify-center rounded-lg ">
        <table class="w-[90rem] sm:rounded-lg mt-5 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 text-center border border-gray-700 shadow-2xl">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100   ">
                <tr>
                    <th scope="col" class="px-3 py-3 ">
                        Nome do serviço
                    </th>

                    <th scope="col" class="px-3 py-3">
                        
                    função
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionario as $funcionarios)
                <tr class="odd:bg-white odd:dark:bg-gray-300 even:bg-gray-50  border-b dark:border-gray-700">
                    <th scope="row" class="px-3   py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{$funcionarios->nome}}
                    </th>
                    <th scope="row" class="px-3   py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{$funcionarios->funcao}}
                    </th>
                    <td class="px-6 py-4">
                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline " href="{{route('funcionarios.edit',['funcionario' => $funcionarios->id])}}">
                            edit
                        </a>
                        |
                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{route('funcionarios.show',[$funcionarios->id])}}">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button class=" hover:bg-[#CDD7E2] text-white bg-[#272727] m-5 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 ">
        <a href="{{route('funcionarios.create')}}">
            criar
        </a>
    </button>



</x-app-layout>