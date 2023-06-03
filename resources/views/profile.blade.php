@extends('layouts.app')

@section('content')
            <section class="card mt-3 mb-5" id="about">
                <div class="container">
                    <div class="row align-items-center flex-row">
                        <div class="col-lg-6 mt-2">
                            <div class="about-avatar ">
                                <img class="rounded" src="{{Vite::asset('resources/images/profil.jpg')}}" title=""
                                    style="width:100%" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2">
                            <div class="about-text go-to">
                                <h3 class="dark-color">About Me</h3>
                                <h6 class="theme-color lead">Software Anginer &amp; Web Developer</h6>
                                <br>
                                <p>Halo, perkenalkan nama saya Dwi Lutfi Taufiq Ihsani, seorang mahasiswa sistem
                                    informasi yang berasal dari Trenggalek. Saya memiliki semangat yang besar dalam
                                    dunia teknologi, khususnya dalam bidang pengembangan perangkat lunak dan analisis
                                    data. Saya menikmati tantangan pemrograman dan menciptakan solusi untuk masalah yang
                                    kompleks. Saya juga aktif dalam lomba bisnis plan, yang memberi saya kesempatan
                                    untuk mengembangkan kreativitas dan keterampilan analitis. Saya memiliki moto hidup
                                    dari Albert Einstein, "Cobalah untuk tidak menjadi orang sukses, tapi lebih baik
                                    coba menjadi orang yang bernilai." Saya percaya bahwa kesuksesan sejati terletak
                                    pada kontribusi positif kita kepada orang lain dan dunia di sekitar kita. Saya siap
                                    menghadapi tantangan dan deadline yang ketat karena saya percaya bahwa itu mendorong
                                    saya untuk berkembang dan memberikan hasil terbaik.<br><br>
                                    Terima kasih telah meluangkan waktu untuk membaca profil saya. Saya adalah seorang
                                    mahasiswa sistem informasi yang bersemangat dalam dunia teknologi dan bisnis. Saya
                                    percaya bahwa kombinasi antara keahlian teknologi dan pemahaman bisnis adalah kunci
                                    untuk menciptakan solusi yang berdampak. Saya selalu siap menghadapi tantangan dan
                                    bekerja dengan tenggat waktu yang ketat. Moto hidup saya mendorong saya untuk
                                    menjadi orang yang bernilai dan memberikan kontribusi positif dalam segala hal yang
                                    saya lakukan. Saya sangat antusias untuk terlibat dalam proyek-proyek yang menantang
                                    dan menciptakan dampak positif dalam dunia teknologi dan bisnis.</p>
                                <div class="row about-list">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <label>Salam,</label>
                                            <p>Dwi Lutfi Taufiq Ihsani</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
