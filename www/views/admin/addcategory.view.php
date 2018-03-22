<?php require 'header.php' ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                 
               
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">Create Major Category</div>
                      <div class="card-body card-block">
                        <?php if (!empty($error)):?>
                        <p class="sufee-alert alert with-close alert-danger alert-dismissible fade show"><?= $error; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                                            </button></p>
                    <?php endif; ?>
                        <form action="/processreg" method="post" class="">
                          <div class="form-group">
                            <div class="input-group">
                                 <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                         <input type="text" id="password2" name="category" placeholder="Category name" class="form-control" required="required">
                          </div> </div>
                          <div class="form-actions form-group"><button type="submit" class="btn btn-secondary btn-sm" name="addcategory">Submit</button></div>
                        </form>
                      </div>
                    </div>
                  </div>




                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">MAJOR CATEGORY LIST</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">CATEGORY NAME</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($categories as $category): ?>
                                <tr>
                                  <th scope="row"><?= $category->id; ?></th>
                               
                                  <td><?= $category->categoryName; ?></td>
                                </tr>
                               
                               <?php endforeach; ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
