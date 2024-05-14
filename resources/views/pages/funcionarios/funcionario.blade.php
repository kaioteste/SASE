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
            
                               
            </tr>
        </thead>
        <tbody>
            
            @foreach ($funcionario as $funcionarios)
                <tr class="text-center   hover:bg-gray-300 hover:text-black ">
                    
                    <td >
                        {{$funcionarios->nome}}
                    </td>
                    
                    <td class="grid grid-cols-2 gap-4">
                        <a class=" border rounded-md" href="{{route('funcionarios.edit',['funcionario' => $funcionarios->id])}}">
                            edit
                        </a>
                        <a  class=" border rounded-md" href="{{route('funcionarios.show',[$funcionarios->id])}}">Show</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1 class="text-white ms-20">
        <button >
            <a href="{{route('funcionarios.create')}}">
            criar
            </a>
        </button> 
    </h1>
    
</x-app-layout>



