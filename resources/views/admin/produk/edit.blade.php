@extends('admin.layout.main')
@section('title'){{'Edit Product'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Product</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/adminproduk/{{$product -> id}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                        <input value="{{$product -> nama}}" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama">
                        <div id="textHelp" class="form-text">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label><br>
                        <img src="@if (!$product -> image)
                                            {{ asset('/assets/img/produk/'.$product -> nama.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$product -> image)}}
                                          @endif" alt="" width="100px">
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                        <input value="{{$product -> deskripsi}}" type="Textarea" class="form-control" id="exampleInputPassword1" name="deskripsi">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection