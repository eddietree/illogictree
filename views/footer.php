    <script src="<?= $this->app->getRootPath() ?>extlib/jquery-1.11.0.min.js"></script>
    <script src="<?= $this->app->getRootPath() ?>extlib/masonry.pkgd.min.js"></script>
    <script src="<?= $this->app->getRootPath() ?>extlib/bootstrap/js/bootstrap.min.js"></script>

    <script>

    $(window).load(function(){
    	var container = document.querySelector('#mason-container');
		var msnry = new Masonry( container, {
		  itemSelector: '.item'
		});
    })

    
    </script>
  </body>
</html>