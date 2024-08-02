<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>
<!-- First-section -->
<section class="main-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12"> 
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#CHATS-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><img src="assets/images/chat-tab.png" alt="">CHATS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#MANAGE TEAMS & CHANNELS-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" tabindex="-1">
				     <img src="assets/images/manage-tab.webp" alt="">  MANAGE TEAMS & CHANNELS</button>
                    </li>
                </ul>
                <div class="content-sec">
                    <div class="content-sec-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="CHATS-tab-pane" role="tabpanel" aria-labelledby="CHATS-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <div class="main-chat-area">
                                                                <div class="chats-area">
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
                                                                    <div class="main-side">
                                                                        <div class="dot-des" style="color: #2998ff;">
                                                                            ....
                                                                        </div>
                                                                        <div class="icon-btn">
                                                                            <i class="fa-solid fa-gear" style="color: #2998ff;"></i>
                                                                        </div>
                                                                        <div class="icon-btn">
                                                                            <i class="fa-solid fa-graduation-cap" style="color: #20b9c7;"></i>
                                                                            0/9
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="texy-area">
                                                                    <input type="text" placeholder="Search">
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
                                    <div class="tab-pane fade" id="MANAGE TEAMS & CHANNELS-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
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