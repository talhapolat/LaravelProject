@extends('layouts.master')
@section('title', 'Login')
@section('head')
    <link rel="icon" type="image/png" href="/loginres/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/loginres/css/util.css">
    <link rel="stylesheet" type="text/css" href="/loginres/css/main.css">
@endsection

@section('content')

    <section class="windowloginpage bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 p-b-30">
                    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                        @if($errors->has('login'))
                        @include('layouts.partials.errors')
                        @endif
                        <form action="{{route('userlogin')}}" method="post" class="login100-form validate-form">
                            {{csrf_field()}}
                            {{--                            {% if error %}--}}
                            {{--                            <div class="alert alert-danger">Email veya şifre hatalı</div>--}}
                            {{--                            {% endif %}--}}

                            {{--                            {% if app.user %}--}}
                            {{--                            <div class="mb-3">--}}
                            {{--                                Zaten giriş yaptın ({{ app.user.username }}), <a href="{{ path('app_logout') }}">Çıkış Yap</a>--}}
                            {{--                            </div>--}}
                            {{--                            {% endif %}--}}

                            <div class="wrap-input100 validate-input"
                                 data-validate="Hatalı email adresi: ornek@abc.com">
                                <input type="text" name="email" id="inputEmail" class="form-control input100"
                                       placeholder="Email adresi" autocomplete="off">
                                <span class="focus-input100-1"></span>
                                <span class="focus-input100-2"></span>
                            </div>

                            <div class="wrap-input100 rs1 validate-input" data-validate="Parola gerekli">
                                <input type="password" name="password" id="inputPassword" class="form-control input100"
                                       placeholder="Parola">
                                <span class="focus-input100-1"></span>
                                <span class="focus-input100-2"></span>
                            </div>

                            <div class="container-login100-form-btn m-t-20">
                                <button type="submit" class="login100-form-btn">
                                    GİRİŞ YAP
                                </button>
                            </div>

                            <div class="text-center p-t-45 p-b-4">
                                <a href="#" class="txt2 hov1">
                                    Şifremi Unuttum
                                </a>
                            </div>
                            <div class="text-center">
						<span class="txt1">
							Hesabınız yok mu?
						</span>
                                <a onclick="focusMethod()" href="#" class="txt2 hov1">
                                    Kayıt Ol
                                </a>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 p-b-30">
                    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                        @if(!$errors->has('login'))
                        @include('layouts.partials.errors')
                        @endif
                            <form action="{{route('register')}}" method="post" class="login100-form validate-form2">
                                {{csrf_field()}}

                                <div class="wrap-input100 validate-input2" data-validate="İsminizi Giriniz">
                                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control input100"
                                           placeholder="İsim" autocomplete="off" required>
                                    <span class="focus-input100-1"></span>
                                    <span class="focus-input100-2"></span>
                                </div>

                                <div class="wrap-input100 validate-input2" data-validate="Soyadınızı giriniz">
                                    <input type="text" autocomplete="off" value="{{old('surname')}}" name="surname" id="surname"
                                           class="form-control input100" placeholder="Soyad" required>
                                    <span class="focus-input100-1"></span>
                                    <span class="focus-input100-2"></span>
                                </div>

                                <div class="wrap-input100 validate-input2"
                                     data-validate="Hatalı email adresi: ornek@abc.com">
                                    <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control input100"
                                           placeholder="Email adresi" autocomplete="off" required>
                                    <span class="focus-input100-1"></span>
                                    <span class="focus-input100-2"></span>
                                </div>

                                <div class="wrap-input100 rs1 validate-input2" data-validate="Parola gerekli">
                                    <input type="password" name="password" id="password" class="form-control input100"
                                           placeholder="Parola" required>
                                    <span class="focus-input100-1"></span>
                                    <span class="focus-input100-2"></span>
                                </div>

                                <div class="wrap-input100 rs1 validate-input2" data-validate="Parola gerekli">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                           class="form-control input100" placeholder="Parola" required>
                                    <span class="focus-input100-1"></span>
                                    <span class="focus-input100-2"></span>
                                </div>

                                <div class="container-login100-form-btn m-t-20">
                                    <button type="submit" class="login100-form-btn">
                                        KAYIT OL
                                    </button>
                                </div>


                            </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection


@section('footerjs')
    <script>
        focusMethod = function getFocus() {
            document.getElementById("user_name").focus();
        }
    </script>
    <script type="text/javascript" src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="/vendor/select2/select2.min.js"></script>
    <script src="/js/main.js"></script>
@endsection
