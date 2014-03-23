<?php include 'header.php' ?>


    <div class="container">


<?php
$file = "http://localhost/public/data.json";
$string = file_get_contents($file);
$results = json_decode($string);

// TODO: sort
$projects = $results;
/*
echo "<code>";
//var_dump($projects);
echo "</code>";
*/
?>

      <div class="starter">
        <h1><?= $this->pageTitle ?></h1>
        <p class="lead">Real-time visuals and video games by <a href="#">Eddie Lee</a></p>

        <div class="row">

        	<?php foreach( $projects as $id => $project ) {?>

        	<div class="col-sm-4" >
        		<div class="project-item">
        			<!--<img class="img-responsive" src ="<?= $this->app->getRootPath().'images/projects/'.$id.'.png' ?>"/>-->
        			<a href="#"><img class="img-responsive" src ="<?= $this->app->getRootPath().'images/projects/sigma.png' ?>"/></a>
        			<div class="info">
        				<h3><?= $project->title;?></h3>
        				<div class="desc"><?= $project->desc;?></div>
        				<div class="desc-footer"><span class="date">March 3, 2014</span></div>
        			</div>
        		
        		</div>
        	</div>

        	<?php }?>
        </div>
      </div>

    </div><!-- /.container -->

<?php include 'footer.php' ?>
