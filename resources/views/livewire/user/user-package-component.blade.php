<div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>


              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Open Form
            </button>

            <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                       <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2" wire:model="email" placeholder="Enter Email">
                                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                            <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
            <marquee behavior="" direction=""><i style="color: brown">Welcome Back To Millionaire Site,We're Here for you,now you can make money online without Imvestments,work hard and get yourself imverstements to buy new package. And don't Hesitate to Contact us</i> </marquee>

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <a href="{{route('user.dashboard.payclick')}}">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-hand-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Clicks</span>
              <span class="info-box-number">
                94
              </span>
            </div>
            <!-- /.info-box-content -->
          </div> </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
    <a href="{{route('user.dashboard.refer_earn')}}">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Referrals</span>
              <span class="info-box-number">45</span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tasks</span>
              <span class="info-box-number">7</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Earnings</span>
              <span class="info-box-number">$ 2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row ENDING RIGHT HERE AND BE READY TO START -->
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-6">


              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">Your Refferal Link</h5><br>
                <input type="text" name="" value="https://share.muhahe.com/register.php?referral=manzi22" class="form-control" disabled=""><br>

                  <p class="card-text">
                   <i class="fas fa-arrow-circle-right"></i> Share this link and earn $2 for every person who clicks on it. Earn an additional $10 when they sign up!
                  </p>
                  <a href="#" class="btn btn-primary">Copy Link</a>
                </div>
              </div><!-- /.card -->


            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
    <!-- Map card -->
              <div class="card bg-gradient-primary">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    <i class="fas fa-edit mr-1"></i>
                    Survey
                  </h3>

                  <!-- /.card-tools -->
                </div>
                <div class="card-body" style="background-color:white;height: 180px; width: 100%; ">
                  <center><a href="#"> <h4 >Earn $30 By SURVEYS & APPS</h4>
                         <i class="fas fa-share " ></i></center>
                 </a>
                </div>

              </div>
              <!-- /.card -->

              <!-- solid sales graph -->


            </div>
             <div class="col-lg-12" >
    <!-- Map card -->
              <div class="card " style="background-color:#000050; width: 100%; ">
                <div class="card-header " style="background-color:gray;">
                  <h3 class="card-title" style="color: white">
                    Earn Type
                  </h3>


                  <!-- /.card-tools -->
                </div>
                <div class="card-body" >
                <div class="row">
                    <div class="col-md-9">
                      <h3 style="color: white">Tasks</h3>
                    </div>
                    <div class="col-md-3">

                        <h3 style="color: white">Earn</h3>
                    </div>
                  </div>
                      <!-- /.card -->
                  <div class="row" style="margin-top:10px;">
                    <div class="col-md-9">
                      <li style="color: white">Create YouTube videos</li>
                    </div>
                    <div class="col-md-3 btn btn-success">
                      50$
                    </div>
                  </div>
                  <!-- /.card -->
                  <div class="row" style="margin-top:10px;">
                    <div class="col-md-9">
                      <li style="color: white">Complete surveys</li>
                    </div>
                    <div class="col-md-3 btn btn-success">
                      30$
                    </div>
                  </div>
                  <!-- /.card -->
                  <div class="row" style="margin-top:10px;">
                    <div class="col-md-9">
                      <li style="color: white">Download apps</li>
                    </div>
                     <div class="col-md-3 btn btn-success">
                      20$
                    </div>
                  </div>
                  <!-- /.card -->
                  <div class="row" style="margin-top:10px;">
                    <div class="col-md-9">
                      <li style="color: white">Refer friends</li>
                    </div>
                     <div class="col-md-3 btn btn-success">
                      10$
                    </div>
                  </div>
                  <!-- /.card -->
                  <div class="row" style="margin-top:10px;">
                    <div class="col-md-9">
                      <li style="color: white">Get clicks</li>
                    </div>
                     <div class="col-md-3 btn btn-success">
                      2$
                    </div>
                  </div>
                  <!-- /.card -->
                </div>

              </div>
              <!-- /.card -->

              <!-- solid sales graph -->


            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-secondary card-outline">

                <div class="card-body card-warning">
                  <div class="row">
                    <div class="col-md-6">
                      Total Volume
                      <div class="row">
                        <div class="col-lg-12">
                          <!-- Map card -->
                          <div class="card bg-gradient-primary">

                            <div class="card-body" style="background-color:white;color:black;height: 180px; width: 100%; ">
                            <h5 ><b class="text-warning">Members:</b> 20</h5>

                              <p><h4>1500 <small>Vp</small></h4></p>


                              <h3 class="text-success">
                              <i class="fas fa-users mr-1"></i>
                              Left Team
                            </h3>
                            <hr>
                            </div>
                          </div>
                        </div></div>

                          <!-- solid sales graph -->
                          <div class="row">

                            <div class="col-lg-12">
                            <!-- Map card -->
                                        <div class="card bg-gradient-primary">

                                          <div class="card-body" style="background-color:white;color:black;height: 180px; width: 100%; ">
                                          <h5><b class="text-warning">Members:</b> 44</h5>

                                            <p><h4>3000 <small>Vp</small></h4></p>

                                          <h3 class="text-success" >
                                            <i class="fas fa-users mr-1"></i>
                                            Right Team
                                          </h3>
                                          <hr>
                                          </div>
                                        </div>
                                      </div>
                                        <!-- solid sales graph -->
                       </div>
                    </div>
    {{-- END OF COL-MD-6 --}}
                    <div class="col-md-6">
                      Commissions
                      <div class="card">

                        <div class="card-body">
                     <div class="row">
                       <div class="col-md-6"></div>
                       <div class="col-md-6">
                        <select name="" id="" class="form-control float-sm-right float-md-right">
                          <option value="">This week</option>
                        </select>

                       </div>


                     </div><br><br>
                     <div class="row">
                      <div class="col-md-4"></div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="col-6 text-center">
                         <input type="text" class="knob" data-readonly="true" value="30" data-width="90" data-height="90"
                             data-fgColor="#39CCCC">

                            </div>

                          <b>  Week 27 July - 02 August</b>

                      </div>
                      <div class="col-md-3">

                      </div>
                      <!-- /.col -->
                    </div>
                          <br>

                    <div class="row">
                      <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                          <span class="description-text"><b>Left Team</b></span><br>
                          <h5 class="description-header">100 Vp</h5>

                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-6 col-6">
                        <div class="description-block border-right">
                          <span class="description-text"> <b>Volume Bonus</b></span><br>
                          <h5 class="description-header">0 EUR</h5>

                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-3 col-6">
                        <div class="description-block">
                          <span class="description-text"><b>Right Team</b></span><br>
                          <h5 class="description-header">150 Vp</h5>

                        </div>
                        <!-- /.description-block -->
                      </div>


                    </div>


                        </div>
                      </div>
                  <!-- END OF CARD -->

                    </div>

                  </div>

                </div>
              </div>
              <!-- END OF CARD -->
            </div>
            <!-- /.col-md-6 -->
          </div>
          {{-- End of commissions --}}
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-6">
              <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                  <h3 class="card-title">SHARED LINKS</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>

                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="direct-chat-messages">
                     <!-- Add font awesome icons -->
                     <a href="#" class="fa fa-facebook"></a><button class="btn-success">share link</button>
                     <hr>

                    <a href="#" class="fa fa-twitter"></a><button class="btn-success">share link</button>

                    <hr>
                    <a href="#" class="fa fa-google"></a><button class="btn-success">share link</button>
                    <hr>
                    <a href="#" class="fa fa-linkedin"></a> <button class="btn-success">share link</button>
                    <hr>
                    <a href="#" class="fa fa-youtube"></a> <button class="btn-success">share link</button>
                    <hr>
                    <a href="#" class="fa fa-instagram"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-pinterest"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-snapchat-ghost"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-skype"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-android"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-dribbble"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-vimeo"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-tumblr"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-vine"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-foursquare"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-stumbleupon"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-flickr"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-yahoo"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-reddit"></a><button class="btn-success">share link</button><hr>

                    <a href="#" class="fa fa-rss"></a><button class="btn-success">share link</button><hr>

                  </div>


                </div>

              </div>

              {{-- END OF SHARING --}}



            </div>


            {{-- END OF THE COLUMN --}}
            <div class="col-lg-6">
              <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                  <h3 class="card-title">LEADERBOARD</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                      <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="direct-chat-messages">

                    <table class="table">
                      <thead class="bg-gradient-primary">
                        <tr>
                          <th>Username</th>
                          <th></th>
                          <th>Total Earned</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1. John</td>
                          <td></td>
                          <td>$5000</td>
                        </tr>
                        <tr>
                          <td>2. Mary</td>
                          <td></td>
                          <td>$2000</td>
                        </tr>
                        <tr>
                          <td>3. July</td>
                          <td></td>
                          <td>$1500</td>
                        </tr>
                        <tr>
                          <td>4. July</td>
                          <td></td>
                          <td>$1000</td>
                        </tr>
                        <tr>
                          <td>5. JackMan
                          </td>
                          <td></td>
                          <td>$500</td>
                        </tr>
                      </tbody>
                    </table>




                  </div>


                </div>

              </div>

              {{-- END OF LEADER --}}



            </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Total Earned Monthly Report</h5>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <div class="btn-group">
                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                          <i class="fas fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a href="#" class="dropdown-item">Action</a>
                          <a href="#" class="dropdown-item">Another action</a>
                          <a href="#" class="dropdown-item">Something else here</a>
                          <a class="dropdown-divider"></a>
                          <a href="#" class="dropdown-item">Separated link</a>
                        </div>
                      </div>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>

                  <!-- ./card-body -->
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 37%</span>
                          <h5 class="description-header">$35,210.43</h5>
                          <span class="description-text">Balance</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 10%</span>
                          <h5 class="description-header">$1,390.90</h5>
                          <span class="description-text">TOTAL Clicks</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                          <h5 class="description-header">$813.53</h5>
                          <span class="description-text">TOTAL PROFIT</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-3 col-6">
                        <div class="description-block">
                          <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                          <h5 class="description-header">1200</h5>
                          <span class="description-text">GOAL COMPLETIONS</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
      <!-- /.row -->

    </div>


    </div>


  <style>


    /* The Modal (background) */
    .card_payment{
      width:80px;
      height:40px
    }
    .PayImage{
      width:100%;
      height:40px;
    }
    .modal {
      display:block;
      position: fixed;
      z-index: 999999;
      padding-top: 3%;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      margin-left:18%;
      border: 1px solid #888;
      width: 78%;
    }
    </style>

            <div id="exampleModal" class="modal "  data-backdrop="static" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="flex justify-content-between mb-4">
                        <a href="/"><button type="button" class="btn btn-outline-info btn-primary"> Back</button></a>
                        <a class="float-right" href="#"   onclick="event.preventDefault(); document.getElementById('logout-form').submit()" ><button type="button" class="btn btn-outline-info btn-danger "> Logout</button></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf</form>
                    </div>
                   <div class="row">
                    <div class="col-sm-3">
                      <div class="card-body" style="margin:0;padding:0;">
                          <div class="bg-dark" >
                              <center class="bg-danger"><h3>Explorer</h3></center>
                                <center><h4>$200</h4></center>
                              <!-- /.info-box-content -->
                              <ul>
                                  <li>Education package from mygithub.com Value €40</li>
                                  <li>Muhahe Rewards 50 pc</li>
                                  <li>Streamline up to level 4</li>
                              </ul>
                               <div class="bg-primary container-fluid">
                                      <div class="col-md-12">
                                          <center>
                                          <button type="button" class="btn btn-outline-light" style="margin-bottom:5px;margin-top:5px">Select</button>
                                          </center>
                                      </div>
                                </div>


                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3" >
                    <div class="card-body" style="margin:0;padding:0;">
                          <div class="bg-dark" >
                          <center class="bg-danger"><h3>Explorer</h3></center>
                                <center><h4>$400</h4></center>
                              <!-- /.info-box-content -->
                              <ul>
                                  <li>Education package from mygithub.com Value €40</li>
                                  <li>Muhahe Rewards 50 pc</li>
                                  <li>Streamline up to level 4</li>
                              </ul>
                               <div class="bg-primary container-fluid">
                                      <div class="col-md-12">
                                          <center>
                                          <button type="button" class="btn btn-outline-light" style="margin-bottom:5px;margin-top:5px">Select</button>
                                          </center>
                                      </div>
                                </div>


                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3" >
                      <div class="card-body" style="margin:0;padding:0">
                      <div class="card-body" style="margin:0;padding:0;">
                          <div class="bg-dark" >
                          <center class="bg-danger"><h3>Explorer</h3></center>
                                <center><h4>$600</h4></center>
                              <!-- /.info-box-content -->
                              <ul>
                                  <li>Education package from mygithub.com Value €40</li>
                                  <li>Muhahe Rewards 50 pc</li>
                                  <li>Streamline up to level 4</li>
                              </ul>
                               <div class="bg-primary container-fluid">
                                      <div class="col-md-12">
                                          <center>
                                          <button type="button" class="btn btn-outline-light" style="margin-bottom:5px;margin-top:5px">Select</button>
                                          </center>
                                      </div>
                                </div>


                          </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-sm-3" >
                    <div class="card-body" style="margin:0;padding:0;">
                          <div class="bg-dark" >
                          <center class="bg-danger"><h3>Explorer</h3></center>
                                <center><h4>$1200</h4></center>
                              <!-- /.info-box-content -->
                              <ul>
                                  <li>Education package from mygithub.com Value €40</li>
                                  <li>Muhahe Rewards 50 pc</li>
                                  <li>Streamline up to level 4</li>
                              </ul>
                               <div class="bg-primary container-fluid">
                                      <div class="col-md-12">
                                          <center>
                                          <button type="button" class="btn btn-outline-light" style="margin-bottom:5px;margin-top:5px">Select</button>
                                          </center>
                                      </div>
                                </div>


                          </div>
                      </div>
                    </div>

                 </div>
                 <div class="row" style="margin-top:10px">
                    <div class="col-sm-3">
                    <div class="card-body" style="margin:0;padding:0;">
                          <div class="bg-dark" >
                          <center class="bg-danger"><h3>Explorer</h3></center>
                                <center><h4>$2000</h4></center>
                              <!-- /.info-box-content -->
                              <ul>
                                  <li>Education package from mygithub.com Value €40</li>
                                  <li>Muhahe Rewards 50 pc</li>
                                  <li>Streamline up to level 4</li>
                              </ul>
                               <div class="bg-primary container-fluid">
                                      <div class="col-md-12">
                                          <center>
                                          <button type="button" class="btn btn-outline-light" style="margin-bottom:5px;margin-top:5px">Select</button>
                                          </center>
                                      </div>
                                </div>


                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3" >
                    <div class="card-body" style="margin:0;padding:0;">
                          <div class="bg-dark" >
                          <center class="bg-danger"><h3>Explorer</h3></center>
                                <center><h4>$3000</h4></center>
                              <!-- /.info-box-content -->
                              <ul>
                                  <li>Education package from mygithub.com Value €40</li>
                                  <li>Muhahe Rewards 50 pc</li>
                                  <li>Streamline up to level 4</li>
                              </ul>
                               <div class="bg-primary container-fluid">
                                      <div class="col-md-12">
                                          <center>
                                          <button type="button" class="btn btn-outline-light" style="margin-bottom:5px;margin-top:5px">Select</button>
                                          </center>
                                      </div>
                                </div>


                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3" >
                    <div class="card-body" style="margin:0;padding:0;">
                          <div class="bg-dark" >
                          <center class="bg-danger"><h3>Explorer</h3></center>
                                <center><h4>$5000</h4></center>
                              <!-- /.info-box-content -->
                              <ul>
                                  <li>Education package from mygithub.com Value €40</li>
                                  <li>Muhahe Rewards 50 pc</li>
                                  <li>Streamline up to level 4</li>
                              </ul>
                               <div class="bg-primary container-fluid">
                                      <div class="col-md-12">
                                          <center>
                                          <button type="button" class="btn btn-outline-light" style="margin-bottom:5px;margin-top:5px">Select</button>
                                          </center>
                                      </div>
                                </div>


                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3" >
                    <div class="card-body" style="margin:0;padding:0;">
                          <div class="bg-dark" >
                          <center class="bg-danger"><h3>Explorer</h3></center>
                                <center><h4>$10000</h4></center>
                              <!-- /.info-box-content -->
                              <ul>
                                  <li>Education package from mygithub.com Value €40</li>
                                  <li>Muhahe Rewards 50 pc</li>
                                  <li>Streamline up to level 4</li>
                              </ul>
                               <div class="bg-primary container-fluid">
                                      <div class="col-md-12">
                                          <center>
                                          <button type="button" class="btn btn-outline-light" style="margin-bottom:5px;margin-top:5px">Select</button>
                                          </center>
                                      </div>
                                </div>
                          </div>
                      </div>
                    </div>

                 </div>

                 <!-- payment method div -->
                 <div class="bg-light container-fluid">
                    <div class="container my-4">
                    <center><h4>Choose Paymnent Method Here</h4></center>
                       <div class="row my-4">
                       <div class="col-sm-2"></div>
                       <div class="col-sm-8">
                       <div class="d-flex justify-content-between">
                              <div class="card_payment">
                              <a data-toggle="tab" href="#momo"> <img src="../image/momo.jpg" class="PayImage" id="payImage" alt="..."></a>
                              </div>
                              <div class="card_payment">
                              <a data-toggle="tab" href="#paypal"><img src="../image/paypal.jpg" class="PayImage" id="payImage" alt="..."></a>
                              </div>
                              <div class="card_payment">
                                <a data-toggle="tab" href="#stripe"> <img src="../image/master.png" class="PayImage" id="payImage" alt="..."></a>
                              </div>
                              <div class="card_payment">
                                <a data-toggle="tab" href="#stripe"> <img src="../image/visa.png" class="PayImage" id="payImage" alt="..."></a>
                              </div>
                              <div class="card_payment">
                                <a data-toggle="tab" href="#stripe"> <img src="../image/skril.jpeg" class="PayImage" id="payImage" alt="..."></a>
                              </div>
                              <div class="card_payment">
                                <a data-toggle="tab" href="#stripe"> <img src="../image/stripe.jpg" class="PayImage" id="payImage" alt="..."></a>
                              </div>
                              <div class="card_payment">
                                   <a data-toggle="tab" href="#offline"><img src="../image/offlinepay.jpg" class="PayImage" id="payImage" alt="..."></a>
                               </div>
                          </div>

                          <!-- dynamic tabs for payment -->
                          <div class="tab-content my-4">
                              <div id="momo" class="tab-pane fade">
                                  <div class="container">
                                      Dial *182*8*1*043159#
                                  </div>
                              </div>
                              <div id="paypal" class="tab-pane fade in active">
                                  <h3>PayPal Payment</h3>
                                  <p>Some content.</p>
                              </div>
                              <div id="stripe" class="tab-pane fade">
                                  <h3>Stripe payment method</h3>
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <div >
                                                  <input id="PhoneNumber" type="text" placeholder="Card Number" class="inputformdonor" value="">
                                              </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div >
                                                  <input id="PhoneNumber" type="text" placeholder="CVV" class="inputformdonor" value="">

                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <div >
                                                  <input id="PhoneNumber" type="text" placeholder="Month" class="inputformdonor">
                                              </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div >
                                                  <input id="PhoneNumber" type="text" placeholder="Year" class="inputformdonor">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div id="offline" class="tab-pane fade">
                                  <h3>Offline Payment Method</h3>
                                  <p>Some content in menu 2.</p>
                              </div>
                          </div>
                         </div>
                       </div>
                       <div class="col-sm-2"></div>
                       </div>
                    </div>
                  </div>
                </div>

            </div>


   <script>

    document.addEventListener('livewire:load', function () {

        // $('#exampleModal').modal('show');

        })




    </script>


