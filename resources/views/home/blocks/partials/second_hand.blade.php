@foreach ($secondHandProducts as $secondHandProduct)
    <div class="col-md-4">
        <figure class="card card-product-grid">
            <div class="img-wrap"><img src="{{ asset("/storage/images/products/{$secondHandProduct->img}") }}">
            </div>
            <figcaption class="info-wrap border-top">
                <a href="/product/{{ $secondHandProduct->slug }}"
                   class="title">{{ $secondHandProduct->title }}</a>
                <div class="price mt-2">{!! $block->discount($secondHandProduct) !!}₽</div>
                <p class=" mt-2">{{ $block->convertDays($secondHandProduct) }} до снятия с продажи</p>
                <a class="btn btn-outline-dark mt-2"
                   href="/product/{{ $secondHandProduct->slug }}">Подробнее</a>
            </figcaption>
        </figure>
    </div>
@endforeach
<span class="second__hand--pages" data-current-page="{{ $secondHandProducts->currentPage() }}" data-last-page="{{ $secondHandProducts->lastPage() }}"></span>
@if ($secondHandProducts->hasPages())
    {{ $secondHandProducts->links() }}
@endif
