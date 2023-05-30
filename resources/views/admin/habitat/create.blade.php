@extends('layout.admin.main', [
     'namePage' => 'List  Habitat',
 ])
 @section('title', 'Tambah-habitat')
 @section('content')

     <div class="panel-header panel-header-sm">
     </div>
     <div class="content">
         <div class="row">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Tambah Habitat</h5>
                     </div>
                     <div class="card-body">
                         <form action="{{ '/habitat' }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                                 <div class="col-md-7 pr-1">
                                     <div class="form-group">
                                         <label>Nama Habitat</label>
                                         <input type="text" name="nama_habitat"
                                             class="form-control  @error('nama_habitat') is-invalid @enderror"
                                             placeholder="Nama Habitat" value="{{ old('nama_habitat') }}" required>
                                         @error('nama_habitat')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-5  pl-3">
                                     <div class="form-group">
                                         <!-- <labe>Deskripsi</label>
                                         <input type="text" name="deskripsi"
                                             class="form-control @error('deskripsi') is-invalid @enderror "
                                             placeholder="Deskripsi" value="{{ old('deskripsi') }}" required>
                                         @error('deskripsi') -->
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-5 pr-1">
                                     <div class="form-group">
                                         <label>Habitat</label>
                                         <select name="habitat_id"
                                             class="form-control  @error('habitat_id') is-invalid @enderror">
                                             <!-- <option value="">Pilih Habitat</option> -->
                                             @foreach ($habitat as $hbt)
                                                 <option value="{{ $hbt->id }}">{{ $hbt->nama_habitat }}</option>
                                             @endforeach
                                         </select>
                                         @error('habitat_id')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-6 pl-3">
                                     <div class="form-group">
                                         <!-- <label>Deskripsi</label> -->
                                         <!-- <input type="text" name="jenis"
                                             class="form-control  @error('jenis') is-invalid @enderror" placeholder="Jenis"
                                             value="{{ old('jenis') }}" required> -->
                                         @error('jenis')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label>Deskripsi</label>
                                         <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                             placeholder="Deskripsi" value="{{ old('deskripsi') }}" required></textarea>
                                         @error('deskripsi')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <div class="form-goup">
                                         <!-- <label>gambar</label>
                                         <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                             name="gambar"> -->
                                         @error('gambar')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <button type="submit" class="btn btn-primary mt-5 ">Submit</button>
                         </form>
                     </div>
                 </div>
             </div>
             {{-- <div class="col-md-4">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Gambar Habitat</h5>
                     </div>
                     <div class="card-body">

                     </div>
                     <hr>
                 </div>
             </div> --}}
         </div>
     </div>

 @endsection
