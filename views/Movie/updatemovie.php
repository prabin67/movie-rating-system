
<base href="/movie/">
<div class="content">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">Movie Details:</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">sn</th>
                                        <th scope="col">Movie name</th>
                                        <th scope="col">Movie actor</th>
                                        <th scope="col">Movie director</th>
                                        <th scope="col">Movie writer</th>
                                        <th scope="col">Movie genre</th>
                                        <th scope="col">Movie plot</th>
                                        <th scope="col">Movie year</th>
                                         <th scope="col">Movie image</th>
                                         <th scope="col">Uplode date</th>
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
                                            <td class="text-center"><?php echo $row['mname']; ?></td>
                                            <td class="text-center"><?php echo $row['mactor']; ?></td>
                                            <td class="text-center"><?php echo $row['mdirector']; ?></td>
                                            <td class="text-center"><?php echo $row['mwriter']; ?></td>
                                            <td class="text-center"><?php echo $row['mgenre']; ?></td>
                                            <td class="text-center"><?php echo $row['mplot']; ?></td>
                                            <td class="text-center"><?php echo $row['myear']; ?></td>
                                            <td class="text-center"><?php echo $row['mimage']; ?></td>
                                            <td class="text-center"><?php echo $row['uplode_date']; ?></td>
                                            <td>
                                               
                                                <a class="btn btn-danger" href="Movie/DeleteMovie?mid=<?php echo $row['mid'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
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