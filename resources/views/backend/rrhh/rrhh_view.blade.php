@extends('admin.admin_master')
@section('admin')


	  <div class="container-full">
		<!-- Content Header (Page header) -->

		
		<!-- Main content -->
		<section class="content">

            <!-- tabs -->
  
            <div class="row"> 
  
              <div class="col-12">
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h4 class="box-title">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</h4>
                    <h6 class="box-subtitle">USUARIO: <b> {{$user->name}} </b></h6>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile8" role="tab"><span><i class="fa fa-user mr-15"></i>Personal</span></a> </li>
                          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home8" role="tab"><span><i class="fa fa-home mr-15"></i>Establecimientos</span></a> </li>
                          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages8" role="tab"><span><i class="fa fa-graduation-cap mr-15"></i>Estudios</span></a> </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content tabcontent-border">
                          <div class="tab-pane active" id="home8" role="tabpanel">
                              <div class="p-15">
                                  <h3>Informacion Personal.</h3>
                                  <div class="box p-15">				
                                    <!-- Post -->
                                    <div class="post">
                                      <div class="user-block">
                                      <img class="img-bordered-sm rounded-circle" src="../images/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                          <a href="#">Brayden</a>
                                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                      <span class="description">5 minutes ago</span>
                                      </div>
                                      <!-- /.user-block -->
                                      <div class="activitytimeline">
                                        <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                                        </p>
                                        <ul class="list-inline">
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                        </li>
                                        <li class="pull-right">
                                          <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                          (5)</a></li>
                                        </ul>
                                        <form class="form-element">
                                          <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                       </form>
                                      </div>
                                    </div>
                                    <!-- /.post -->
                          
                                    <!-- Post -->
                                    <div class="post">
                                      <div class="user-block">
                                      <img class="img-bordered-sm rounded-circle" src="../images/user6-128x128.jpg" alt="user image">
                                        <span class="username">
                                          <a href="#">Evan</a>
                                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                      <span class="description">5 minutes ago</span>
                                      </div>
                                      <!-- /.user-block -->
                                      <div class="activitytimeline">
                                        <div class="row mb-20">
                                        <div class="col-sm-6">
                                          <img class="img-fluid" src="../images/photo1.png" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                          <div class="row">
                                          <div class="col-sm-6">
                                            <img class="img-fluid" src="../images/photo2.png" alt="Photo">
                                            <br><br>
                                            <img class="img-fluid" src="../images/photo3.jpg" alt="Photo">
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-6">
                                            <img class="img-fluid" src="../images/photo4.jpg" alt="Photo">
                                            <br><br>
                                            <img class="img-fluid" src="../images/photo1.png" alt="Photo">
                                          </div>
                                          <!-- /.col -->
                                          </div>
                                          <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                          
                                        <ul class="list-inline">
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                        </li>
                                        <li class="pull-right">
                                          <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                          (5)</a></li>
                                        </ul>
                          
                                        <form class="form-element">
                                          <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                       </form>
                                      </div>
                                    </div>
                                    <!-- /.post -->
                          
                                    <!-- Post -->
                                    <div class="post clearfix">
                                      <div class="user-block">
                                      <img class="img-bordered-sm rounded-circle" src="../images/user7-128x128.jpg" alt="user image">
                                        <span class="username">
                                          <a href="#">Nicholas</a>
                                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                      <span class="description">5 minutes ago</span>
                                      </div>
                                      <!-- /.user-block -->
                                      <div class="activitytimeline">
                                        <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                                        </p>
                          
                                        <form class="form-horizontal form-element">
                                        <div class="form-group row no-gutters">
                                          <div class="col-sm-9">
                                          <input class="form-control input-sm" placeholder="Response">
                                          </div>
                                          <div class="col-sm-3">
                                          <button type="submit" class="btn btn-rounded btn-danger pull-right btn-block btn-sm">Send</button>
                                          </div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                    <!-- /.post -->
                                     </div>
                                  
                                  
                              </div>
                          </div>
                          <div class="tab-pane" id="profile8" role="tabpanel">
                              <div class="p-15">
                                  <h3>Establecimientos.</h3>
                                  <div class="box p-15">		
                                    <form class="form-horizontal form-element col-12">
                                      <div class="form-group row">
                                      <label for="inputName" class="col-sm-2 control-label">Name</label>
                        
                                      <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="">
                                      </div>
                                      </div>
                                      <div class="form-group row">
                                      <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        
                                      <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="">
                                      </div>
                                      </div>
                                      <div class="form-group row">
                                      <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                        
                                      <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="inputPhone" placeholder="">
                                      </div>
                                      </div>
                                      <div class="form-group row">
                                      <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                        
                                      <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder=""></textarea>
                                      </div>
                                      </div>
                                      <div class="form-group row">
                                      <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                        
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="">
                                      </div>
                                      </div>
                                      <div class="form-group row">
                                      <div class="ml-auto col-sm-10">
                                        <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_1" checked="">
                                        <label for="basic_checkbox_1"> I agree to the</label>
                                          &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
                                        </div>
                                      </div>
                                      </div>
                                      <div class="form-group row">
                                      <div class="ml-auto col-sm-10">
                                        <button type="submit" class="btn btn-rounded btn-success">Submit</button>
                                      </div>
                                      </div>
                                    </form>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="messages8" role="tabpanel">
                              <div class="p-15">
                                  <h3>Estudios.</h3>
                                  <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                                  <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col --> 
  
            </div>
            <!-- /.row -->
            <!-- END tabs -->
  
          </section>
          <!-- /.content -->
		
	  </div>


    
@endsection