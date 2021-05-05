@extends('layout.app')

@section('content')
<section class="section-main bg padding-y">
        <div class="container product">
            <div class="row d-flex">
                {{--{{ dd($product)}} --}}
                <div class="slider-items-owl owl-carousel owl-theme product__slider">
                	<div class="item-slide">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img class="product__img" src="{{ asset("/storage/images/products/{ $product->img }") }}">
                            </div>
                        </figure>
                	</div>
                	<div class="item-slide">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img class="product__img" src="{{ asset("/storage/images/products/{ $product->img }") }}">
                            </div>
                        </figure>
                	</div>
                	<div class="item-slide">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img class="product__img" src="{{ asset("/storage/images/products/{ $product->img }") }}">
                            </div>
                        </figure>
                	</div>
                </div>
                <div class="container product__description px-5">
                    <p class="my-0">Артикул: {{ $product->id }}</p>
                    <h4 class="my-0">{{ $product->title }}</h4>
                    <p class="my-0">{{ $product->gender_type }}</p>
                    <div class="container my-4 px-0">
                        <p class="my-0">Металл: {{ $product->metal_type }}</p>
                        <p class="my-0">Проба: {{ $product->standard }}</p>
                        <p class="my-0">Размер: {{ $product->size }}</p>
                        <p class="my-0">
                            @if($product->is_sold == 0)
                                <i class="fa fa-check"></i>
                                В наличии 1 шт.
                            @else
                                Товар продан
                            @endif
                        </p>
                        @if($product->is_sold == 0)
                            <div class="container d-flex nowrap my-4">
                                <div class="mx-4">
                                    <h4 class="my-0 product__text_through">
                                        {{ $product->price }}
                                        <i class="fa fa-ruble-sign"></i>
                                    </h4>
                                </div>
                                <div class="mx-4">
                                    <h4 class="my-0">{{ $product->price }} <i class="fa fa-ruble-sign"></i></h4>
                                </div>
                                <div class="mx-4 product__opacity">
                                    <h4 class="my-0">{{ $product->price }} <i class="fa fa-ruble-sign"></i></h4>
                                    <p class="my-2">
                                        Цена завтра <br />
                                        (если товар не будет продан)
                                    </p>
                                </div>
                            </div>
                            <div class="container d-flex my-2 px-0">
                                <div class="row mx-4">
                                    <p class="btn btn-primary product__button">
                                       <i class="fa fa-shopping-cart"></i>
                                       <span class="text"> Добавить в корзину</span>
                                   </p>
                                </div>
                                <div class="row mx-4">
                                    <p class="btn btn-primary product__button" id="modalButton" data-bs-toggle="modal" data-bs-target="#buyModal">
                                        <span class="text"> Купить в один клик</span>
                                    </p>
                                </div>
                            </div>
                            <div class="container my-1 px-0">
                                <p class="my-1">
                                    Поторопитесь! Товар будет снят с продажи и отправлен на вторичную <br /> переработку через:
                                </p>
                                <div class="countdown space-top-half padding-top container d-flex nowrap px-0 py-0 my-1" data-date-time="02/20/2022 10:10:10">
                                    <div class="item text-center">
                                        <div class="days text-center mx-2 my-1 px-1 py-1 product__time">00</div>
                                        <span class="days_ref">Дней</span>
                                    </div>
                                    <span class="my-1 product__separate py-1">:</span>
                                    <div class="item text-center">
                                        <div class="hours text-center mx-2 my-1 px-1 py-1 product__time">00</div>
                                        <span class="hours_ref">Часов</span>
                                    </div>
                                    <span class="my-1 product__separate py-1">:</span>
                                    <div class="item text-center">
                                        <div class="minutes text-center mx-2 my-1 px-1 py-1 product__time">00</div>
                                        <span class="minutes_ref">Минут</span>
                                    </div>
                                    <span class="my-1 product__separate py-1">:</span>
                                    <div class="item text-center">
                                        <div class="seconds text-center mx-2 my-1 px-1 py-1 product__time">00</div>
                                        <span class="seconds_ref">Секунд</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="container px-0 my-4">
                    <h4 class="mt-0 mb-2">Похожие товары</h4>
                    <div class="slider-items-owl owl-carousel owl-theme product__similar-product-slider">
                        <div class="item-slide">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
                                    <img class="product__img" src="{{ asset("/storage/images/products/{ $product->img }") }}">
                                </div>
                            </figure>
                        </div>
                        <div class="item-slide">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
                                    <img class="product__img" src="{{ asset("/storage/images/products/{ $product->img }") }}">
                                </div>
                            </figure>
                        </div>
                        <div class="item-slide">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
                                    <img class="product__img" src="{{ asset("/storage/images/products/{ $product->img }") }}">
                                </div>
                            </figure>
                        </div>
                        <div class="item-slide">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
                                    <img class="product__img" src="{{ asset("/storage/images/products/{ $product->img }") }}">
                                </div>
                            </figure>
                        </div>
                        <div class="item-slide">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
                                    <img class="product__img" src="{{ asset("/storage/images/products/{ $product->img }") }}">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.buy_expensive_component')
        </div>
        <div class="modal fade" id="buyModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <i class="btn-close fa fa-times product__button" data-bs-dismiss="modal" aria-label="Close" id="closeModalButton"></i>
                    </div>
                    <div class="modal-body">
                        <h4 class="my-4 text-center">Покупка в 1 клик</h4>
                        <div class="form-group d-flex justify-content-center">
                        	<input type="text" placeholder="Введите номер телефона" class="form-control product__modal-input" name="phone" id="#modalInput">
                        </div>
                        <div class="container d-flex justify-content-center">
                            <button type="button" class="btn btn-primary product__modal-button">Купить</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p class="py-0 my-2 text-center">Отправляя форму, Вы соглашаетесь с политикой конфиденциальности</p>
                    </div>
                </div>
            </div>
        </div>
</section>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.product__slider').owlCarousel({
                loop: true,
                margin: 10,
                items: 1,
            });
            $('.product__similar-product-slider').owlCarousel({
                loop: true,
                nav: true,
                margin: 10,
                dots: false,
                responsiveClass: true,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0:{
                        items: 1,
                    },
                    600:{
                        items: 2,
                    },
                    1000:{
                        items: 4,
                    }
                },
            });

            $('.countdown').downCount({
                date: '05/30/2021 00:00:00',
                offset: -5
            });

            $('#modalButton').click(() => {
                $('#buyModal').modal('toggle');
            });

            $('#closeModalButton').click(() => {
                $('#buyModal').modal('hide');
            });
        });
    </script>
@endpush
@endsection
