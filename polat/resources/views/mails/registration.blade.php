<h1>POLAT SHOPPING</h1>
<h4>Merhaba, {{$user->name}}</h4>
<p>Mağazamıza hoşgeldiniz. Kaydınız başarıyla yapıldı</p>
<p>Email adresinizi onaylamak için <a href="{{config('app.url').'/confirmation?activation_key='.$user->activation_key}}" style="color: red">tıklayın</a> </p>
