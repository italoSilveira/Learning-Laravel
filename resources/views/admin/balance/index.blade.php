@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    	<li><a href="">Saldo</a></li>
    </ol>
@stop

@section('content')
    <section class="box">
    	<section class="box-header">
    		<a href="" class="btn btn-primary"><i class="fas fa-cart-plus"></i>Recarregar</a>
    		<a href="" class="btn btn-danger"><i class="fas fa-cart-plus"></i>Sacar</a>
    	</section>
    	<section class="box-body">
    		<section class="small-box bg-green">
	            <section class="inner">
	              <h3>R$160,00</h3>

	              <p>Bounce Rate</p>
	            </section>
	            <section class="icon">
	              <i class="ion ion-stats-bars"></i>
	            </section>
	            <a href="#" class="small-box-footer">Histórico<i class="fa fa-arrow-circle-right"></i></a>
	          </section>
    	</section>
    </section>
@stop