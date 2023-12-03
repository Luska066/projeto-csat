@extends('layouts.public_layout')

@section('content')
    <div class="flex items-center justify-center flex-wrap w-full h-screen  ">
        <style>
            .avaliacao{
            display: flex;
            }
            .star-icon{
            list-style-type: none;
            border: 1px solid #fff;
            cursor: pointer;
            color: #009dff;
            font-size: 40px;/* alterar o tamanho das estrelas */
            }
            .star-icon::before{
            content: "\2605";
            }
            .star-icon.ativo ~ .star-icon::before{
            content: "\2606";
            }
            .avaliacao:hover .star-icon::before{
            content: "\2605";
            }
            .star-icon:hover ~ .star-icon::before{
            content: "\2606";
            }


            @media(max-width:600px){
                .formulario{
                    width: 100%;
                }
            }



        </style>


        <div class="w-1/2 formulario">
            <h2 class="text-center block text-gray-700 font-semibold  mb-2" style="font-size: 100%" >Pesquisa Satisfação</h2>

        @if(session('message'))

            <div id="teste" class="{{ session('type') != 1 ? 'bg-green-200' : 'bg-red-200'}} my-3 text-center font-semibold p-2 ps-3 rounded-md">
                {{ session('message') }}
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var mensagemDiv = document.getElementById("teste");

                    // Mostra a mensagem
                    // Configura um temporizador para ocultar a mensagem após 2 segundos
                    setTimeout(function() {
                        mensagemDiv.hidden = true;
                    }, 3000);
                });
                </script>


        @endif

            <form method="post" action="{{route('pesquisa.satisfacao.store')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                {{-- Name --}}
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  Nome <span class="text-red-500" style="font-size: 10px">(Não obrigatório)</span>
                </label>
                <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
              </div>


              <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2 ">Oq achou do nosso atendimento? <span class="text-red-500" style="font-size: 10px">(*Obrigatório)</span></label>
                    @error('description')
                        <p class="text-red-500 mt-2 mb-2" style="font-size: 14px;">{{$message}}</p>
                    @enderror
                    <textarea name="description" name="description"  id="message" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 ring-blue-500 border-blue-500  placeholder-gray-400  focus:ring-blue-500 border-blue-500" placeholder="Write your thoughts here..."></textarea>
                </div>


              <div class="mb-6 d-flex">
                <label for="message" class="block text-gray-700 text-sm font-bold  ">Digite a Sua Nota <span class="text-red-500" style="font-size: 10px">(*Obrigatório)</span></label>
                @error('note')
                    <p class="text-red-500 mt-2" style="font-size: 14px;">{{$message}}</p>
                @enderror
                <ul class="avaliacao ">

                        <input type="radio" name="note" id="radio1" value="1" style=" display:none" name="group">
                        <label for="radio1" class="star-icon ativo" name="note" data-avaliacao="1"></label>


                        <input type="radio" name="note" id="radio2" value="2" style="display:none" name="group">
                        <label for="radio2" class="star-icon" data-avaliacao="2"></label>


                        <input type="radio" name="note" id="radio3" value="3" style="display:none" name="group">
                        <label for="radio3" class="star-icon" data-avaliacao="3"></label>


                        <input type="radio" name="note" id="radio4" value="4" style="display:none" name="group">
                        <label for="radio4" class="star-icon" data-avaliacao="4"></label>


                        <input type="radio" name="note" id="radio5" value="5" style="display:none" name="group">
                        <label for="radio5" class="star-icon" data-avaliacao="5"></label>
                </ul>
                <label for="message" class="block text-red-700 text-sm font-bold  ">Lembre-se de clicar em cima da estrela</label>

            </div>



              {{-- Name --}}
              <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                  Enviar
                </button>

              </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
              &copy;2020 Portal da Ilha. All rights reserved.
            </p>
          </div>
    </div>


@endsection
