@extends('layout.app')

@section('title')
    Ювелирные изделия купить в Москве недорого
@endsection

@section('keywords')
    <meta name="Keywords" content="">
@endsection

@section('description')
    <meta name="description" content="Цена снижается каждый день. Goldman.">
@endsection

@section('content')

    <section class="section-main bg padding-y">
        <div class="container">
            @include('home.blocks.products', ['secondHandProducts' => $secondHandProducts, 'block' => $block])
            <div class="row">
                <div class="col-md-12">
                    <p>SEOSEOSEOSEOSEOSEOSEOSEOSEOSEO</p>
                </div>
            </div>
            @include('components.daily_discount_component')
            @include('components.buy_expensive_component')
        </div>
    </section>

@endsection
