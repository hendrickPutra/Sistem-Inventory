<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_warehouse");
while ($record = mysqli_fetch_array($query)) {
  $result[] = $record;
}
?>

<div class="col-lg-9 mt-2">
  <div class="card">
    <div class="card-header">
      Warehouse
    </div>
    <?php
    if (empty($result)) {
      echo "data stok article tidak ada";
    } else {
    ?>
      <div class="card-body text-center">
        <form action="#" method="GET" class="mb-3">
          <input type="text" name="search" placeholder="Search...">
          <button type="submit"><i class="bi bi-search"></i></button>
        </form>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Counter</th>
                <th scope="col">Nama Counter</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Status</th>
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
                  <td>
                    <?php echo $row['kapasitas'] ?>
                  </td>

                  <td class="flex-direction">
                    <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><i class="bi bi-eye "></i></button>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>