<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="./css/coms.css">

</head>

<body>
        <!-- === Aside Start === -->
    <div class="aside">
        <div class="logo">
            <a href="/lab3/ci4/public/home"><span>Toru</span></a>
        </div>
        <div class="nav-toggler">
            <span></span>
        </div>
        <ul class="nav">
            <li><a href="/lab3/ci4/public/home" class="active"><i class="fa fa-home"></i> Home </a></li>
            <li><a href="/lab3/ci4/public/home#information"><i class="fa fa-user"></i></a>Information</li>
            <li><a href="/lab3/ci4/public/home#education"><i class="fa fa-book"></i></a>Education</li>
            <li><a href="/lab3/ci4/public/home#achievements"><i class="fa fa-star"></i></a>Achievements</li>
            <li><a href="/lab3/ci4/public/home#others"><i class="fa fa-comments"></i></a>Others</li>
            <li><a href="/lab3/ci4/public/home#contactus"><i class="fa fa-address-card"></i></a>Contact Us</li>
        </ul>
    </div>
        <!-- === Aside End === -->

 <div id="contact">
    <div class="container">
      <div class="row">
      
          <br>
          <h1>Post your comment here</h1>
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

            <form action="/lab3/ci4/public/comments" method="post">
                <?= csrf_field() ?>

                                <div class="row">
                    <div class="contact-form padd-15">
                        <div class="row">
                            <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" value="<?= set_value('fullName') ?>" required>
                                </div>
                            </div>
                            <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" value="<?= set_value('emailUsed') ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" value="<?= set_value('subjectUsed') ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <textarea name="" class="form-control" id="" placeholder="Message" value="<?= set_value('messageInput') ?>" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="contact-right">
                    <h1 class="sub-title"><?= esc($title) ?></h1>
                    <br><br>
                    
                    <?php if (! empty($comments) && is_array($comments)): ?>

                        <?php foreach ($comments as $comment): ?>

                            <div class="portfolio-box">
                                <h3><?= esc($comment['fullName']) ?></h3>
                                <p><?= esc($comment['emailUsed']) ?></p><br>
                                <p><?= esc($comment['subjectUsed']) ?></p><br>
                                <p><?= esc($comment['messageInput']) ?></p><br>
                        
                            </div>
                            <br>

                        <?php endforeach ?>

                        <?php else: ?>

                        <h3>No Comments</h3>

                        <p>Nothing to see here yet.</p>

                        <?php endif ?>
        </div>
      </div>
    </div>
</div>


    
    