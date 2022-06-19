<?php include 'include.php';
    $conn = mysqli_connect('localhost', 'root', 'V@nchhawngs03', 'FTP');
    $getQuery = "SELECT * FROM fupload";
?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Ege i rawn tih dawn?</h1>
        <p class="lead text-muted">File share awlsam nan inchhung network vel mai2 a hman tur</p>
      </div>
    </div>
</section>
<div class="container">

  <ul class="list-group">
    <?php 
      $run = mysqli_query($conn,$getQuery);
      while($rows = mysqli_fetch_assoc($run)){
        ?>
              <li class="list-group-item d-flex justify-content-between"><?php echo $rows['filename'] ?><a class="btn btn-primary" href="download.php?file=<?php echo $rows['filename'] ?>">Download</a></li>
        <?php 
      }
        ?>



    </ul>
</div>

