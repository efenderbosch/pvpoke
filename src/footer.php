		</div><!--end #main-->
	</div><!--end #main-wrap-->
	
	<footer>
		<p class="copyright">Version <a href="https://github.com/pvpoke/pvpoke/releases"><?php echo $SITE_VERSION; ?></a> &copy; 2019, released under the <a href="https://opensource.org/licenses/MIT" target="_blank">MIT license</a> | <a href="<?php echo $WEB_ROOT;?>privacy/">Privacy Policy</a></p>
		<p>Pokémon and Pokémon GO are copyright of The Pokémon Company, Niantic, Inc., and Nintendo. All trademarked images and names are property of their respective owners, and any such material is used on this site for educational purposes only.</p>
	</footer>

	<?php
	$bgDir = '';

	if((isset($_SETTINGS->theme))&&($_SETTINGS->theme != "default")){
		$bgDir = '/themes/'.$_SETTINGS->theme.'/';
	}
	?>
	<img class="background" src="<?php echo $WEB_ROOT; ?>img/<?php echo $bgDir; ?>bg.jpg" />
	
	<!--Global script-->
	<script>
		$(".hamburger").click(function(e){
			$("header .menu").slideToggle(125);
		});
		
		// Submenu interaction on desktop
		
		$(".menu .more").on("mouseover click", function(e){
			$(".submenu").addClass("active");
		});
		
		$("body").on("mousemove click", function(e){
			if($(".submenu:hover, .more:hover").length == 0){
				$(".submenu").removeClass("active");
			}
		});
		
		// Auto select link
		
		$(".share-link input").click(function(e){
			this.setSelectionRange(0, this.value.length);
		});
		
		// Link share copying
		
		$("body").on("click", ".share-link .copy", function(e){
			var el = $(e.target).prev()[0];
			el.focus();
			el.setSelectionRange(0, el.value.length);
			document.execCommand("copy");
		});
		
		// Toggleable sections
		
		$("body").on("click", ".toggle", function(e){
			e.preventDefault();
			
			$(e.target).closest(".toggle").toggleClass("active");
		});
		
	</script>
</body>
</html>