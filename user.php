<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            User Page 
        </div>
        <div class="card-body text-center">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#ModalAddUser">Add
                        User</button>
                </div>
            </div>
            <!-- Modal Add user -->
            <div class="modal fade" id="ModalAddUser" tabindex="-1" aria-labelledby="ModalAddUser"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalAddUser">Add User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action=""></form>
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Your Name">
                                        <label for="floatingInput">Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected hidden>Pilih Level User</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        <label for="floatingInput">Level User</label>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea name="" id="" style="height: 100px;" class="form-control"></textarea>
                                <label for="floatingInput">Address</label>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-dark">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal Add user -->

            <!-- Modal View -->
            <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="ModalView" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalView">Data User</h1>
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

            <!-- Modal pencil -->
            <div class="modal fade" id="ModalPencil" tabindex="-1" aria-labelledby="ModalPencil" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalPencil">Input Data</h1>
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
            <!-- Akhir Modal pencile -->

            <!-- Modal Delete -->
            <div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="ModalDelete" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalDelete">Hapus Data</h1>
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
            <!-- Akhir Modal Delete -->

            <?php
            if (empty($result)) {
                echo "data user tidak ada";
            } else {
                ?>


                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Level</th>
                                <th scope="col">Action</th>
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
                                        <?php echo $row['nama'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['username'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['level'] ?>
                                    </td>
                                    <td class="flex-direction">
                                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#ModalView"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                            data-bs-target="#ModalPencil"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ModalDelete"><i class="bi bi-trash3"></i></button>
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
</div>