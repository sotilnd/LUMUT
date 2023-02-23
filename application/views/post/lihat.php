<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Post</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Post</h6>
            </div>
            <div class="card-body">             

             <table>
               <tr>
                 <td><?= $lihat['title']; ?></td>
				 <td><?= $lihat['date']; ?></td>
               </tr>
                <tr>
                 <td> <?= $lihat['content']; ?></td>
               </tr>               
             </table><br>
            </div>            
          </div>

</div>


