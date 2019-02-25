<!-- resources/views/layouts/app.blade.php -->
@extends('base')
@include('components.user')
<div class="container">
    <div class="row">
        <!-- Titulo  -->
        <h1>GestionDocumental/Ventas</h1>
    </div>
    <div class="row">
        <h2>Clientes</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table>
                <th>Nombre</th>
                <th>CIF/NIF</th>
                <th>Codigo Postal</th>
                <tr><td>
                    @yield('listadoClientes')
                </td></tr>
            </table>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3"> 
            @include('components.errores')
        </div>
    </div>
</div>