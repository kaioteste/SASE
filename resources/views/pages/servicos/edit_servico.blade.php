<x-app-layout>

    <div class="flex items-center" style="height: 100vh;">


        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8 dark:bg-[#272727] dark:border-gray-700 m-auto">
            <div class="text-center text-gray-100 text-lg mb-3">
                Atualize seus serviços
            </div>
            <form action="{{route('servicos.update' , ['servico' => $servico->id])}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" value="{{$servico->nome}}" id="name" name="nome" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#272727] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="preço" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                    <input type="number" value="{{$servico->preco}}" id="preço" name="preco" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#272727] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="tempo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempo</label>
                    <input type="number" value="{{$servico->tempo}}" id="tempo" name="tempo" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#272727] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- <input type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</input> -->

                <input class="w-full text-gray-800  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-300 dark:hover:bg-blue-200 dark:focus:ring-blue-800 mt-5" type="submit" value="atualizar">

            </form>
        </div>

    </div>
</x-app-layout>