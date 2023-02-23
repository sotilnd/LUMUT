<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Post</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">			
             <a href="<?= base_url('post/form_post/'.$this->session->user_id); ?>" class="btn btn-sm btn-dark mb-3">Buat Post</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Judul</th>
					  <th>Tanggal</th>
					  <th>Author</th>
                      <th>Isi Content</th>					  
                       <?php if($this->session->userdata('role')=='admin'){ ?>
                      <th>Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($request as $dat) : ?>
				  
                    <tr>					                      
					  <td><?= $dat['title']; ?></td>					  
                      <td><?= $dat['date']; ?></td>                
					  <td><?= $dat['username']; ?></td>                
                      <td><?= $dat['content']; ?></td>
                      <td><a href="<?= base_url('post/lihat/') . $dat['idpost'].'/'.$dat['username']; ?>" class="btn btn-primary">Lihat</a></td>                      
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Form Permohonan</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?//= base_url('Permohonan/formpermohonan') ?>" method="POST" enctype="multipart/form-data" >
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="NPWP" name="npwp" id="npwp" required>
                  </div> 
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Pemilik" name="nama_pemilik" id="nama_pemilik" required>
                  </div> 
                 <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Perusahaan" name="nama_perusahaan" id="nama_perusahaan" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Bidang Usaha" name="bidang_usaha" id="bidang_usaha" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Alamat Perusahaan" name="alamat_perusahaan" id="alamat_perusahaan" required>
                  </div>
                  <div class="form-group">
                    <label>BPJS Ketenagakerjaan <small>.jpeg</small></label>
                     <input class="form-control form-control-sm mb-3" name="bpjs" type="file" required>
                  </div>
                   <div class="form-group">
                    <label>foto 4x6 <small>.jpeg</small></label>
                     <input class="form-control form-control-sm mb-3" name="foto" type="file" required>
                  </div>
                   <div class="form-group">
                    <label>Surat Keterangan Domisili Tempat Usaha <small>.pdf</small></label>
                     <input class="form-control form-control-sm mb-3" name="skdtu" type="file" required>
                  </div>
                   <div class="form-group">
                    <label>Surat Izin Usaha Kecamatan <small>.pdf</small></label>
                     <input class="form-control form-control-sm mb-3" name="siuk" type="file" required>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
-->