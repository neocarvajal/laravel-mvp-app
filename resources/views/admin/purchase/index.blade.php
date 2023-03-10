@extends('layouts.admin')
@section('title','Gestión de compras')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }
</style>

@endsection
@section('create')
<li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{route('purchases.create')}}">
      <span class="btn btn-primary">+ Registrar compra</span>
    </a>
  </li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Compras
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compras</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Compras</h4>
                        {{--  <i class="fas fa-ellipsis-v"></i>  --}}
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{route('purchases.create')}}" class="dropdown-item">Registrar</a>
                              {{--  <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>  --}}
                            </div>
                          </div>
                    </div>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th style="width:50px;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchases as $purchase)
                                <tr>
                                    <th scope="row">
                                        <a href="{{route('purchases.show', $purchase)}}">{{$purchase->id}}</a>
                                    </th>
                                    <td>
                                        {{\Carbon\Carbon::parse($purchase->purchase_date)->format('d M y h:i a')}}
                                    </td>
                                    <td>{{$purchase->total}}</td>

                                    @if ($purchase->status == 'VALID')
                                    <td>
                                        <a class="jsgrid-button btn btn-success" href="#" title="Editar">
                                            Activo <i class="fas fa-check"></i>
                                        </a>
                                    </td>
                                    @else
                                    <td>
                                        <a class="jsgrid-button btn btn-danger" href="#" title="Editar">
                                            Cancelado <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                    @endif
                                    <td style="width: 50px;">
                                        <a href="#" class="jsgrid-button jsgrid-edit-button" title=""><i class="far fa-file-pdf"></i></a>
                                        <a href="{{route('purchases.pdf', $purchase)}}" class="jsgrid-button jsgrid-edit-button" title="imprimir"><i class="fas fa-print"></i></a> 
                                        <a href="{{route('purchases.show', $purchase)}}" class="jsgrid-button jsgrid-edit-button" title="mostrar"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection
