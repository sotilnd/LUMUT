<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="" method="POST">
                   <div class="form-group" hidden>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $account['username']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $account['name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" value="<?= $account['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control">
                      <option value="admin" <?php if($account['role']=="admin"){echo "selected";} ?> class="form-control">admin</option>
                      <option value="author" <?php if($account['role']=="author"){echo "selected";} ?> class="form-control">author</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>