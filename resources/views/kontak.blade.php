@extends('layouts.app')

@section('content')
<div class="container my-5">


    <div class="row">
        <!-- FORMULIR & KONTAK DIGITAL (LOKASI & PETA DIHAPUS) -->
        <div class="col-md-8 mx-auto">
            <!-- Kartu Info Kontak Resmi -->
            <div class="card shadow-sm border-0 bg-dark text-light mb-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-warning mb-4 border-b pb-2">Informasi Kontak</h5>

                    <div class="d-flex align-items-center mb-3">
                        <span class="fs-4 me-3"></span>
                        <div>
                            <strong>Email Resmi:</strong>
                            <p class="text-white-50 mb-0 small">info@smastarunatimika.sch.id</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <span class="fs-4 me-3"></span>
                        <div>
                            <strong>Nomor Telepon:</strong>
                            <p class="text-white-50 mb-0 small">(0901) 123456</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kartu Formulir Kirim Pesan -->
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-primary mb-3">Kirim Pesan Langsung</h5>
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Email / No. WhatsApp</label>
                            <input type="text" class="form-control" placeholder="Masukkan kontak Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Isi Pesan Anda</label>
                            <textarea class="form-control" rows="3" placeholder="Tuliskan pertanyaan Anda untuk sekolah di sini..."></textarea>
                        </div>
                        <button type="submit" onclick="this.form.submit()" class="btn btn-primary w-100 fw-bold shadow-sm">Kirim Pesan Sekarang</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
