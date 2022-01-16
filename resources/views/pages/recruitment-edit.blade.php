@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2">{{ $title }}</h1>
    @if (session('message'))
        {!! session('message') !!}
    @endif

    <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
            <form action="/admin/recruitment/{{ $recruitment->id }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <input type="number" class="form-control @error('tahun_ajaran') is-invalid @enderror" name="tahun_ajaran" id="tahun_ajaran" placeholder="Isi tahun ajaran" required value="{{ old('tahun_ajaran', $recruitment->tahun_ajaran) }}">
                    @error('tahun_ajaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pembukaan">Pembukaan</label>
                    <input type="datetime-local" class="form-control @error('pembukaan') is-invalid @enderror" name="pembukaan" id="pembukaan" required value="{{ old('pembukaan', date_format(date_create($recruitment->pembukaan), "Y-m-d") . 'T' . date_format(date_create($recruitment->pembukaan), "H:i")) }}">
                    @error('pembukaan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="penutupan">Penutupan</label>
                    <input type="datetime-local" class="form-control @error('penutupan') is-invalid @enderror" name="penutupan" id="penutupan" required value="{{ old('penutupan', date_format(date_create($recruitment->penutupan), "Y-m-d") . 'T' . date_format(date_create($recruitment->penutupan), "H:i")) }}">
                    @error('penutupan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info text-white px-4">Ubah</button>
                </div>
            </form>
        </div>
    </div>




@endsection
