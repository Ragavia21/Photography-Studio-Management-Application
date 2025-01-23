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
              <a href="index.php?page=category_new" class="btn gradient-blue-grey-blue white"><i class="fa fa-pencil-square-o"></i>&nbsp;   Add Category</a>
              
            </div>
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Category List</h4>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                $i = 1;
                                $selectCategory = "SELECT * FROM `event_category` ";
                                $qryCategory = mysqli_query($con,$selectCategory);
                                while($rowCategory = mysqli_fetch_assoc($qryCategory))
                                {
                                ?>
                                <tr>
                                    <td><?php echo ucfirst($rowCategory['Event_Type']); ?></td>
                                    <td>
                                        <img style="height: 50px; width: 50px; border-radius: 100px;" src="<?php echo "upload/category/".$rowCategory['Event_Image']; ?>">
                                    </td>
                                        <td>
                                            <a href="index.php?page=category_new&category_id=<?php echo $rowCategory['Event_Image']; ?>" class="btn btn-outline-success mr-1"><i class="fa fa-pencil"></i></a>

                                        <!--<a class="btn btn-outline-success mr-1"><i class="fa fa-pencil"></i></a>-->
                                         <a href="index.php?page=category_action_new&action=delete&category_id=<?php echo $rowCategory['category_id']; ?>" class="btn btn-outline-danger mr-1"><i class="fa fa-trash"></i></a>
                                    

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