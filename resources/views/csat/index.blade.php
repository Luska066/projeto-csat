
@extends('layouts.auth')

@section('content')

    <div class=" ps-5  " >
        {{Breadcrumbs::render('csat.index')}}
    </div>
    <div class="d-flex flex-1 justify-content-center align-items-center ">

        <div id="box-contens" class="m-5 w-100 d-flex  gap-4 ">

            <div id="table-contents"  class=" border rounded-3 "  style=" max-height: 700px; height:700px; overflow:auto">
                <table class="table w-100  ">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Descrição</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($search as $search_item )
                        <tr>
                            <th scope="col-2">{{$search_item->id}}</th>
                            <td class="col-2">{{$search_item->name}}</td>
                            <td class="col-2">{{$search_item->note}}</td>
                            {{--
                            * - Criar esses botões com o VueJs
                            * - Ele terá que receber a descrição por meio de um props
                            * - Ele devera exibir um modal ao clicar
                            --}}
                            <td>
                                <a class="col-8 btn btn-primary">Vizualizar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div id="box-chart"  style="max-height: 700px; height:700px; overflow:auto" class=" text-white rounded-4 bg-dark  border d-flex p-5 flex-column align-items-center ">
                <div class="w-100 d-flex flex-wrap align-items-center justify-content-center flex-row mt-5 mb-5 m gap-5">

                    <div class="w-100">
                        <h2 class=" text-center">Taxa de Aprovação</h2>
                        <div class=" text-white d-flex rounded-2  flex-column align-items-center justify-content-center"  style="background-color: #41B883;font-weight:bold; font-size:15px;width:{{$csatValue}}%">
                            {{round($csatValue)}}%
                        </div>
                    </div>

                    <div class="w-100 ">
                        <h2 class=" text-center">Taxa Neutra</h2>
                        <div class=" text-white d-flex rounded-2  flex-column align-items-center justify-content-center"  style="background-color: #E46651;  font-weight:bold; font-size:15px;width:{{$csatValueNeutralFeedback}}%">

                            {{ceil($csatValueNeutralFeedback)}}%
                        </div>
                    </div>

                    <div class="w-100">
                        <h2 class=" text-center">Taxa de Negativa</h2>
                        <div class=" text-white d-flex rounded-2  flex-column align-items-center justify-content-center"  style="background-color: #00D8FF;font-weight:bold; font-size:15px;width:{{$csatValueNegativeFeedback}}%">

                            {{round($csatValueNegativeFeedback)}}%
                        </div>
                    </div>

                </div>
                <div class="w-100 mt-5">
                    <chart-component :aprovacao="{{$csatValue}}" :neutra="{{$csatValueNeutralFeedback}}" :negativa="{{$csatValueNegativeFeedback}}" />
                </div>

            </div>
        </div>

    </div>
    <div class=" w-100  mb-0 ">

        <chartline-component :array-dates="{{json_encode($allNotes)}}"></chartline-component>
    </div>



@endsection
