<x-app-layout>
    @if (session()->has('message'))
        <h1 class="text-white ">{{session()->post('message')}}</h1>
        
    @endif 
    
    <table class="table-fixed text-white w-full">
        <thead class="border-b">
            <tr>
                <th>
                    Nome
                </th>
                <th>
                    Tempo
                </th>
            
                <th>
                    Preço
                </th>
                <th>
                    Ações
                </th>                
            </tr>
        </thead>
        <tbody>
            
            @foreach ($servico as $servicos)
                <tr class="text-center   hover:bg-gray-300 hover:text-black ">
                    <td >
                        {{$servicos->nome}}
                    </td>
                    <td>
                        {{$servicos->tempo}} min
                    </td>
                    <td>
                        {{$servicos->preco}}
                    </td>
                    <td class="grid grid-cols-2 gap-4">
                        <a class=" border rounded-md" href="{{route('servicos.edit',['servico' => $servicos->id])}}">
                            edit
                        </a>
                        <a  class=" border rounded-md" href="{{route('servicos.show',[$servicos->id])}}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1 class="text-white ms-20">
        <button >
            <a href="{{route('servicos.create')}}">
            criar
            </a>
        </button> 
    </h1>
    
</x-app-layout>

