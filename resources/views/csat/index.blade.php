
@extends('layouts.auth')

@section('content')
    <div class="flex flex-1 w-screen h-screen justify-between items-center ">

        <div class="m-5 mt-0 p-5 p-0">
            <div class="mb-lg-2 brad" >
                {{Breadcrumbs::render('csat.index')}}
            </div>
            <table class="table ">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Vendedor Associado</th>
                    <th scope="col">Email (opcional)</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Descrição</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="col-2">Lucas Sena</td>
                    <td class="col-2">João Da Silva</td>
                    <td class="col-2">lucas.santsena@gmail.com</td>
                    <td class="col-2">5</td>
                    <td class="col-2">
                    {{--
                     * - Criar esses botões com o VueJs
                     * - Ele terá que receber a descrição por meio de um props
                     * - Ele devera exibir um modal ao clicar
                    --}}
                        <a class="btn btn-primary">Vizualizar</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection
