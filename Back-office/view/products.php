<?php
    include_once 'C:\xampp\htdocs\Back-office\model\productM.php';
    include_once 'C:\xampp\htdocs\Back-office\controller\productC.php';

    $error = "";

    $productM = null;

    $productC = new productC();
    //$productU = new productC();
    //$productD = new productC();
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
                //$_POST['ID_Pr'],
				$_POST['Name_Pr'],
                $_POST['Price_Pr'],
                $_POST['Quantity_Pr'],
                $_POST['Image_Pr'],
                $_POST['Type_Pr'],
                $_POST['Category_Pr'],
                $_POST['Description_Pr'],
                $_POST["id_ct"]
            );
            $productC->ajouterProduit($productM);  
            //$productU->modifierProduit($productM, $_POST["ID"]);
            header('Location:products.php');
            //$productD->supprimerProduit($_POST["ID_Pr"]);
      
    }
    $listeproduits=$productC->afficherproduits(); 
    
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
          <div class="card-header-right ">
                                                            <ul class="list-unstyled card-option ">
                                                                <li><i class="fa fa fa-wrench open-card-option "></i></li>
                                                                <li><i class="fa fa-window-maximize full-card "></i></li>
                                                                <li><i class="fa fa-minus minimize-card "></i></li>
                                                                <li><i class="fa fa-refresh reload-card "></i></li>
                                                                <li><i class="fa fa-trash close-card "></i></li>
                                                            </ul>
                                                        </div>
          <div class="card-block ">
                                                        <div class="pie_chart" id="pie_chart" style="margin: 0 auto;width:600px;height: 400px;"></div>
                                                    </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product Table</h5>
                                                        <button class="btn btn-primary" onclick="window.print()" >PRINT</button>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="data-table-main icon-list-demo">
                                                            <div class="row">
                                                                <table id="product_table" border="1">
                                                                    <tr>
                                                                        <td>Product ID</td>
                                                                        <td>Name</td>
                                                                        <td>Price</td>
                                                                        <td>Quantity</td>
                                                                        <td>Image</td>
                                                                        <td>Type</td>
                                                                        <td>Category</td>
                                                                        <td>Description</td>
                                                                        <td>Id categorie</td>
                                                                        <td>Update</td>
                                                                        <td>Delete</td>
                                                                    </tr>
                                                                    <?php
                                                                        foreach($listeproduits as $produit){
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $produit['ID_Pr']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $produit['Name_Pr']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $produit['Price_Pr']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $produit['Quantity_Pr']; ?>
                                                                        </td>
                                                                        <td>
                                                    
                                                                        <?php echo'<img src="assets/images/'.$produit['Image_Pr'].'"width="100;" height="120" alt="image">'  ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $produit['Type_Pr']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $produit['Category_Pr']; ?>
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <?php echo $produit['Description_Pr']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $produit['id_ct']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <form action="update products.php" method="POST">
                                                                                <input type="submit" class="add_btn" value="Edit">
                                                                                <input type="hidden" value=<?PHP echo $produit['ID_Pr']; ?> name="ID_Pr">
                                                                            </form>
                                                                        </td>
                                                                        <td>
                                                                        <form action="delete products.php" method="POST">
                                                                            <button type="submit" class="add_btn">Delete
                                                                                <input type="hidden" value=<?PHP echo $produit['ID_Pr']; ?> name="ID_Pr">
                                                                            </button>
                                                                        </form>
                                                                            
                                                                        </td>
                                                                </tr>
                                                                <?php } ?>
                                                                </table>
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
  <script>
                            function addproduct() {

                                document.getElementById("myform").style.display = "block";

                            }

                            function updateProduct() {

                                document.getElementById("myform1").style.display = "block";

                                }

                            function closeform() {
                                document.getElementById("myform").style.display = "none";
                            }

                            // Store
                            var name=document.getElementById("Name_Pr").value;
                            
                            //alert(name);
                            localStorage.setItem("n","name");
                            
                        </script>
 <script type="text/javascript">
        window.onload = function() {
            google.load("visualization", "1.1", {
                packages: ["corechart"],
                callback: 'drawChart'
            });
        };

        function drawChart() {
            var data = new google.visualization.arrayToDataTable([
                ['Language', 'Rating'],
                <?php
                    foreach($listeproduits as $produit){
                        echo "['".$produit['Name_Pr']."', ".$produit['Quantity_Pr']."],";
                    }
                ?>
            ]);

            var options = {
                title: 'Products Stats',
            };

            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
</body>

</html>