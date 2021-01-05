<header>
    <div class="logo-la-molisana">
        <img src="{{'../images/logo-la-molisana.png'}}" alt="">
    </div>
    <div class="menu-header">
        <ul class="lista-header">
            <li><a class="{{Request::route()->getName() =='home' ? 'active': ''}}" href="{{url('/')}}">Home</a></li>
            <li><a class="{{Request::route()->getName() =='prodotti' ? 'active': ''}}" href="{{route('prodotti')}}">Prodotti</a></li>
            <li><a class="{{Request::route()->getName() =='news' ? 'active': ''}}"href="{{route('news')}}">News</a></li>
        </ul>
    </div>
</header>
