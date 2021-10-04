@extends('Layout/index')
@section('container')


    <!--================ Start Header Menu Area =================-->

    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <p class="text-uppercase">
                                Best online education service In the world
                            </p>
                            <h2 class="text-uppercase mt-4 mb-5">
                                One Step Ahead This Season
                            </h2>
                            <div>
                                <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                                <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <center>
                <div style="padding-bottom: 100px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.225305355051!2d113.69023161485651!3d-8.180043784266571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69421d24637c5%3A0x4915601978edfd46!2sKantor%20ATR%2FBPN%20Jember!5e0!3m2!1sen!2sid!4v1632996394808!5m2!1sen!2sid"
                        width="1125" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </center>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="ti-home"></i>
                            <h6>Jember, Jawa Timur</h6>
                            <p>Jl. KH Shiddiq No.55</p>
                        </div>
                        <div class="info_item">
                            <i class="ti-headphone"></i>
                            <h6><a href="#">(0331) 484644</a></h6>
                            <p>Senin - Jumat | 08.00 - 17.00 Wib</p>
                        </div>
                        <div class="info_item">
                            <i class="ti-email"></i>
                            <h6><a href="#">support@colorlib.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => 'contactus.store']) !!}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('Nama:') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Nama Anda']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('Email:') !!}
                        {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email Anda']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                      {!! Form::label('Subjek:') !!}
                      {!! Form::text('subject', old('subject'), ['class' => 'form-control', 'placeholder' => 'Subjek pesan']) !!}
                      <span class="text-danger">{{ $errors->first('subject') }}</span>
                  </div>
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        {!! Form::label('Pesan:') !!}
                        {!! Form::textarea('message', old('message'), ['class' => 'form-control', 'placeholder' => 'Isi pesan']) !!}
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Hubungi kami!</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>



    <!--  <div id="success" class="modal modal-message fade" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button
                                          type="button"
                                          class="close"
                                          data-dismiss="modal"
                                          aria-label="Close"
                                        >
                                          <i class="ti-close"></i>
                                        </button>
                                        <h2>Thank you</h2>
                                        <p>Your message is successfully sent...</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                

                                <div id="error" class="modal modal-message fade" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button
                                          type="button"
                                          class="close"
                                          data-dismiss="modal"
                                          aria-label="Close"
                                        >
                                          <i class="ti-close"></i>
                                        </button>
                                        <h2>Sorry !</h2>
                                        <p>Something went wrong</p>
                                      </div>
                                    </div>
                                  </div>
                                </div> -->

@endsection
