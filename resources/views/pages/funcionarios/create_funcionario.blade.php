<x-app-layout>
    <h1 class="text-white">
        Adicionar funcionarios
    </h1>
    <h2 class="text-white">
    @if (session()->has('message'))
        <h1>{{session()->get('message')}}</h1> 
    @endif    
    </h2> 
    
    <form action="{{route('funcionarios.store')}}" method="POST">
        @csrf
        <input name="nome" placeholder="nome" type="text">
        <input class="text-white" type="submit" value="Criar">
    </form>
    
    
</x-app-layout>