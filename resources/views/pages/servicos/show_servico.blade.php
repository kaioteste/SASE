<x-app-layout>


    <div class="flex items-center justify-center  shadow-2xl" style="height: 100vh;">
        <form action="{{route('servicos.destroy', ['servico' =>$servico->id])}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="delete">

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-[#272727] dark:border-gray-700">

                <img class="rounded-t-lg h-80 w-80 object-cover mx-auto" src="{{asset('img/sase_logo.png')}}" />

                <div class="p-5">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$servico->nome}}</h5>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">descrição </p>
                    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-800 dark:hover:bg-red-500 dark:focus:ring-blue-800">
                        Deletar
                    </button>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>