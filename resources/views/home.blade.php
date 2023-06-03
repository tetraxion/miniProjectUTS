@extends('layouts.app')

@section('content')

            <section >
                <div class="container py-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/Lutfi.jpg') }}"
                                        alt="image" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">Lutfi</h5>
                                    <p class="text-muted mb-1">Sistem Informasi</p>
                                    <p class="text-muted mb-4">Institut Teknologi Telkom Surabaya</p>

                                </div>
                            </div>
                            <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush rounded-3" id="icon">
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="bi bi-github"> Github</i>
                                            <p class="mb-0"><a href="https://github.com/tetraxion" class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Tetraxion</a></p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="bi bi-instagram text-" style="color: rgb(255, 51, 0)"> Instagram</i>
                                            <p class="mb-0"><a href="https://www.instagram.com/lutfid955/" class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Lutfid955</a></p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="bi bi-facebook" style="color: blue"> Facebook</i>
                                            <p class="mb-0"><a href="https://web.facebook.com/dwi.lutfi.583/" class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Dwi Lutfi</a></p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3 my-2">
                                            <i class="bi bi-whatsapp" style="color: rgb(5, 205, 5)"> Whatsapp</i>
                                            <p class="mb-0"><a href="http://api.whatsapp.com/send/?phone=6282335481033&text=hai%20saya%Lutfi." class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">082335481033</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama Lengkap</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['nameL'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama Panggilan</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['nameP'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['alamat'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tempat, tanggal lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['ttl'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Agama</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['agama'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Jenis Kelamin</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['jenisKelamin'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Kewarganegaraan</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['kewarganegaraan'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Status</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['status'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Hobi</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['hobi'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Skill</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['skill'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Moto hidup</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $biodata['motoHidup'] }}</p>
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
    <!-- /#page-content-wrapper -->
    </div>


@endsection
