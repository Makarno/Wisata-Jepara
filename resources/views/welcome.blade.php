@extends('layouts.app')
@section('wisata')
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
        <h1 class="display-4 text-white font-weight-bold mb-4">WELCOME TO JEPARA</h1>
        <div class="form-group has-search ">
            <span class="form-control-feedback">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </div>
</div>
<div class="container">
    <h3 class="text-center font-weight-bold mt-5 mb-4">PUPULAR DESTINATION</h3>
    <P class="text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate auctor vestibulum mi varius ornare rutrum
        consectetur
        volutpat consectetur.
        Proin
        et eget consequat scelerisque. Diam sed lobortis vel amet lectus. Ac tortor, ut lacus interdum molestie lectus nisi, tellus velit.</P>
    <div class="card-deck">
        <div class="card">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"" class=" card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even
                    longer
                    content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"" class=" card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even
                    longer
                    content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"" class=" card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even
                    longer
                    content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <div id='map' class="mb-5" style='width: 100%; height: 500px'></div>
        </div>
    </div>
</div>
<footer class="mt-2 bg-primary">
    <div class="container gx-4" id="contact">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="row row-cols-1 row-cols-lg-4 py-5 justify-content-center">
                <div class="col">
                    <p class="mb-4 text-dark fs-6 mt-4 mb-sm-3 opacity-75">Mitra Terpercaya Menuju Koperasi Yang Sehat, Kuat,
                        Mandiri dalam mewujudkan Kesejahteraan Anggota</p>
                </div>
                <div class="col">
                    <div class="h5 mb-3 text-dark">Informasi</div>
                    <div class="d-flex">
                        <i class="bi-telephone-plus-fill text-dark opacity-75"></i>
                        <p class="px-2 text-dark mb-0 opacity-75">+62 813 4812 3462</p>
                    </div>
                    <div class="d-flex">
                        <i class="bi-telephone-plus-fill text-white opacity-75"></i>
                        <p class="px-2 text-dark mb-0 opacity-75 mb-4">+62 852 4290 7558</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h5 mb-3 text-dark">Alamat</div>
                    <div class="d-flex opacity-75">
                        <i class="bi-geo-alt text-white"></i>
                        <p class="px-2 text-dark mt-0 mb-4">Jln. Posros Samasundu-Napo (Depan Kantor Desa Samasundu)</p>
                    </div>
                    <p class="mb-4 text-white fs-6 mt-4 mb-sm-3 opacity-75"></p>
                </div>
                <div class="col">
                    <div class="h5 mb-3 text-dark">Tautan</div>
                    <ul class="navbar-nav navbar-dark ms-auto mb-0 mb-lg-0 lh-1">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sejarah">Sejarah</a></li>
                        <li class="nav-item"><a class="nav-link" href="#visi-misi">Visi-Misi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#struktur">Struktur Organisasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection

@push('script')
<script>
    const defaultLocation = [110.667843, -6.5860825];
    mapboxgl.accessToken = "{{env('KEY_MAPBOX')}}";
    var map = new mapboxgl.Map({
        container: 'map',
        center: defaultLocation,
        zoom: 13,
        style: 'mapbox://styles/mapbox/streets-v11'
    });
    map.addControl(new mapboxgl.NavigationControl());
</script>

@endpush
