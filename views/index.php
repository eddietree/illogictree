<?php include 'header.php' ?>


    <div class="container">


<?php
$file = "http://localhost/public/data.json";
$string = file_get_contents($file);
$results = json_decode($string);

foreach( $results as $key=>$data)
{
	echo $key;
}
?>


      <div class="starter">
        <h1><?= $this->pageTitle ?></h1>
        <p class="lead"><?= $this->helloWorld ?></p>
      </div>

    </div><!-- /.container -->

<?php include 'footer.php' ?>
