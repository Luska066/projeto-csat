@extends('layouts.public_layout')

@section('content')
<style>
    .list-description{

        height: 80%;
        overflow: auto;
        font-size: 25px ;
    }
</style>
<div class="flex w-screen h-screen justify-between items-center">
    <div class=" w-full lg:max-w-full lg:flex" style="width: 100%;height: 100%">
{{--        <div id="img-container" class=" h-48 lg:h-auto  flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://i.pinimg.com/originals/57/a3/78/57a378c88099a6366e5bff1b9d5f125d.jpg');width: 50%" title="Woman holding a mug">--}}
{{--        </div>--}}

        <div id="img-container" class=" h-48 lg:h-auto  flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="width: 50%" title="Woman holding a mug">
        </div>

        <div class="border-r border-b border-l  shadow-md  lg:border-l-0 lg:border-t  bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal" style="width: 100%">
            <div class="w-full h-full flex items-center flex-col justify-center">
                @auth
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[80%] flex flex-col items-center justify-center">
                        <div class="w-full flex items-center flex-col justify-center mb-8">
                            <img  width="100px" src="https://comercialportaldailha.com.br/wp-content/uploads/2018/11/Marca-Portal-da-Ilha.png"/>
                        </div>
                        <i class="fa-solid fa-check border rounded-full border-green-500 rounded-8 p-4 px-6" style="color: #2fd05f;font-size: 100px"></i>
                        <span class="mt-4 mb-8 mt-8 font-semibold" style="font-size: 20px">Login Realizado Com Sucesso !!!</span>
                        <span id="count-regressive" class="mt-4 mb-8 mt-8 font-semibold" style="font-size: 20px"></span>
                        <script>
                            const a  = document.getElementById('count-regressive');
                            let count = 0;
                            setInterval(() => {
                                console.log(count+1)
                            },1000)
                        </script>
                    </div>

                @else
                    <form  method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[80%] flex  flex-col justify-center">
                        @csrf
                        @method('POST')
                        <div class="w-full mb-8 flex items-center justify-center text-gray-700 font-bold">
                            <h2 style="font-size: 30px"> Bem Vindo Ao Sistema CSAT</h2>
                        </div>
                        <div class="w-full flex items-center flex-col justify-center mb-4">
                            <img width="100px" src="https://comercialportaldailha.com.br/wp-content/uploads/2018/11/Marca-Portal-da-Ilha.png"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                {{ __('Email Address') }}
                            </label>
                            <input id="email" type="email"  required autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="email" placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input required autocomplete="current-password" class="  form-control @error('password') is-invalid @enderror shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                Sign In
                            </button>
                            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                                Forgot Password?
                            </a>
                        </div>
                    </form>

                @endauth
                <p class="text-center text-gray-500 text-xs">
                    &copy;2020 Acme Corp. All rights reserved.
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
