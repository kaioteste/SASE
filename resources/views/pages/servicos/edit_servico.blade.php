<x-app-layout>
    
    
    @if (session()->has('message'))
    <h1 class="text-white">{{session()->get('message')}}</h1>
    
    @endif
     
   
    

    <form action="{{route('servicos.update' , ['servico' => $servico->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT" >
        <input value="{{$servico->nome}}" name="nome" type="text">
        <input value="{{$servico->tempo}}" name="tempo" min="0" type="number">
        <input value="{{$servico->preco}}" name="preco" min="0" type="number">
        <button type="submit" class="border text-white">atualizar</button>
    </form>
 </x-app-layout>