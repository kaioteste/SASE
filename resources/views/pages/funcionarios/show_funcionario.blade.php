<x-app-layout>
    <div class="text-white text-center">
        <h1>
            Serviços - {{$funcionario->nome}}
        </h1>
        
        
        <form action="{{route('funcionarios.destroy', ['funcionario' =>$funcionario->id])}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button type="submit" class="border">
                deletar
            </button>
            
            
        </form>
    </div>
</x-app-layout>