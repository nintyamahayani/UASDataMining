<?php 

    $con = mysqli_connect('localhost', 'root', '', 'uas');
    $query = "SELECT * FROM dokumen ";
    $result = mysqli_query($con, $query);

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Information Retrieval</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>
	
        <!-- Begin Page Content -->
		<section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="container-fluid">
		<br>
		<a href="index.html" class="button">Home</a>
        <h1 class="font-weight-bold text-center">Hasil Tokenisasi</h1>
        <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
            <thead class="text-center">
                <tr>
                      <th class="font-weight-bold">Nama File</th>
                      <th class="font-weight-bold">Tokenisasi</th>
                      <th class="font-weight-bold">TokenStem</th>
                </tr>
            </thead>

        <?php
            while($row = mysqli_fetch_array($result)){
                echo '<tbody>
                        <tr>
                            <td> '.$row['nama_file'].'</td>
                            <td> '.$row['token'].'</td>
                            <td> '.$row['tokenstem'].'</td>
                        </tr>
                       </tbody';

            }
        ?>
        </table>
        

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
