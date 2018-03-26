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
                      <div class="card-header"><strong>CREATE MAJOR CATEGORY</strong></div>
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

                        <div class="card">
                      <div class="card-header">
                        <strong>CREATE SUBCATEGORY</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="/processreg" method="post" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Select Major Category</label></div>
                            <div class="col-12 col-md-9">                   
                              <select name="majorcategory" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <?php foreach ($categories as $category): ?>
                                <option value="<?= $category->id; ?>"><?= strtoupper($category->categoryName); ?></option>
                               <?php endforeach; ?>
                              </select>         
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Subcategory Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="subcatname" placeholder="Subcategory name" class="form-control"></div>
                          </div>
                                          
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="csubcat"><i class="fa fa-dot-circle-o"></i> Submit
                        </button><button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
                      </div>
                      </form>
                    </div>
                      
                        </div>


                            <div class="card">
                      <div class="card-header">
                        <strong>CREATE</strong> PRODUCT
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Name" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Category</label></div>
                            <div class="col-12 col-md-9">
                              <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                   <option value="">Please select</option>
                                <?php foreach ($sub as $subc): ?>
                                <option value="<?= $subc->id; ?>"><?= $subc->subcat; ?></option>
                               <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Price</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="text-input" placeholder="Price" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Summary Description</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="short description" class="form-control"><small class="help-block form-text">Aptly describe the product</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Color</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="password-input" placeholder="product color" class="form-control"><small class="help-block form-text">Indicate the product color</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Size</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="password-input" placeholder="product size" class="form-control"><small class="help-block form-text">Indicate if applicable</small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Weight</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="password-input" placeholder="Weight" class="form-control"><small class="help-block form-text">Indicate if applicable</small></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Dimensions</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="password-input" placeholder="Dimensions" class="form-control"><small class="help-block form-text">Indicate if applicable</small></div>
                          </div>    

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Material</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="password-input" placeholder="Material" class="form-control"><small class="help-block form-text">Indicate if applicable</small></div>
                          </div>           
                                           
                                                   
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Full Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                          </div>               
                         
                          <div class="row form-group">
                       <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" name="files[]"  id="file-multiple-input" name="file-multiple-input"  class="form-control-file" multiple="multiple">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
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
                                <tr>  <th scope="col">ID</th>  <th scope="col">CATEGORY NAME</th></tr>
                              </thead>
                              <tbody>
                                <?php foreach ($categories as $category): ?>
                                <tr>

                                  <th scope="row"><?= $category->id; ?></th>
                               
                                  <td><?= strtoupper($category->categoryName); ?></td>
                                </tr>
                               
                               <?php endforeach; ?>
                              </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">SUB CATEGORY LIST</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>  <th scope="col">ID</th> <th>MAJOR CATEGORY</th> <th scope="col">SUBCATEGORY NAME</th></tr>
                              </thead>
                              <tbody>
                                <?php foreach ($subcategory as $subcategory): ?>
                                <tr>
                                   <td><?= $subcategory->id; ?></td>
                              <?php $catname = $app['database']->getCategoryById($subcategory->mcatid); ?>
                                     <th scope="row"><?= $catname['categoryName'] ?></th>
                                                                
                               
                                  <td><?= $subcategory->subcat; ?></td>
                                </tr>
                               
                               <?php endforeach; ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>


               
                </div>
            </div>
        </div>


    </div>

    


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
