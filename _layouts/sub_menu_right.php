<?php ?>
<!-- Search Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Asset Search -->
                <div class="well" style="background-color: grey;">
                    <h4 style="color: white;">search asset</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="asset barcode, name or category">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Quick Reporting Menu -->
                <div class="well" style="background-color:grey;">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled" style="padding-bottom: 4px;">
                                <li> <a href="#"> <h5 style="color: white;">#Recently Added - report</h5> </a></li>
                                <hr>
                                <li> <a href="#"> <h5 style="color: white;">#Recently Edited - report</h5>  </a></li>
                                <hr>
                                <li> <a href="#"> <h5 style="color: white;">#Activity Log - admin report </h5>  </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Side Widget Well -->
                <div class="well"  style="background-color:grey;">
                    <a href="#"><h4 style="font-size:16px;color: white;">+ Settings </h4></a>
                    <a href="<?php echo Routes::index()?>" style="font-size:16px; color: white;">- Logout</a>
                    
                </div>
                
            </div>