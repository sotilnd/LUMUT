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
					  <td><a href="<?= base_url('post/lihat/') . $dat['idpost'].'/'.$dat['username']; ?>" class="btn btn-primary">Lihat</a>
					  <?php if($this->session->userdata('role')=='admin'){?>
                      <a href="<?= base_url('post/hapuspost/') . $dat['idpost'].'/'.$dat['username']; ?>" class="btn btn-danger">Hapus</a></td>
                      <?php } ?>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

