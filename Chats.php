<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>
<!-- First-section -->
<section class="main-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12"> 
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Chat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1"> MANAGE TEAMS & CHANNELS</button>
                    </li>
                </ul>
                <div class="content-sec">
                    <div class="row">
                       <div class="col-xl-12">
                           <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="chats-area">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <div class="chats-anch">
                                                                    <div class="dropdown-center">
                                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                          Add New
                                                                        </button>
                                                                        <ul class="dropdown-menu">
                                                                          <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user"></i>New Chat</a></li>
                                                                          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-users"></i>New Team</a></li>
                                                                          <li><a class="dropdown-item" href="#">New Channel</a></li>
                                                                        </ul>
                                                                      </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <div class="dot-des">
                                                                     ....
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <div class="icon-btn">
                                                                    <i class="fa-solid fa-gear"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2">
                                                               <div class="icon-btn">
                                                                <i class="fa-solid fa-graduation-cap"></i>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-arae">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="anchor-filter">
                                                        <a href="">
                                                            <img src="assets/images/filter.svg" alt="">filter
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="main-sign">
                                                        <div class="serch-area">
                                                            <div class="input-text">
                                                                <input type="text-1" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
                                                            </div>
                                                        </div>
                                                        
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="main-img">
                                    <div class="img-area">
                                        <img src="assets/images/empty.webp" alt="">
                                        
                                    </div>
                                    No archived content
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