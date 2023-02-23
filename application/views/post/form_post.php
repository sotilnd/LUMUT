<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Buat Post</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Buat Post</h6>
            </div>
            <div class="card-body">             
  
		 <div class="row ">
			<div class="col-lg-12 mx-auto">
       
				<div class = "container">
                             <form id="contact-form" role="form" action="<?php echo base_url(). 'Post/form_aksi'; ?>" method="post">
            
				<div class="controls">

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="title">Judul</label>
								<input id="title" type="text" name="title" class="form-control" placeholder="Masukkan Judul Post" >							                            
							</div>
						</div>
					</div>
					
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea id="content" type="text" name="content" class="form-control" placeholder="Masukan isi konten" rows="5">
                            </textarea>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Post" >
                    
                </div>
          
                </div>


        </div>
         </form>
        </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>
</div>
</div>