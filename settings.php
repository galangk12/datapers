<?php
$dt = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users"));
?>

<div class="card-body" style="background:white;">
                <form class="" action="fungsi.php?p=edit_users" method="post">
                 <div class="container-fluid" style="background:white;">
                  <div class="row" style="background:white;">
                  <h5>Ubah Password</h5>
                  <input type="hidden" name="id" class="form-control" value="<?= $dt['id_users']?>" required>
                    <table class="table" border="0">
                    <tr>
                      <td>Username</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <?= $dt['username']?>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" value="<?= $dt['password']?>" required>
                      </div>
                    </td>
                   </tr>
                    </table>
                    <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
            </div>
        </div>
</div>