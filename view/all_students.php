
<!doctype html>
<html lang="en">

<head>
  <title>All Student</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="conteiner">
    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h4>All Students</h4>
                <a href="./view/add_student.php" class="btn btn-sm btn-primary">Add Student</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $result = mysqli_query($con, "SELECT * FROM `marksheets`");
                        $sl = 0;
                        while($row = mysqli_fetch_assoc($result)){
                        $sl++;
                        ?>
                        <tr>
                            <th scope="row"><?= $sl ?></th>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['roll'] ?></td>
                            <td>
                                <?php
                                if($row['status'] == 1){
                                    ?>
                                    <a class="badge bg-success text-white" href="update.php?user_deactive=<?= $row['id'] ?>"><i class="bx bx-transfer-alt me-1"></i>Active</a>
                                    <?php
                                }else{
                                    ?>
                                    <a class="badge bg-danger text-white" href="update.php?user_active=<?= $row['id'] ?>"><i class="bx bx-transfer-alt me-1"></i>Deactive</a>
                                    <?php
                                }
                                ?>
                            </td>
                            <td>
                                <a href="" class="fs-4 lh-4 text-mute"><i class='bx bx-edit-alt'></i></a>
                                <a href="view/marksheet.php?user_id=<?= $row['id'] ?>" class="fs-4 lh-4 text-mute"><i class='bx bx-show'></i></a>
                                <a href="" class="fs-4 lh-4 text-danger"><i class='bx bx-trash'></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>