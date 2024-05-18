<x-app-layout>
    @if (session()->has('message'))
    
        <h1 class=" flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">{{session()->get('message')}}</h1>
    

    @endif







    
    <div class="flex items-center justify-center">
        <table class="w-[90rem] rounded-xl mt-5  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 text-center  border border-gray-700">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-3 py-3 ">
                        Nome do serviço
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Preço do serviço
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Tempo de serviço
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servico as $servicos)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-3   py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$servicos->nome}}
                    </th>
                    <td class="px-6 py-4">
                        {{$servicos->preco}}
                    </td>

                    <td class="px-6 py-4">
                        {{$servicos->tempo}} min
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('servicos.edit',['servico' => $servicos->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        |
                        <a href="{{route('servicos.show',[$servicos->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button class=" hover:bg-[#CDD7E2] text-white bg-[#96ACC2] m-5 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 ">
        <a href="{{route('servicos.create')}}">
            criar
        </a>
    </button>
</x-app-layout>