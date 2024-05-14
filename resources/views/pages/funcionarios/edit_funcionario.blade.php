<x-app-layout>
    
    
    @if (session()->has('message'))
    <h1 class="text-white">{{session()->get('message')}}</h1>
    
    @endif
     
   
    

    <form action="{{route('funcionarios.update' , ['funcionario' => $funcionario->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT" >
        <input value="{{$funcionario->nome}}" name="nome" type="text">
        <button type="submit" class="border text-white">atualizar</button>
    </form>
 </x-app-layout>