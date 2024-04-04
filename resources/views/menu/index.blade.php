@extends ('template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg 12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Master</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item active">Menu Treatment</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                </ol>
            </div>
        </div>
        {{-- form validation --}}
        <div class="row"> 
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Menu Treatment
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <a href="{{ route('tambah_data_menu') }}"><button class="btn btn-primary"
                                type="button"><i class="bi bi-plus"> Tambah</i></button></a>
                    </div>
                </section>
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Nama Treatment</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                        <label for="floatingEmail">Kategori</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Harga</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Deskripsi</label>
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End floating Labels Form -->
        
            </div>
        </div>   --}}
    </section>
</section>  
<br><br>
<table class="table table-hover" style="border-radius: 50px">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Treatment</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $no }}</th> 
                <td>{{ $item->nama_treatment }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->deskripsi}}</td>
                <td>
                    <div class="btn-group">
                        <form action="/hapus_data_menu/{{ $item['id'] }}" method="POST">
                            @csrf
                            <a href="/edit_data_menu/{{ $item['id'] }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php 
            $no++;
            ?>
        @endforeach
    </tbody>
</table>
@endsection

