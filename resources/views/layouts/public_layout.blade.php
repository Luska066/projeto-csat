<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/70cc1b4b0d.js" crossorigin="anonymous"></script>


</head>
<body class="" style="box-sizing: border-box">
<div    class="flex justify-between items-center bg-gray-50 ps-8  text-dark">
    <img width="90px"  src="https://comercialportaldailha.com.br/wp-content/uploads/2018/11/Marca-Portal-da-Ilha.png"/>
    @if (Route::has('login'))
        <div class="w-96 flex  justify-center  gap-5">
            @if(Route::current()->getName() != "pesquisa.satisfacao.index" )
                @auth
                <a href="{{ url('/home') }}" class="font-semibold text-dark-600 ">Home</a>
                <div>
                    <a id="option-container" style="font-size: 16px" class="inline-flex w-full justify-center gap-x-1.5 rounded-md  px-3 bg-gray-50  text-sm font-semibold text-gray-900  " id="menu-button" aria-expanded="true" aria-haspopup="true">
                        {{auth()->user()->name}}
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <style>
                        .close{
                            display: none;
                        }
                    </style>
                    <div id="options-dropdown" class="close  absolute right-10 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}" class="d-none" role="none">
                                @csrf
                                @method('POST')
                                <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else

                <a href="{{ route('home-login') }}" class="font-semibold text-xl hover:text-cyan-500	">Login</a>
        @endauth
        @else
            <a href="" class=" text-xl hover:text-cyan-500	">Pesquisa Satisfação</a>
        @endif

        </div>
    @endif
</div>
<div class="flex ">

    @yield('content')
</div>

<script>
    var stars = document.querySelectorAll('.star-icon');

      document.addEventListener('click', function(e){
        var classStar = e.target.classList;

        if(!classStar.contains('ativo')){
          stars.forEach(function(star){
            star.classList.remove('ativo');
          });
          classStar.add('ativo');
          console.log(e.target.getAttribute('data-avaliacao'));
        }
      });
</script>
<script>
    let a = document.querySelector('#option-container')
    let b = document.getElementById('options-dropdown')
    let c = document.getElementById('img-container')

    c.style.backgroundImage = "url('{{Illuminate\Support\Facades\Storage::url('57a378c88099a6366e5bff1b9d5f125d.jpg')}}')"
    //c.('href','https://comercialportaldailha.com.br/wp-content/uploads/2018/11/Marca-Portal-da-Ilha.png')
    let  count = 0
    setInterval(() => {
        count++
        if(count == 1){
            c.style.backgroundImage = "url('{{\Illuminate\Support\Facades\Storage::url('fullhd.jpg')}}')"
        }else if(count == 2){
            c.style.backgroundImage = "url('{{\Illuminate\Support\Facades\Storage::url('12.jpg')}}')"
        }else if(count == 3){
            c.style.backgroundImage = "url('{{\Illuminate\Support\Facades\Storage::url('e6dd7dcb605aa52e65754c899ffbb1a4.jpg')}}')"
        }else if(count == 4){
            c.style.backgroundImage = "url('{{\Illuminate\Support\Facades\Storage::url('f5a43097018f03a7ea910a28afd641c6.jpg')}}')"
        }else if(count == 5){
            c.style.backgroundImage = "url('{{\Illuminate\Support\Facades\Storage::url('colchester-zoo-photo.jpg')}}')"
        }else if(count == 6){
            c.style.backgroundImage = "url('{{\Illuminate\Support\Facades\Storage::url('fullhd.jpg')}}')"
        }else{
            c.style.backgroundImage = "url('{{Illuminate\Support\Facades\Storage::url('57a378c88099a6366e5bff1b9d5f125d.jpg')}}')"
            count = 0
        }
        console.log(count)
    },10000)
    a.addEventListener('click',function(e){
        b.classList.toggle('close')
    })


</script>
</body>
</html>
