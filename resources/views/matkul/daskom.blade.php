@extends('template_matkul')

@Section('content')
            <div class="judul card-title">
				<h3>
					<ul style="list-style-type:disc;">
                    <i class="fa fa-angle-double-right"></i>Semua Mata Kuliah
                    <i class="fa fa-angle-double-right"></i>Dasar Dasar Komputer
					</ul>
				</h3>
			</div>
            <div class="row row-cols-2 row-cols-md-4 text-center">
				<!-- for -->
                @foreach($daskom as $data)
                <div class="col mb-5" data-aos="fade-down" data-aos-duration="1500">
					<div class="card h-100">
                        <img src="https://img.youtube.com/vi/{{$data->rekaman_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="/lihat/wacth/{{$data->id}}">
                            <h6 class="card-title">
                                {{$data->judul}}
                            </h6>
                        </a>
                        </div>
					</div>
				</div>
                @endforeach
                <!-- end for -->
            </div>
@endSection