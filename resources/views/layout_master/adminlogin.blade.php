@extends('layouts.loginsidebar')




@section('sidebar')

<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>welcome Admin!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End-->
    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Hello Admin</h2>
                            <p>welcome toyour company sure! 
                                else please don't wrong more than three time 
                            </p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back SURE ! <br>
                                Please Sign in now</h3>
                                @if (Session::has('succes'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('succes')}}
                                      </div>
                                @endif
                                @if (Session::has('wrong'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('wrong')}}
                                  </div>
                            @endif
                            <form class="row contact_form" action="{{ route('admin.login') }}" method="post" >
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="name" name="email" value=""
                                        placeholder="your email">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="{{ route('email') }}">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
</main>
@endsection