 @extends('layout.admin.main', [
     'namePage' => 'Edit  Tanaman',
 ])
 @section('title', 'edit-tanaman')
 @section('content')
     <div class="panel-header panel-header-sm">
     </div>
     <div class="content">
         <div class="row">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Edit Tanaman</h5>
                     </div>
                     <div class="card-body">
                         <form action="{{ url('tanaman/' . $tnm->id) }}" method="POST" enctype="multipart/form-data">

                             @method('patch')
                             @csrf
                             <div class="row">
                                 <div class="col-md-7 pr-1">
                                     <div class="form-group">
                                         <label>Nama Tanaman</label>
                                         <input type="text" name="nama_tanaman"
                                             class="form-control  @error('nama_tanaman') is-invalid @enderror"
                                             placeholder="Nama Tanaman" value="{{ $tnm->nama_tanaman }}" required>
                                         @error('nama_tanaman')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-5  pl-3">
                                     <div class="form-group">
                                         <label>Famili</label>
                                         <input type="text" name="famili"
                                             class="form-control @error('famili') is-invalid @enderror "
                                             placeholder="Famili" value="{{ $tnm->famili }}" required>
                                         @error('famili')
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
                                             <option value="{{ $tnm->habitat_id }}">{{ $tnm->habitat->nama_habitat }}
                                             </option>
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
                                         <label>Jenis Tanaman</label>
                                         <input type="text" name="jenis"
                                             class="form-control  @error('jenis') is-invalid @enderror" placeholder="Jenis"
                                             value="{{ $tnm->jenis }}" required>
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
                                             placeholder="Deskripsi" value="{{ $tnm->deskripsi }}" style="height: 200px;" required>{{ $tnm->deskripsi }}</textarea>
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
                                         <label>gambar</label>
                                         <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                             name="gambar">
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
             <div class="col-md-4">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Gambar Tanaman</h5>
                     </div>
                     <div class="card-body">
                         <div class="" style="height:150px; width:150px;">
                             <img class="rounded" src="{{ asset('storage/' . $tnm->gambar) }}">
                         </div>
                     </div>
                     <hr>
                 </div>
             </div>
         </div>
     </div>

 @endsection
