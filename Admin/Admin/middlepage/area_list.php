<div class="wrapper">

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
             <?php if(isset($_SESSION['succ']) && $_SESSION['succ']) { echo $_SESSION['succ'];unset($_SESSION['succ']); }  ?>

         <?php if(isset($_SESSION['delMsg']) && $_SESSION['delMsg']) { echo $_SESSION['delMsg'];unset($_SESSION['delMsg']); }  ?>

         <?php if(isset($_SESSION['UpMsg']) && $_SESSION['UpMsg']) { echo $_SESSION['UpMsg'];unset($_SESSION['UpMsg']); }  ?>
           
            <div class="card">
                <div class="card-header">
                     <div class="mb-3 pull-right">
                    <a href="index.php?page=area" class="btn gradient-blue-grey-blue white"><i class="fa fa-pencil-square-o"></i>&nbsp;   Add Area</a>
              </div>
              
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Area List</h4>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Sr no.</th>
                                    <th>Area Name</th>
                                    <th>City Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                $i = 1;
                                $selectState = "SELECT * from area ,city where area.City_idCity = city.idCity";
                                $qryState = mysqli_query($con,$selectState);
                                while($rowState = mysqli_fetch_assoc($qryState))
                                {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $rowState['Area_Name']; ?></td>
                                    <td><?php echo $rowState['City_Name']; ?></td>
                                    <td>
                                        <!-- <a class="btn btn-outline-success mr-1"><i class="fa fa-pencil"></i></a> -->

                                      <a href="index.php?page=area_action&action=delete&area_id=<?php echo $rowState['idArea']; ?>" class="btn btn-outline-danger mr-1"><i class="fa fa-trash"></i></a>
                                    </td>
                               
                                </tr>
                            <?php $i++; } ?>

                            </tbody>
                          
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Language - Comma decimal place table -->

            </div>
          </div>
        </div>
      </div>
    </div>
