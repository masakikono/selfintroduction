<!DOCTYPE html>
<html lang = "ja">
  <head>
    <meta charset="utf-8">
    <title>Masaki Kono Portfolio Site</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="style.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <a class="menu-toggle rounded" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand"><a class="js-scroll-trigger" href="#page-top">Portfolio</a></li>
        <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#profile">PROFILE</a></li>
        <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#career">CAREER</a></li>
        <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#skill">SKILL</a></li>
        <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#works">WORKS</a></li>
        <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#contact">CONTACT</a></li>
      </ul>
    </nav>
    <header class="masthead d-flex" src="./img/profile.jpg">
      <div class="container text-center my-auto" src="./img/profile.jpg">
        <h1 class="mb-1 headfonts">Portfolio Site</h1>
        <h3 class="mb-5 headfonts"><em>~masaki kono~</em></h3>
      </div>
      <div class="overlay"></div>
    </header>
    <div class="col-lg-6">
      <ul class="lead mb-5 text-left">
        <label>お名前：</label><?php echo $_REQUEST['name'];?>
        <label>E-mail：</label><?php echo $_REQUEST['email'];?>
        <label>性別：</label><?php echo $_REQUEST['sex'];?>
        <label>ご依頼内容：</label><?php echo $_REQUEST['order'];?>
        <label>ご連絡希望時間帯：</label><?php echo $_REQUEST['hour'];?>
        <label>備考：</label><?php echo $_REQUEST['text'];?>
      </ul>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="done.php">確定</a>
    </div>
  </body>
</html>