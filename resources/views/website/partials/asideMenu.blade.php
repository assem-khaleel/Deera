<div class="col-sm-3">
    <section class="in-section">
        <h3>{{trans('website.popularShop')}}</h3>
        <ul>
            @inject('rShop', 'App\Repositories\website\shop\ShopContract')

            @foreach($rShop->getFooterPopularShopMenu( ) as $id=>$onePopularShop)
                <li><a href="/shop/{{$id}}">{{$onePopularShop}}</a></li>
            @endforeach
        </ul>
    </section>
</div>