@extends('Layouts.plantilla')

@section('titulo', 'Home')

@section('content')

    <section>
        <div class="row">
            <div class="12">

                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">BIENVENIDO</h3>
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <td>Nombre</td>
                            <td>Apellidos</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </section>
    
@endsection