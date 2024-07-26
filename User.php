<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- First-Section -->
 <section class="main-sec">
    <div class="container-fluid">
       <div class="row">
          <div class="col-xl-12">
            <div class="content-sec">
                <div class="row">
                   <div class="col-xl-6">
                        <div class="main-job-con">
                            <div class="logo-div user">
                                <i class="fa-regular fa-user"></i>
                                <span>User</span>
                            </div>
                        </div>  
                   </div>
                   <div class="col-xl-6">
                      <div class="mob-prv-div">
                         <a href=""><span>Ac</span></a>
                         <div class="mob-area">
                             <a href=""><i class="fa-solid fa-mobile-screen-button"></i>Manage user details</a>
                         </div>
                      </div> 
                   </div>
                </div>
            </div>
          </div> 
       </div>
    </div>
 </section>
<!-- Second-Section -->
 <section class="about-sec">
    <div class="container-fluid">
        <div class="row">
           <div class="col-xl-12">
                <div class="tabs-area mt-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">USERS(1)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ADMINS(1)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ARCHIVED(0)</button>
                        </li>
                    </ul>
                    <div class="content-sec">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="filter-drop d-flex justify-content-between">
                                            <div class="dropdown-center">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-bar-filter"></i> Filter
                                                </button>
                                                <ul class="dropdown-menu filter">
                                                <li>
                                                    <div class="drop-inner">
                                                        <div class="drop-con">
                                                            <h6>Filter users</h6>
                                                        </div>
                                                        <div class="ic-anc-main">
                                                            <div class="icons-dis">
                                                                <i class="fa-solid fa-arrows-rotate"></i>
                                                            </div>
                                                            <div class="swih">
                                                                <a href="">Swich To Quick Anch</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            <div class="drop-down-worth">
                                                <div class="input-text pol form">
                                                    <input type="text-1" placeholder="Search" data-sharkid="__3"><i class="fa-solid fa-magnifying-glass"></i>
                                                </div>
                                                <div class="dropdown user-btn">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                     Export
                                                    </button>
                                                    <ul class="dropdown-menu expo">
                                                      <li><a class="dropdown-item" href="#">As CSV</a></li>
                                                      <li><a class="dropdown-item" href="#">As XLS</a></li>
                                                    </ul>
                                                </div> 
                                                <div class="dropdown use-bt">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                       Add user
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-dark">
                                                      <li><a class="dropdown-item active" href="#">Action</a></li>
                                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                      <li><hr class="dropdown-divider"></li>
                                                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                    </ul>
                                                  </div>
                                            </div>              
                                        </div>
                                   </div>   
                                </div>
                                <div class="row">
                                   <div class="col-xl-12">
                                        <table class="thead-area">
                                            <thead>
                                                <tr>
                                                <th style="width: 5.5%;">
                                                    <input type="checkbox" name="" id="" data-sharkid="__2">
                                                </th>
                                                <th style="width: 7%;">
                                                    First name
                                                    </th>
                                                    <th style="width: 8%;">
                                                    Last name
                                                    </th>
                                                    <th style="width: 9%;">
                                                        Title
                                                    </th>
                                                    <th style="width: 11%;">
                                                        Employment Start Date 
                                                    </th>
                                                    <th style="width: 10%;">
                                                        Team
                                                    </th>
                                                    <th style="width: 19%;">
                                                        Department   
                                                    </th>
                                                    <th style="width: 8%;">
                                                        Kiosk code
                                                    </th>
                                                    <th style="width: 8%;">
                                                        Date added
                                                    </th>
                                                    <th style="width: 14%;">
                                                        Date added
                                                    </th>
                                                    <th style="width: 10%;">
                                                        <div class="dropdown team">
                                                            <button class="btn btn-secondary dropdown-toggle show" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <img src="assets/images/ic_columns.webp" alt="">
                                                            </button>
                                                            <ul class="dropdown-menu " data-popper-placement="top-end" style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -62px);">
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">First Name</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Last Name</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Email</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Groups</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Tags</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Country Code</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Mobile Phone</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">User Type</button></li>
                                                            </ul>
                                                        </div> 
                                                    </th>
                                                </tr> 
                                            </thead>
                                            <tbody class="body-area">
                                                <tr>
                                                    <th style="width: 5%;">
                                                      <input type="checkbox" name="" id="" data-sharkid="__3">
                                                    </th>
                                                    <th style="width: 8%;">
                                                        <div class="copper">
                                                            <a href="">
                                                            Ac    
                                                            </a>
                                                            <div class="copp">
                                                            <img src="assets/images/owner-icon (1).webp" alt="">
                                                            </div>
                                                            Andy
                                                        </div>
                                                    
                                                    </th>
                                                        <th style="width: 8%;">
                                                            Copper
                                                        </th>
                                                        <th style="width: 8%;"> 
                                                            AVP
                                                        </th>
                                                        <th style="width: 8%;">
                                                        4/02/2024
                                                        </th>
                                                        <th style="width: 11%;">
                                                                Team 1,Team 2,Team 3.D
                                                        </th>
                                                        <th style="width: 8%;">
                                                            Department 1, Department 2, Department 3
                                                        </th>
                                                        <th style="width: 8%;">
                                                            8098
                                                        </th>
                                                        <th style="width: 8%;">
                                                        07/12/2024
                                                        </th>
                                                        <th style="width: 8%;">
                                                            07/25/2024
                                                        </th>
                                                    </th>
                                                </tr>
                                            </tbody>
                                       </table> 
                                       <div class="inner-tab">
                                        <div class="table-img">
                                            <img src="assets/images/add-users.gif" alt="">
                                        </div>
                                        <div class="tab-cont">
                                            <h3>Get your team on board! </h3>
                                            <p class="mb-4">Take the first step of having everyone on the same page
                                                by inviting your first team members to join you.</p>
                                        </div> 
                                        <div class="anc-tab">
                                            <a href="">
                                                <i class="fa-solid fa-plus"></i>Add user
                                            </a>
                                        </div>
                                    </div>
                                   </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="filter-drop d-flex justify-content-between">
                                            <div class="dropdown-center">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-bar-filter"></i> Filter
                                                </button>
                                                <ul class="dropdown-menu filter">
                                                <li>
                                                    <div class="drop-inner">
                                                        <div class="drop-con">
                                                            <h6>Filter users</h6>
                                                        </div>
                                                        <div class="ic-anc-main">
                                                            <div class="icons-dis">
                                                                <i class="fa-solid fa-arrows-rotate"></i>
                                                            </div>
                                                            <div class="swih">
                                                                <a href="">Swich To Quick Anch</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            <div class="drop-down-worth">
                                                <div class="input-text pol form">
                                                    <input type="text-1" placeholder="Search" data-sharkid="__3"><i class="fa-solid fa-magnifying-glass"></i>
                                                </div>
                                                <div class="dropdown user-btn">
                                                    <!-- <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                     Export
                                                    </button> -->
                                                    <ul class="dropdown-menu expo">
                                                      <li><a class="dropdown-item" href="#">As CSV</a></li>
                                                      <li><a class="dropdown-item" href="#">As XLS</a></li>
                                                    </ul>
                                                </div> 
                                                <div class="dropdown use-bt">
                                                    <div class="anc-tab">
                                                        <a href="#">
                                                            <i class="fa-solid fa-plus"></i>Add admin
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>              
                                        </div>
                                   </div>   
                                </div>
                                <div class="row">
                                   <div class="col-xl-12">
                                        <table class="thead-area">
                                            <thead>
                                                <tr>
                                                    <th style="width: 12%;padding-left: 73px;">
                                                        First name
                                                        </th>
                                                    <th style="width: 4%;">
                                                    Last name
                                                    </th>
                                                    <th style="width: 14%;">
                                                        Access level
                                                    </th>
                                                    <th style="width: 11%;">
                                                        Managed Groups 
                                                    </th>
                                                    <th style="width: 10%;">
                                                        Permissions
                                                    </th>
                                                    <th style="width: 11%;">
                                                        Admin tab  
                                                    </th>
                                                    <th style="width:12%;">
                                                        Accepted 
                                                    </th>
                                                    <th style="width: 26%;">
                                                        Last login
                                                    </th>
                                                    <th style="width: 10%;">
                                                        <div class="dropdown team">
                                                            <button class="btn btn-secondary dropdown-toggle show" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <img src="assets/images/ic_columns.webp" alt="">
                                                            </button>
                                                            <ul class="dropdown-menu " data-popper-placement="top-end" style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -62px);">
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">First Name</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Last Name</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Email</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Groups</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Tags</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Country Code</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">Mobile Phone</button></li>
                                                            <li><button class="dropdown-item" type="button"><input type="checkbox">User Type</button></li>
                                                            </ul>
                                                        </div> 
                                                    </th>
                                                </tr> 
                                            </thead>
                                            <tbody class="body-area">
                                                <tr>
                                                    <th style="width: 8%;">
                                                        <div class="copper">
                                                            <a href="">
                                                            Ac    
                                                            </a>
                                                            <div class="copp">
                                                            <img src="assets/images/owner-icon (1).webp" alt="">
                                                            </div>
                                                            Andy
                                                        </div>
                                                    
                                                    </th>
                                                        <th style="width: 8%;">
                                                            Copper
                                                        </th>
                                                        <th style="width: 8%;"> 
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                  <img src="assets/images/gray_crown.webp" alt="">owner
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item" href="#"><img src="assets/images/gray_crown.webp" alt="">owner</a></li>
                                                                  <li><a class="dropdown-item" href="#"><img src="assets/images/gray_crown.webp" alt="">Admin</a></li>
                                                                </ul>
                                                              </div>
                                                        </th>
                                                        <th style="width: 8%; color: #1c1a1a4f;">
                                                            All groups
                                                        </th>
                                                        <th style="width: 11%; color: #1c1a1a4f;">
                                                            All features
                                                        </th>
                                                        <th style="width: 8%;">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                            </div>
                                                        </th>
                                                        <th style="width: 8%; color: #57cba4; font-size: 20px;">
                                                            <i class="fa-solid fa-check"></i>
                                                        </th>
                                                        <th style="width: 8%;">
                                                        07/12/2024
                                                        </th>
                                                    </th>
                                                </tr>
                                            </tbody>
                                       </table> 
                                       <div class="inner-tab">
                                        <div class="table-img">
                                            <img src="assets/images/add-managers.webp" alt="">
                                        </div>
                                        <div class="tab-cont">
                                            <h3>Get your team on board! </h3>
                                            <p class="mb-4">Take the first step of having everyone on the same page
                                                by inviting your first team members to join you.</p>
                                        </div> 
                                        <div class="anc-tab">
                                            <a href="">
                                                <i class="fa-solid fa-plus"></i>Add admin
                                            </a>
                                        </div>
                                    </div>
                                   </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="filter-drop d-flex justify-content-between">
                                            <div class="dropdown-center">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-bar-filter"></i> Filter
                                                </button>
                                                <ul class="dropdown-menu filter">
                                                <li>
                                                    <div class="drop-inner">
                                                        <div class="drop-con">
                                                            <h6>Filter users</h6>
                                                        </div>
                                                        <div class="ic-anc-main">
                                                            <div class="icons-dis">
                                                                <i class="fa-solid fa-arrows-rotate"></i>
                                                            </div>
                                                            <div class="swih">
                                                                <a href="">Swich To Quick Anch</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            <div class="drop-down-worth">
                                                <div class="input-text pol form">
                                                    <input type="text-1" placeholder="Search" data-sharkid="__3"><i class="fa-solid fa-magnifying-glass"></i>
                                                </div>
                                                <div class="dropdown user-btn">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                     Export
                                                    </button>
                                                    <ul class="dropdown-menu expo">
                                                      <li><a class="dropdown-item" href="#">As CSV</a></li>
                                                      <li><a class="dropdown-item" href="#">As XLS</a></li>
                                                    </ul>
                                                </div> 
                                                <div class="dropdown use-bt">
                                                    <div class="anc-tab">
                                                        <a href="#">
                                                            <i class="fa-solid fa-plus"></i>Add admin
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>              
                                        </div>
                                   </div>   
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                         <table class="thead-area">
                                             <thead>
                                                 <tr>
                                                     <th style="width: 12%;padding-left: 73px;">
                                                         First name
                                                         </th>
                                                     <th style="width: 4%;">
                                                     Last name
                                                     </th>
                                                     <th style="width: 14%;">
                                                         Access level
                                                     </th>
                                                     <th style="width: 11%;">
                                                         Managed Groups 
                                                     </th>
                                                     <th style="width: 10%;">
                                                         Permissions
                                                     </th>
                                                     <th style="width: 11%;">
                                                         Admin tab  
                                                     </th>
                                                     <th style="width:12%;">
                                                         Accepted 
                                                     </th>
                                                     <th style="width: 26%;">
                                                         Last login
                                                     </th>
                                                     <th style="width: 10%;">
                                                         <div class="dropdown team">
                                                             <button class="btn btn-secondary dropdown-toggle show" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                                                 <img src="assets/images/ic_columns.webp" alt="">
                                                             </button>
                                                             <ul class="dropdown-menu " data-popper-placement="top-end" style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -62px);">
                                                             <li><button class="dropdown-item" type="button"><input type="checkbox">First Name</button></li>
                                                             <li><button class="dropdown-item" type="button"><input type="checkbox">Last Name</button></li>
                                                             <li><button class="dropdown-item" type="button"><input type="checkbox">Email</button></li>
                                                             <li><button class="dropdown-item" type="button"><input type="checkbox">Groups</button></li>
                                                             <li><button class="dropdown-item" type="button"><input type="checkbox">Tags</button></li>
                                                             <li><button class="dropdown-item" type="button"><input type="checkbox">Country Code</button></li>
                                                             <li><button class="dropdown-item" type="button"><input type="checkbox">Mobile Phone</button></li>
                                                             <li><button class="dropdown-item" type="button"><input type="checkbox">User Type</button></li>
                                                             </ul>
                                                         </div> 
                                                     </th>
                                                 </tr> 
                                             </thead>
                                             <tbody class="body-area">
                                                 <tr>
                                                     <th style="width: 8%;">
                                                         <div class="copper">
                                                             <a href="">
                                                             Ac    
                                                             </a>
                                                             <div class="copp">
                                                             <img src="assets/images/owner-icon (1).webp" alt="">
                                                             </div>
                                                             Andy
                                                         </div>
                                                     
                                                     </th>
                                                         <th style="width: 8%;">
                                                             Copper
                                                         </th>
                                                         <th style="width: 8%;"> 
                                                             <div class="dropdown">
                                                                 <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                   <img src="assets/images/gray_crown.webp" alt="">owner
                                                                 </button>
                                                                 <ul class="dropdown-menu">
                                                                   <li><a class="dropdown-item" href="#"><img src="assets/images/gray_crown.webp" alt="">owner</a></li>
                                                                   <li><a class="dropdown-item" href="#"><img src="assets/images/gray_crown.webp" alt="">Admin</a></li>
                                                                 </ul>
                                                               </div>
                                                         </th>
                                                         <th style="width: 8%; color: #1c1a1a4f;">
                                                             All groups
                                                         </th>
                                                         <th style="width: 11%; color: #1c1a1a4f;">
                                                             All features
                                                         </th>
                                                         <th style="width: 8%;">
                                                             <div class="form-check form-switch">
                                                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                             </div>
                                                         </th>
                                                         <th style="width: 8%; color: #57cba4; font-size: 20px;">
                                                             <i class="fa-solid fa-check"></i>
                                                         </th>
                                                         <th style="width: 8%;">
                                                         07/12/2024
                                                         </th>
                                                     </th>
                                                 </tr>
                                             </tbody>
                                        </table> 
                                        <div class="inner-tab">
                                         <div class="table-img">
                                             <img src="assets/images/add-managers.webp" alt="">
                                         </div>
                                         <div class="tab-cont">
                                             <h3>Get your team on board! </h3>
                                             <p class="mb-4">Take the first step of having everyone on the same page
                                                 by inviting your first team members to join you.</p>
                                         </div> 
                                         <div class="anc-tab">
                                             <a href="">
                                                 <i class="fa-solid fa-plus"></i>Add admin
                                             </a>
                                         </div>
                                     </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
    </div>
 </section>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>