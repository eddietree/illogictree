<?php include 'header.php' ?>


    <div class="container">


<?php

echo $_SERVER{'DOCUMENT_ROOT'} . '/images/projects/';
echo "<br/>";
echo $_SERVER{'HTTP_HOST'};
//var_dump($_SERVER);

$file = "http://".$_SERVER{'HTTP_HOST'}."/data.json";
$string = file_get_contents($file);
$results = json_decode($string);

// TODO: sort
$projects = $results;

/*
echo "<code>";
var_dump($projects);
echo "</code>";*/



?>

      <div class="starter">
        <!--<h1><?= $this->pageTitle ?></h1>-->
        <p class="lead">Real-time visuals and video games by <a href="#">Eddie Lee</a></p>

        <div id="mason-container">

            <?php foreach( $projects as $id => $project ) 
            {
                $img_id = strtolower($id);
                $img_dir = $_SERVER{'DOCUMENT_ROOT'} . '/images/projects/';
                $img_path = $img_id . '.png';

                if( !file_exists( $img_dir . $img_path ) )
                {
                    $img_path = $img_id . '.jpg';

                    if( !file_exists( $img_dir . $img_path ) )
                    {
                        $img_path = "notfound.png";
                    }
                }

                $img_full_path = $this->app->getRootPath().'images/projects/' . $img_path;

                $item_class = "cat-" . strtolower($project->category);
            ?>

            <div class="item <?=$item_class?><?php if( property_exists($project,'highlight') ) echo " w2" ?>">
                <div class="project-item">
                    <a href="<?= $project->link ?>"><img class="img-responsive" alt="<?= $project->title ?>" src="<?= $img_full_path ?>"/></a>
                    <h3><?= $project->title;?></h3>
                    <div class="info">
                        <div class="desc"><?= $project->desc;?></div>

                        <?php if ( property_exists($project, 'more_links')) { ?>
                            <p class="more-links">

                            <?php foreach( $project->more_links as $link_title => $link_url ) { ?>
                                <a href="<?= $link_url ?>"><?= $link_title ?></a>
                                <?php  if ($link_url !== end($project->more_links)) echo "//" ?>
                            <?php } ?>

                            </p>
                        <?php } ?>

                        <?php if ( property_exists($project, 'btn')) { 
                                foreach( $project->btn as $link_title => $link_url ) { 
                            ?>
                            <a href="<?= $link_url ?>" class="btn btn-info btn-xs active" role="button"><?= $link_title ?></a>
                        <?php }} ?>

                        <div class="desc-footer">
                            <span class="category"><i class="fa fa-tag"></i> <a href="/<?= strtolower($project->category)?>"><?= $project->category?></a></span>
                            <span class="date"><i class="fa fa-calendar-o"></i> <?= date("M j, o", strtotime($project->date)) ?></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                
                </div>
            </div>

            <?php }?>
        </div>

      </div>

    </div><!-- /.container -->

<?php include 'footer.php' ?>
