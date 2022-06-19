<?php include 'include.php' ?>

<body class="text-center">
    
<main class="form-signin w-50 m-auto my-3">
  <form action="backside.php" method="POST" enctype="multipart/form-data">
    <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Upload a file</h1>

    <div class="form-floating">
      <input type="file" class="form-control" name='file' id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">File</label>
    </div>



    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Upload</button>

  </form>
</main>
</body>

