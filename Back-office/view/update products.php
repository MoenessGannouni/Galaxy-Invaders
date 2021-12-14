<?php
    include_once '../model/productM.php';
    include_once '../controller/productC.php';

    $productM = null;

    $productC = new productC();
    if (
        //isset($_POST["ID_Pr"]) &&
		isset($_POST["Name_Pr"]) &&
        isset($_POST["Price_Pr"]) && 
        isset($_POST["Quantity_Pr"]) && 
        isset($_POST["Image_Pr"]) && 
        isset($_POST["Type_Pr"]) && 
        isset($_POST["Category_Pr"]) && 
        isset($_POST["Description_Pr"])&&
        isset($_POST["id_ct"])
    ) {
        
            $productM = new productM(
				$_POST['Name_Pr'],
                $_POST['Price_Pr'],
                $_POST['Quantity_Pr'],
                $_POST['Image_Pr'],
                $_POST['Type_Pr'],
                $_POST['Category_Pr'],
                $_POST['Description_Pr'],
                $_POST["id_ct"]
            );
            $productC->modifierProduit($productM, $_POST["ID_Pr"]);
            
            header('Location:products.php');
    }
    include_once '../model/categorieM.php';
    include_once '../controller/categorieC.php';

   

    $categorieM = null;

    $categorieC = new categorieC();
    $listecategories=$categorieC->affichercategorie(); 

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Products </title>
   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/purchase.css">

<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>


<body>
  <div class="container-scroller"> 
    <!-- _navbar.php -->
    <?php 
    include_once('_navbar.php');
    ?>
    <!-- end _navbar.php -->

    <div class="container-fluid page-body-wrapper">
    <!-- _settings-panel.php -->
      <?php 
      include_once('_settings-panel.php');
      ?>
    <!-- end _settings-panel.php -->

    <!-- _sidebar.php -->
      <?php 
      include_once('_sidebar.php');
      ?>
    <!-- end _sidebar.php -->

    <!-- content-wrapper -->  
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-sm-12">
          <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product Table</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="data-table-main icon-list-demo">
                                                            <div class="row">
                                                                <?php
                                                                    if (isset($_POST['ID_Pr'])){
                                                                        $productM = $productC->retrieveProduit($_POST["ID_Pr"]);  
                                                                    }                                                                      
                                                                ?>
                                                                
                                                                        <form action="" method="POST">
                                                                            <h1>Edit Product</h1>
                                                                            <input type="hidden"  id="ID_Pr" value="<?php echo $productM['ID_Pr']; ?>" name="ID_Pr"><br>

                                                                            <input class="champs" type="text" value="<?php echo $productM['Name_Pr']; ?>"  id="Name_Pr" name="Name_Pr">
                                                                            <p id="errorName" class="error"></p>

                                                                            <input class="champs" type="number" value="<?php echo $productM['Price_Pr']; ?>" id="Price_Pr" name="Price_Pr">
                                                                            <p id="errorPrice" class="error"></p>

                                                                            <input class="champs" type="number" value="<?php echo $productM['Quantity_Pr']; ?>" id="Quantity_Pr" name="Quantity_Pr">
                                                                            <p id="errorQuantity" class="error"></p>

                                                                            <input type="file" id="Image_Pr" value="<?php echo $productM['Image_Pr']; ?>" name="Image_Pr"><br>

                                                                            <input class="champs" type="text" value="<?php echo $productM['Type_Pr']; ?>" id="Type_Pr" name="Type_Pr">
                                                                            <p id="errorType" class="error"></p>

                                                                            <input class="champs" type="text" value="<?php echo $productM['Category_Pr']; ?>" id="Category_Pr" name="Category_Pr">
                                                                            <p id="errorCategory" class="error"></p>

                                                                            <input class="champs" value="<?php echo $productM['Description_Pr']; ?>" id="Description_Pr" name="Description_Pr">
                                                                            <p id="errorDescription" class="error"></p>

                                                                            <input class="champs" type="number" value="<?php echo $productM['id_ct']; ?>" id="id_ct" name="id_ct">
                                                                            
                                                                            <label>Nom_ID_categorie</label>
                                                                                    <select class="form-control" name="id_ct" id="id_ct">
                                                                                    
                                                                                    <?php 
                                                                                    foreach ($listecategories as $categorie){
                                                                                    ?>
                                                                                    <option value="<?php echo $categorie['id_ct']; ?>"><?php echo $categorie['Category_Pr']; ?>-<?php echo $categorie['id_ct']; ?></option>
                                                                                    <?php
                                                                                    }
                                                                                    ?>
                                                                                    
                                                                                    </select>

                                                                            <input type="submit" value="Submit" class="add_btn">
                                                                            <button type="submit" class="add_btn"><a href="products.php" style="color:white">Cancel</a></button>
                                                                        </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
          </div>
        </div>
    <!-- content-wrapper ends -->
    <!-- _footer.php -->
        <?php 
        include_once('footer.php');
        ?>
    <!-- end footer.php -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../assets/js/off-canvas.js"></script>
  <script src="../assets/js/hoverable-collapse.js"></script>
  <script src="../assets/js/template.js"></script>
  <script src="../assets/js/settings.js"></script>
  <script src="../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/js/dashboard.js"></script>
  <script src="../assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  
</body>

</html>