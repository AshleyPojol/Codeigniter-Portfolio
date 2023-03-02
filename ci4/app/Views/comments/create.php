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
        <div class="contact-left">
          <hi class="sub-title">Contact Me</hi>
            <p><i class="fa-sharp fa-solid fa-paper-plane"></i> mcagbanlog@student.apc.edu.ph</p>
            <p><i class="fa-solid fa-phone"></i> 09762623231</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/emsijusep"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://twitter.com/emsheesh"><i class="fa-brands fa-twitter-square"></i></a>
              <a href="https://www.instagram.com/emshiiisunn/"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/mc-joseph-agbanlog-6a8387218/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <div class="contact-right">
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

            <form action="/lab3/ci4/public/comments/create" method="post">
                <?= csrf_field() ?>

                <input type="input" name="name" placeholder="Your Name" value="<?= set_value('fullName') ?>" required>

                <input type="input" name="email" placeholder="Your Email" value="<?= set_value('emailUsed') ?>" required>

                <input type="input" name="website" placeholder="Your Website" value="<?= set_value('subjectUsed') ?>" required>

                <textarea name="comment" rows="6" placeholder="Your Message"><?= set_value('messageInput') ?></textarea>
                
                <button type="submit" class="btn btn2">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  
 