<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>admin</title>
  <?php  include_once('../include_admin/lien.php'); ?>
  
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php  include_once('../include_admin/aside.php'); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php  include_once('../include_admin/nav.php'); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
           
          </div>

       
          <div class="row">
          <div class="col-xl-12 mt-3">
                            <form action="traitement_hill.php" method="POST" class="shadow p-3">
                                <h4 class="text-center">Hill</h4>
                                <div class="row">
                                     <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12 p-3">
                                        <label for="">Choisir l'operation<span class="text-danger">*</span></label>
                                        <select class="form-control" name="operation" id="">
                                          <option value="1">Chiffrer</option>
                                          <option value="2">Dechiffrer</option>
                                        </select>
                                        
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12 p-3">
                                        <label for="">Message<span class="text-danger">*</span></label>
                                        <input required type="text" name="message" class="form-control" placeholder="Entrez le nessage"
                                        >
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3 p-3">
                                        <label for="">Valeur de a<span class="text-danger">*</span></label>
                                        <input required type="text" name="a" class="form-control" placeholder="Entrez la valeur de a"
                                        >
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3 p-3">
                                        <label for="">valeur de b<span class="text-danger">*</span></label>
                                        <input required type="text" name="b" class="form-control" placeholder="Entrez la valeur de b"
                                        >
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3 p-3">
                                        <label for="">valeur de c<span class="text-danger">*</span></label>
                                        <input required type="text" name="c" class="form-control" placeholder="Entrez la valeur de c"
                                        >
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3 p-3">
                                        <label for="">Valeur de d<span class="text-danger">*</span></label>
                                        <input required type="text" name="d" class="form-control" placeholder="Entrez la valeur de d"
                                        >
                                    </div>

                                   


                                   

                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                                        <input type="submit" name="chiffrer" class="btn btn-success w-100" value="Chiffrer">
                                    </div>
                                  
                                </div>
                            </form>

                            <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12 p-3">
                                        <label for="">Resultat<span class="text-danger">*</span></label>
                                        <?php if(isset($_GET['resultat']) ){?>
                                            <input required type="text" name="resultat" class="form-control" value=<?=$_GET['resultat']?>>
                                        <?php }?>
                                    </div>
                        </div>
            
          </div>

   
        <!---Container Fluid-->
      </div>
  
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 <?php  include_once('../include_admin/script.php'); ?>

  
</body>

</html>