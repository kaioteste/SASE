<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="./css/app.css" rel="stylesheet">
        <link href="./css/darkMode.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        

        <!-- Styles -->
        

    </head>
    <body style="background-color: #272727;">
        <main style="height: 100vh;"  class="flex justify-center items-center text-2xl">
            <div class="font-mono">
                        <div class="text-center">
                            <h1 class="text-white text-4xl">
                                Bem-Vindo(a) ao <span class="text-[#96ACC2] font-bold ">SASE</span>!
                            </h1>
                            <p class="text-white text-xl mt-2">
                                Explore nossos <span class="underline decoration-[#96ACC2]">serviços</span>
                            </p>
                        </div>
                        <div class="flex justify-center">
                            <div>
                                @if (Route::has('login'))
                                    @auth
                                        <div class="">
                                            <a style="text-decoration: none; " href="{{ url('/dashboard') }}">
                                                <button class="bg-[#96ACC2] hover:bg-[#CDD7E2] text-gray-900 font-bold py-2 px-4 rounded">
                                                    Dashboard
                                                </button>
                                            </a>
                                        </div>
                                    @else
                                        <div class="my-5 text-center text-xl">
                                            <a style="text-decoration: none;" class="min-w-80" href="{{ route('register') }}">
                                                <button class="bg-[#96ACC2] hover:bg-[#CDD7E2] text-gray-900 font-bold py-2  rounded w-80">
                                                    Crie uma conta nova
                                                </button>
                                            </a>
                                        </div>

                                        
                        
                                        @if (Route::has('register'))
                                        
                                        <div class=" text-xl ">
                                            <a style="text-decoration: none; " href="{{ route('login') }}" class="  flex justify-center w-full ">
                                                <button class=" w-80 bg-[#96ACC2] hover:bg-[#CDD7E2] text-gray-900 font-bold py-2 px-4 rounded">
                                                    Entre com uma conta 

                                                </button>
                                            </a>
                                        </div>
                                        @endif
                                    @endauth
                                @endif
                                <div class="text-center my-5 text-white text-xl" >
                                    ou
                                </div>
                                <div class="text-xl text-center text-white">
                                    Acesse o <span class="text-[#96ACC2]">SASE</span> para <span class="text-[#96ACC2] hover:underline"><a href="#">cliente</a></span>
                                </div>
                            </div>
                        </div>
                        
            </div>
        </main>
    </body>  

    <style>
        .mudarCor{
            color: #ebf7f8;
            background-color:#181f2f
        }

        .mudarCor:hover{
            color: #ebf7f8;
            background-color:#d1d1d1;
        }
    </style>
    <script src="scripts/darkMode.js"></script>
<script src="./scripts/main.js"></script>

    