<x-app-layout>


    <div class="text-2xl bg-[#272727] text-white h-16 flex items-center px-5 ">
        Serviços
    </div>

    @if (session()->has('message'))

    <div class="flex justify-center">
        <h1 class=" flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-300 dark:text-green-800 dark:border-green-800 w-96 mt-5" role="alert">{{session()->get('message')}}</h1>

    </div>

    @endif

    <div class="md:grid-cols-2 md:gap-10 md:grid ">
        @foreach($servico as $servicos)
        <div class="flex items-center justify-center px-5">
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg min-w-full shadow md:flex-row md:min-w-full dark:border-gray-700 dark:bg-[#272727] shadow-2xl my-5 ">
                <img class="object-cover w-full rounded-t-lg object-scale-down  h-48 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('img/sase_logo.png')}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$servicos->nome}}</h5>
                    <p class=" dark:text-gray-400 break-all">Descrição</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$servicos->tempo}} Minutos | ${{$servicos->preco}}</p>
                    <div>
                        <a href="{{route('servicos.edit',['servico' => $servicos->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <span class="dark:text-gray-400">|</span>
                        <a href="{{route('servicos.show',[$servicos->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class=" fixed bottom-5 left-5 hover:bg-[#96ACC2] text-white bg-[#272727] m-5 font-medium rounded-full text-xl text-sm w-14 h-14 text-center me-2 mb-2 ">
        <a href="{{route('servicos.create')}}">
            +
        </a>
    </button>
</x-app-layout>
