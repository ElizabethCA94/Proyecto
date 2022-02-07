@extends('layouts.app')

@section('content')
this is the request
{{-- {{ $request }} --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tabla para calcular el precio de los productos en otras monedas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table text-center">
  <thead>
    <tr>
        <td colspan="3" style="background-color: #3569DF; color: #ffffff"><strong>Valor del dolar y euro en Colombia</strong></td>
    </tr>
    
    <tr>
      <th>FECHA</th>
      <th>DOLAR</thscope=>
      <th>EURO</thscope=>
     
    </tr>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>{{ $dolar ['fecha']}}</th>
      <td>{{ $dolar ['dolar']['valor']}}</td>
      <td>{{ $dolar ['euro']['valor']}}</td>
      <td></td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
