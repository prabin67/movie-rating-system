
<base href="/movie/">
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3>Manage Critics</h3>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">critics info:</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">sn</th>
                                        <th scope="col">critics name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">phone </th>
                                        <th scope="col">address</th>
                                        <th scope="col">newspaper</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $sn = 1;
                                    $numRows = mysqli_num_rows($result);
                                    $mydetails = $result->fetch_assoc();
                                    foreach ($result as $row) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sn; ?></td>
                                            <td class="text-center"><?php echo $row['cname']; ?></td>
                                            <td class="text-center"><?php echo $row['cemail']; ?></td>
                                            <td class="text-center"><?php echo $row['cphone']; ?></td>
                                            <td class="text-center"><?php echo $row['caddress']; ?></td>
                                            <td class="text-center"><?php echo $row['cnewspaper']; ?></td>
                                            
                                            <td>
                                               
                                                <a class="btn btn-danger" href="Critic/DeleteCritic?cid=<?php echo $row['cid'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
                                            </td>

                        </div>
                    </div>
                </div>
                </td>
                </tr>

            <?php $sn++;
                                    }
            ?>
            </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="../libraries/jquery1/jquery.min.js"></script>
<script src="../libraries/bootstrap1/js/bootstrap.min.js"></script>
<script src="../libraries/js1/script.js"></script>
</body>

</html>