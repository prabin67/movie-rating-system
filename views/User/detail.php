
<base href="/movie/">
<div class="content">
    <div class="container">
        <div class="page-title">
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">History</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">sn</th>
                                        <th scope="col">Movie Title</th>
                                        <th scope="col">Your Comment</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $sn =1;
                                    while($row = $this->result->fetch_assoc())                                     {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sn; ?></td>
                                            <td class="text-center"><?php echo $row['mname']; ?></td>
                                            <td class="text-center"><?php echo $row['ucomment']; ?></td>
                                            
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