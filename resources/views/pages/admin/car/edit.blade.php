@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="card shadow">
            <div class="card-header py-3 justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Car</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('car.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    {{-- <div class="form-group"> --}}
                        <input type="hidden" class="form-control" name="id_seller" placeholder="Id Seller"
                            value="{{ $item->id_seller }}">
                        {{--
                    </div> --}}
                    <div class="form-group">
                        <label for="title">Judul Iklan</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul Iklan"
                            value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="model">Tipe Mobil</label>
                        <input type="text" class="form-control" name="model" placeholder="Tipe Mobil"
                            value="{{ $item->model }}">
                    </div>
                    <div class="form-group">
                        <label for="car_year">Tahun Mobil</label>
                        <input type="number" class="form-control" name="car_year" placeholder="Tahun Mobil"
                            value="{{ $item->car_year }}">
                    </div>
                    <div class="form-group">
                        <label for="cars_type_id">Kategori Mobil</label>
                        <select name="car_types_id" class="form-control">
                            <option value="{{ $item->car_types_id }}">{{ $item->title }}</option>
                            @foreach ($car_types as $car_type)
                                <option value="{{ $car_type->id }}">
                                    {{ $car_type->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="transmission">Transmisi</label>
                        <div class="radio-tile-group gap-3">
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="transmission" value="Otomatis" @if ($item->transmission == 'Otomatis') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="transmission">Otomatis</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="transmission" value="Manual" @if ($item->transmission == 'Manual') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="transmission">Manual</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="condition">Kondisi</label>
                        <div class="radio-tile-group gap-3">
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="condition" value="Baru" @if ($item->condition == 'Baru') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="condition">Baru</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="condition" value="Bekas" @if ($item->condition == 'Bekas') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="condition">Bekas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fuel">Bahan Bakar</label>
                        <div class="radio-tile-group gap-3">
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="fuel" value="Diesel" @if ($item->fuel == 'Diesel') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="fuel">Diesel</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="fuel" value="Bensin" @if ($item->fuel == 'Bensin') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="fuel">Bensin</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="fuel" value="Hybrid" @if ($item->fuel == 'Hybrid') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="fuel">Hybrid</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="fuel" value="Listrik" @if ($item->fuel == 'Listrik') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="fuel">Listrik</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edition">Edisi</label>
                        <input type="text" class="form-control" name="edition" placeholder="Edisi"
                            value="{{ $item->edition }}">
                    </div>
                    <div class="form-group">
                        <label for="cc">CC</label>
                        <input type="number" class="form-control" name="cc" placeholder="CC Mobil" value="{{ $item->cc }}">
                    </div>
                    <div class="form-group">
                        <label for="kilometers">Kilometer</label>
                        <input type="number" class="form-control" name="kilometers" placeholder="Kilometer"
                            value="{{ $item->kilometers }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Harga"
                            value="{{ $item->price }}">
                    </div>
                    <div class="form-group">
                        <label for="price_description">Deskripsi Harga</label>
                        <div class="radio-tile-group gap-3">
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="price_description" value="Tidak Ada" @if ($item->price_description == 'Tidak Ada') checked @endif>
                                <div class="radio-tile">
                                    <label for="price_description" class="radio-tile-label">Tidak ada</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="price_description" value="Siap pakai" @if ($item->price_description == 'Siap Pakai') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="price_description">Siap pakai</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="price_description" value="Nego" @if ($item->price_description == 'Nego') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="price_description">Nego</label>
                                </div>
                            </div>
                            <div class="input-container col-span-3">
                                <input type="radio" class="radio-button" name="price_description" value="SKA Pemerintah RI"
                                    @if ($item->price_description == 'SKA Pemerintah RI') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="price_description">SKA Pemerintah RI saja (Form A,
                                        Form B, dll)</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="price_description" value="Kredit tersedia"
                                    @if ($item->price_description == 'Kredit Tersedia') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="price_description">Kredit tersedia</label>
                                </div>
                            </div>
                            <div class="input-container">
                                <input type="radio" class="radio-button" name="price_description" value="OTR" @if ($item->price_description == 'OTR') checked @endif>
                                <div class="radio-tile">
                                    <label class="radio-tile-label" for="price_description">OTR</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-semibold" for="vehicle_features">Fitur kendaraan</label>
                        <div class="tabbable-panel">
                            <div class="tabbable-line">
                                <ul class="nav gap-3">
                                    <li class="active">
                                        <a class="btn btn-outline-primary" href="#tab_default_1" data-toggle="tab">
                                            Eksterior </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-outline-primary" href="#tab_default_2" data-toggle="tab">
                                            Interior </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-outline-primary" href="#tab_default_3" data-toggle="tab">
                                            Perlengkapan </a>
                                    </li>
                                </ul>
                                <div class="mt-2 tab-content">
                                    <div class="tab-pane active" id="tab_default_1">
                                        <div class="radio-tile-group gap-3">
                                            @foreach ($eksteriors as $eksterior)
                                                <div class="input-container">
                                                    <input type="checkbox" class="radio-button" name="vehicle_features[]"
                                                        value="{{ $eksterior->id }}"
                                                        @foreach ($item->vehicle_features as $value)
                                                            @if ($eksterior->id == $value->id)
                                                                checked
                                                            @endif
                                                        @endforeach>
                                                    <div class="radio-tile">
                                                        <label class="radio-tile-label"
                                                            for="{{ $eksterior->feature }}">{{ $eksterior->feature }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_default_2">
                                        <div class="radio-tile-group gap-3">
                                            @foreach ($interiors as $interior)
                                                <div class="input-container">
                                                    <input type="checkbox" class="radio-button" name="vehicle_features[]"
                                                        value="{{ $interior->id }}" 
                                                        @foreach ($item->vehicle_features as $value)
                                                            @if ($interior->id == $value->id)
                                                                checked
                                                            @endif
                                                        @endforeach
                                                        >
                                                    <div class="radio-tile">
                                                        <label class="radio-tile-label"
                                                            for="{{ $interior->feature }}">{{ $interior->feature }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_default_3">
                                        <div class="radio-tile-group gap-3">
                                            @foreach ($perlengkapans as $perlengkapan)
                                                <div class="input-container">
                                                    <input type="checkbox" class="radio-button" name="vehicle_features[]"
                                                        value="{{ $perlengkapan->id }}"
                                                        @foreach ($item->vehicle_features as $value)
                                                            @if ($perlengkapan->id == $value->id)
                                                                checked
                                                            @endif
                                                        @endforeach>
                                                    <div class="radio-tile">
                                                        <label class="radio-tile-label"
                                                            for="{{ $perlengkapan->feature }}">{{ $perlengkapan->feature }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="color">Warna</label>
                        <input type="text" class="form-control" name="color" placeholder="Warna Mobil"
                            value="{{ $item->color }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea id="description" name="description" rows="10">{{ $item->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('script')
    <script>
        CKEDITOR.replace('description');

    </script>
    <script type="text/javascript">
        function changeAtiveTab(event, tabID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for (let i = 0; i < aElements.length; i++) {
                aElements[i].classList.remove("underline");
                aElements[i].classList.remove("text-blue-600");
                aElements[i].classList.add("no-underline");
                aElements[i].classList.add("text-black");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("no-underline");
            element.classList.remove("text-black");
            element.classList.add("underline");
            element.classList.add("text-blue-600");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }

    </script>
    <script type="text/javascript">
        var rupiah = document.getElementById('price');
        rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

    </script>


@endsection
