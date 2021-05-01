
<?php if(file_exists('./logicals/'.$search['file'].'.php')) { include("./logicals/{$search['file']}.php"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= $windowtitle['title'] . ( (isset($windowtitle['motto'])) ? ('|' . $windowtitle['motto']) : '' ) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- my own CSS file -->
<link rel="stylesheet" type="text/css" href="./styles/style.css">
<?php if(file_exists('./styles/'.$search['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $search['file']?>.css" type="text/css"><?php } ?>
<!-- my own JS file -->
<?php if(file_exists('./javascript/'.$search['file'].'.js')) { ?><script type="text/javascript" src="./javascript/<?= $search['file']?>.js"></script><?php } ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- header -->
<header class="container-fluid">
<div class="row">
<div class="col-3">
<a href="#"><img src="./images/<?=$header['source']?>" alt="<?=$header['alt']?>" class="img"></a>
</div>
<div class="col-9" id="headerMenu">
<nav class="navbar navbar-expand-md navbar-dark" style="float:right">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<?php foreach ($pages as $url => $page) { ?>
	<li class="nav-item">
	<a class="nav-link<?= (($page == $search) ? ' active' : '') ?>" href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
	<?= $page['text'] ?></a>
	</li>
<?php } ?>
</ul>
</div>
</nav>
</div>
</div>
</header>


<?php include("./templates/pages/{$search['file']}.tpl.php"); ?>

<!-- common -->
<div class="container">
<div class="row" style="margin-bottom:50px" id="about">
<div class="col-6 col-md-2">
<h5><?= $contacts['about']?></h5>
<p><a href="#"><?= $contacts['about1']?></a></p>
<p><a href="#"><?= $contacts['about2']?></a></p>
<p><a href="#"><?= $contacts['about3']?></a></p>
<p><a href="#"><?= $contacts['about4']?></a></p>
<p><a href="#"><?= $contacts['about5']?></a></p>
<p><a href="#"><?= $contacts['about6']?></a></p>
</div>
<div class="col-6 col-md-2">
<h5><?= $contacts['mission']?></h5>
<p><a href="#"><?= $contacts['mission1']?></a></p>
<p><a href="#"><?= $contacts['mission2']?></a></p>
<p><a href="#"><?= $contacts['mission3']?></a></p>
<p><a href="#"><?= $contacts['mission4']?></a></p>
<p><a href="#"><?= $contacts['mission5']?></a></p>
</div>
<div class="col-6 col-md-2">
<h5><?= $contacts['resources']?></h5>
<p><a href="#"><?= $contacts['resources1']?></a></p>
<p><a href="#"><?= $contacts['resources2']?></a></p>
<p><a href="#"><?= $contacts['resources3']?></a></p>
</div>
<div class="col-6 col-md-2">
<h5><?= $contacts['team']?></h5>
<p><a href="#"><?= $contacts['team1']?></a></p>
<p><a href="#"><?= $contacts['team2']?></a></p>
<p><a href="#"><?= $contacts['team3']?></a></p>
</div>
<div class="col-12 col-md-4" styles="height:186px">
<a href="#" style="cursor:pointer;text-decoration:none"><img src="./images/<?= $contacts['image']?>" class="img-fluid"></a>
</div>
</div>
</div>

<!-- footer -->
<footer class="container-fluid" style="background-color:#e8ebe9">
<div class="row" style="margin-bottom:50px;padding-bottom:25px">
<div class="col-12" style="margin-top:30px;text-align:center">
<span style="color:#a5227b;font-weight:700"><?= $footer['address1']?></span><span><?= $footer['address2']?></span>
</div>

<div class="col-12" style="text-align:center">
<p style="color:#a5227b;margin-bottom:0"><a href="#" style="cursor:pointer;text-decoration:none;color:#a5227b;font-weight:700;margin-right:20px"><?= $footer['policy']?></a><a href="#" style="cursor:pointer;text-decoration:none;color:#a5227b;font-weight:700"><?= $footer['important']?></a></p>
<span style="color:#2a2a21"><?= $footer['website']?></span><span><a href="#" style="cursor:pointer;text-decoration:none;color:#a6d556"><?= $footer['company']?></a></span>
</div>
<div class="col-12" style="text-align:center"><a href="https://communitychange.org/" target="_blank" style="cursor:pointer;text-decoration:none"><?= $footer['organization']?></a></div>
</div>
</footer>

</body>
</html>