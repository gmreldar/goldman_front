<div class="row second-hand__items">
    @include('home.blocks.partials.second_hand', ['secondHandProducts' => $secondHandProducts])
    <div class="text-center w-100 second-hand__show-more">
        <button type="button" class="btn btn-outline-dark mt-2 second-hand__show-more--button">Показать еще</button>
    </div>
</div>
<div class="row second-hand-last-day__items">
    <div class="col-md-12 mt-5 mb-5">
        <h4>Послдений шанс получить максимальную скидку!</h4>
        <p>Завтра эти товары будут сняты с публикации</p>
    </div>
    @include('home.blocks.partials.second_hand', ['secondHandProducts' => $secondHandProductsLastDay])
    <div class="text-center w-100 second-hand__show-more">
        <button type="button" class="btn btn-outline-dark mt-2 second-hand__show-more--button">Показать еще</button>
    </div>
</div>
@push('scripts')
    <script type="text/javascript">
      $(function () {
        let currentPage = parseInt($('.second-hand__items .second__hand--pages').attr('data-current-page'))
        let lastPage = parseInt($('.second-hand__items .second__hand--pages').attr('data-last-page'))

        let currentPageLastDay = parseInt($('.second-hand-last-day__items .second__hand--pages').attr('data-current-page'));
        let lastPageLastDay = parseInt($('.second-hand-last-day__items .second__hand--pages').attr('data-last-page'))

        if (currentPage === lastPage) {
          $('.second-hand__items .second-hand__show-more').remove()
        }
        if (currentPageLastDay === lastPageLastDay) {
          $('.second-hand-last-day__items .second-hand__show-more').remove()
        }

        $('.second-hand__items .second-hand__show-more--button').click(function () {
          if (!isNaN(parseInt($('.second-hand__items .second__hand--pages').attr('data-current-page')))) {
            currentPage = parseInt($('.second-hand__items .second__hand--pages').attr('data-current-page'))
            lastPage = parseInt($('.second-hand__items .second__hand--pages').attr('data-last-page'))
          }
          scroll(currentPage, lastPage, false);
        });
        $('.second-hand-last-day__items .second-hand__show-more--button').click(function () {
          if (!isNaN(parseInt($('.second-hand-last-day__items .second__hand--pages').attr('data-current-page')))) {
            currentPageLastDay = parseInt($('.second-hand-last-day__items .second__hand--pages').attr('data-current-page'));
            lastPageLastDay = parseInt($('.second-hand-last-day__items .second__hand--pages').attr('data-last-page'))
          }
          scroll(currentPageLastDay, lastPageLastDay, true);
        });

        function scroll(currentPage, lastPage, isLastDay) {
          let element = '.second-hand__items';
          if (isLastDay) {
            element = '.second-hand-last-day__items';
          }
          let url = $(element + ' nav[role=navigation] div > a:last').attr('href') + '&is_last_day=' + isLastDay;
          --lastPage
          $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function () {
              $('.ajax-load').show();
              $('.second__hand--pages').remove();
            }
          })
            .done(function (data) {
              $(data.html).insertBefore(element + ' .second-hand__show-more')
              if (currentPage === lastPage) {
                $(element + ' .second-hand__show-more').remove()
              }
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
              console.log('Something was wrong')
            });
        }
      });
    </script>
@endpush
