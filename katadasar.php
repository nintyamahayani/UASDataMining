<?php
include_once 'IDNstemmer.php';
?>

<html>
	<head>
		<title>Information Retrieval</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		

        <!-- Begin Page Content -->
		<section id="intro" class="wrapper style1 fullscreen fade-up">

        <div class="container-fluid">

        <h3 class="font-weight-bold">&nbsp;Pencarian Kata Dasar</h3>

        <form method="post" action="">
            <input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
            <br><input class="btnForm btn btn-primary" type="submit" name="submit" value="Submit"/>
        </form>
            <?php
            if(isset($_POST['kata'])){
                $teksAsli = $_POST['kata'];
                echo "Teks asli : ".$teksAsli.'<br/>';
                $st = new IDNstemmer();
                $hasil=$st->doStemming($teksAsli);
                echo "Kata dasar : ".$hasil.'<br/>';
            }
            ?>
			<br><a href="index.html" class="button">Back</a>
        </div>
        <!-- /.container-fluid -->
		</section>
	  <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

</body>

</html>
