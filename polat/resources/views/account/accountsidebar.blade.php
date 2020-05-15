<div class="wrap-login100 p-b-50 text-center" style="width: auto!important; height: auto!important;">

    <img src="https://cdn-mgsm.akinon.net/static_omnishop/s450/assets/img/default-avatar.svg"  alt="">


    <h6 class="display-4 mt-3" style="font-size: 23px; font-weight: 100">{{auth()->user()->name ." ". auth()->user()->surname}}</h6>
    <hr class="mx-4">

    <ul class="list-group text-left" style="border-top: 0px; font-size: 13px">
        <li class="list-group-item" style="border-top: 0px; border-right:0px; border-left: 0px"><span class="fa fa-user mr-2"></span> <a href="/account/profile/id">Hesap Bilgilerim</a> </li>
        <li class="list-group-item" style="border-right:0px; border-left: 0px"><span class="fa fa-shopping-bag mr-2" style="font-size: 10px"></span> <a href="/account/orders">Siparişlerim</a> </li>
        <li class="list-group-item" style="border-right:0px; border-left: 0px"><span class="fa fa-heart mr-2" style="font-size: 10px"></span><a href="/account/favourites">Favorilerim</a> </li>
        <li class="list-group-item" style="border-right:0px; border-left: 0px"><span class="fa fa-map-marker mr-2" style="font-size: 16px"></span><a href="/account/address">Adres Defteri</a></li>
        <li class="list-group-item" style="border-right:0px; border-left: 0px"><span class="fa fa-bandcamp mr-2" style="font-size: 10px"></span><a href="/account/coupons">Kuponlarım</a></li>
        <li class="list-group-item" style="border-bottom: 0px;border-right:0px; border-left: 0px"><span class="fa fa-comment mr-2" style="font-size: 10px"></span><a href="/contact">Müşteri Hizmetleri</a></li>
        <li class="list-group-item" style="border-bottom: 0px;border-right:0px; border-left: 0px"><span class="fa fa-arrow-left mr-2" style="font-size: 10px"></span>
            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit()" href="#">Çıkış Yap</a></li>
        <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
            {{csrf_field()}}
        </form>
    </ul>
</div>
