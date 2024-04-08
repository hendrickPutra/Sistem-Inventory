<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_counter2");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
  <div class="card">
    <div class="card-header">
      Counter 2
    </div>

      <!-- Modal View -->
      <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="ModalView" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalView">Detail counter 2</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal View -->

    <?php
    if (empty($result)) {
      echo "data stok article tidak ada";
    } else {
      ?>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id Article</th>
              <th scope="col">Nama Article</th>
              <th scope="col">Jumlah Stok</th>
              <th scope="col">Harga Satuan</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($result as $row) {
              ?>
              <tr>
                <th scope="row">
                  <?php echo $no++ ?>
                </th>
                <td>
                  <?php echo $row['id'] ?>
                </td>
                <td>
                  <?php echo $row['nama'] ?>
                </td>
                <td>
                  <?php echo $row['jumlah'] ?>
                </td>
                <td>
                  <?php echo $row['harga'] ?>
                </td>
                <td class="flex-direction">
                  <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><i
                      class="bi bi-eye"></i></button>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
      <?php
    }
    ?>
  </div>
</div>