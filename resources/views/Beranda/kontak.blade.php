@extends('layouts.main')
@section('container')
<div>
    <section id="contact" data-stellar-background-ratio="0.5" style="padding-top:50px">
        <div class="container">
            <div class="row">
    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                    <div id="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3797323728836!2d106.87654721431767!3d-6.964452070123873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e683806e8e77c9d%3A0xb21f4638e380641f!2sSMK%20Terpadu%20Ibaadurrahman!5e0!3m2!1sen!2sid!4v1583310216117!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                <h2><b>Hubungi Kami</b></h2>
                        </div>
                    </div>

                    <div class="contact__two-form">
                        <form action="#">
                            <div class="row gy-4 mb-4">
                                <div class="col-xl-6">
                                    <input type="text" placeholder="Nama">
                                </div>

                                <div class="col-xl-6">
                                    <input type="email" placeholder="Email">
                                </div>    

                                <div class="col-xl-6">
                                    <input type="tel" placeholder="Nomor">
                                </div>

                                <div class="col-xl-6">
                                    <input type="text" placeholder="Subjek">
                                </div>
                            </div>
                            <textarea placeholder="Pesan"></textarea>

                            <div style="padding-top: 10px">
                                <button type="submit" class="btn-two">
                                Kirim Sekarang
                                <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>  
@endsection