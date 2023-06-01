 @extends('layout.admin.main', [
     'namePage' => 'List  Tanaman',
 ])
 @section('title', 'Tambah-tanaman')
 @section('content')

     <div class="panel-header panel-header-sm">
     </div>
     <div class="content">
         <div class="row">
             <div class="col-md">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Tambah Tanaman</h5>
                     </div>
                     <div class="card-body">
                         <form action="{{ '/tanaman' }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                                 <div class="col-md-5">
                                     <div class="form-group">
                                         <label>Nama Tanaman</label>
                                         <input type="text" name="nama_tanaman"
                                             class="form-control  @error('nama_tanaman') is-invalid @enderror"
                                             placeholder="Nama Tanaman" value="{{ old('nama_tanaman') }}" required>
                                         @error('nama_tanaman')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3 pl-3">
                                     <div class="form-group">
                                         <label>Kingdom</label>
                                         <select name="kingdom" class="form-control  @error('kingdom') is-invalid @enderror"
                                             placeholder="kingdom">
                                             <option value="{{ old('kingdom') }}">{{ old('kingdom') }}</option>
                                             <option value="Plantae (tumbuhan)">Plantae (tumbuhan)</option>
                                             <option value="Fungi (jamur)">Fungi (jamur)</option>
                                             <option value="Protista (protista)">Protista (protista)</option>
                                         </select>
                                         @error('kingdom')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3 pl-3">
                                     <div class="form-group">
                                         <label>Sub Kingdom</label>
                                         <select name="subkingdom"
                                             class="form-control  @error('subkingdom') is-invalid @enderror">
                                             <option value="{{ old('subkingdom') }}">{{ old('subkingdom') }}</option>
                                             <option value="Tracheobionta">Tracheobionta</option>
                                             <option value="Bryobionta">Bryobionta</option>
                                             <option value="Chlorobionta">Chlorobionta(protista)</option>
                                             <option value="Rhodobionta">Rhodobionta</option>
                                             <option value="Phaeobionta">Phaeobionta</option>
                                             <option value="Mycetobionta">Mycetobionta</option>
                                         </select>
                                         @error('subkingdom')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>

                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-5 pl-3">
                                     <div class="form-group">
                                         <label>Divisi</label>
                                         <select name="divisi" class="form-control  @error('divisi') is-invalid @enderror">
                                             <option value="{{ old('divisi') }}">{{ old('divisi') }}</option>
                                             <option value="Magnoliophyta (Tumbuhan berkeping dua)">Magnoliophyta (Tumbuhan
                                                 berkeping dua)</option>
                                             <option value="Pteridophyta (Tumbuhan paku)">Pteridophyta (Tumbuhan paku)
                                             </option>
                                             <option value="Cycadophyta (Tumbuhan sikas)">Cycadophyta (Tumbuhan sikas)
                                             </option>
                                             <option value="Coniferophyta (Tumbuhan berbiji terbuka)">Coniferophyta
                                                 (Tumbuhan berbiji terbuka)</option>
                                             <option value="Bryophyta (Tumbuhan Lumut)">Bryophyta (Tumbuhan Lumut)</option>
                                         </select>
                                         @error('divisi')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-5 pl-3">
                                     <div class="form-group">
                                         <label>Sub divisi</label>
                                         <select name="subdivisi"
                                             class="form-control  @error('subdivisi') is-invalid @enderror">
                                             <option value="{{ old('subdivisi') }}">{{ old('subdivisi') }}</option>
                                             <option value="Angiospermae (Tumbuhan berbunga)">Angiospermae (Tumbuhan
                                                 berbunga)</option>
                                             <option value="Gymnospermae (Tumbuhan berbiji terbuka)">Gymnospermae (Tumbuhan
                                                 berbiji terbuka)</option>
                                             <option value="Bryophyta (Tumbuhan Lumut)">Bryophyta (Tumbuhan Lumut)</option>
                                             <option value="Pteridophyta (Tumbuhan paku)">Pteridophyta (Tumbuhan paku)
                                             </option>
                                         </select>
                                         @error('subdivisi')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-4 pl-3">
                                     <div class="form-group">
                                         <label>Kelas</label>
                                         <select name="kelas" class="form-control  @error('kelas') is-invalid @enderror">
                                             <option value="{{ old('kelas') }}">{{ old('kelas') }}</option>
                                             <option value="Liliopsida (Monokotil)">Liliopsida (Monokotil)</option>
                                             <option value="Magnoliopsida (Dikotil)">Magnoliopsida (Dikotil)</option>
                                             <option value="Pinopsida (Tumbuhan konifer)">Pinopsida (Tumbuhan konifer)
                                             </option>
                                             <option value="Filicopsida (Tumbuhan paku) ">Filicopsida (Tumbuhan paku)
                                             </option>
                                             <option value="Bryopsida (Tumbuhan lumut)">Bryopsida (Tumbuhan lumut)</option>
                                         </select>
                                         @error('kelas')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 pl-3">
                                     <div class="form-group">
                                         <label>Sub Kelas</label>
                                         <input type="text" name="subkelas"
                                             class="form-control @error('subkelas') is-invalid @enderror "
                                             placeholder="sub-kelas" value="{{ old('famili') }}" required>
                                         @error('subkelas')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Ordo</label>
                                         <input type="text" name="ordo"
                                             class="form-control @error('ordo') is-invalid @enderror " placeholder="ordo"
                                             value="{{ old('ordo') }}" required>
                                         @error('ordo')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>

                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Famili</label>
                                         <input type="text" name="famili"
                                             class="form-control @error('famili') is-invalid @enderror "
                                             placeholder="Famili" value="{{ old('famili') }}" required>
                                         @error('famili')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Genus</label>
                                         <input type="text" name="genus"
                                             class="form-control @error('genus') is-invalid @enderror "
                                             placeholder="genus" value="{{ old('genus') }}" required>
                                         @error('genus')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Spesies</label>
                                         <input type="text" name="spesies"
                                             class="form-control @error('spesies') is-invalid @enderror "
                                             placeholder="spesies" value="{{ old('spesies') }}" required>
                                         @error('spesies')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Daerah endemis</label>
                                         <input type="text" name="daerah_endemis"
                                             class="form-control @error('daerah_endemis') is-invalid @enderror "
                                             placeholder="daerah endemis" value="{{ old('daerah_endemis') }}" required>
                                         @error('daerah_endemis')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 pr-1">
                                     <div class="form-group">
                                         <label>Habitat</label>
                                         <select name="habitat_id"
                                             class="form-control  @error('habitat_id') is-invalid @enderror">
                                             <option value="{{ old('habitat') }}">{{ old('habitat') }}</option>
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
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label>Karateristik</label>
                                         <textarea type="text" name="karateristik" class="form-control @error('karateristik') is-invalid @enderror"
                                             placeholder=" Masukan karateristik" value="{{ old('karateristik') }}" required>{{ old('karateristik') }}</textarea>
                                         @error('karateristik')
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
                                             placeholder="Masukan Deskripsi" value="{{ old('deskripsi') }}" required>{{ old('deskripsi') }}</textarea>
                                         @error('deskripsi')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
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
             {{-- <div class="col-md-4">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Gambar Tanaman</h5>
                     </div>
                     <div class="card-body">

                     </div>
                     <hr>
                 </div>
             </div> --}}
         </div>
     </div>

 @endsection
