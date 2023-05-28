 @extends('layout.main', [
     'namePage' => 'Tambah-tanaman',
 ])
 @section('title', 'Tambah-tanaman')
 @section('content')

     <div class="panel-header panel-header-sm">
     </div>
     <div class="content">
         <div class="row">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Tambah Tanaman</h5>
                     </div>
                     <div class="card-body">
                         <form>
                             <div class="row">
                                 <div class="col-md-7 pr-1">
                                     <div class="form-group">
                                         <label>Nama Tanaman</label>
                                         <input type="text" class="form-control" placeholder="Nama Tanaman">
                                     </div>
                                 </div>
                                 <div class="col-md-5  pl-3">
                                     <div class="form-group">
                                         <label>Famili</label>
                                         <input type="text" class="form-control" placeholder="Famili">
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-5 pr-1">
                                     <div class="form-group">
                                         <label>Habitat</label>
                                         <input type="text" class="form-control" placeholder="Habitat">
                                     </div>
                                 </div>
                                 <div class="col-md-6 pl-3">
                                     <div class="form-group">
                                         <label>Jenis Tanaman</label>
                                         <input type="text" class="form-control" placeholder="Jenis Tanaman">
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label>Deskripsi</label>
                                         <textarea type="text" class="form-control" placeholder="Deskripsi" rows="6"></textarea>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-6">
                                     <div class="form-goup">
                                         <label>gambar</label>
                                         <input type="file" class="form-control">
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

                     </div>
                     <hr>
                 </div>
             </div>
         </div>
     </div>

 @endsection
