@if($flash = session('message'))
	<div id="flash-message" class="alert n-poz col-xs-10 col-sm-10 col-md-3">
		{{ $flash }}
	</div>
	<style>
		
	@media (max-width: 468px){
			.n-poz{
			position: fixed;
			right: 9%;
			bottom: 0px;
			text-align: center;
			z-index: 9999;
			background-color: #303030;
			color: white;
			  box-shadow: none;

		}
	}
	@media (min-width: 469px) and (max-width: 767px){
			.n-poz{
			position: fixed;
			right: 9%;
			bottom: 0px;
			text-align: center;
			z-index: 9999;
			background-color: #303030;
			color: white;
			  box-shadow: none;

		}
	}
			
			@media (min-width: 768px) and (max-width: 991px) {
			.n-poz{
			position: fixed;
			right: 9%;
			bottom: 0px;
			text-align: center;
			z-index: 9999;
			background-color: #303030;
			color: white;
			  box-shadow: none;

		}
	}
	@media (min-width: 992px) and (max-width: 1199px){
			.n-poz{
			position: fixed;
			right: 20px;
			bottom: 0px;
			text-align: center;
			z-index: 9999;
			background-color: #303030;
			color: white;
			  box-shadow: none;

		}
	}
	@media (min-width: 1200px) {
			.n-poz{
			position: fixed;
			right: 20px;
			bottom: 0px;
			text-align: center;
			z-index: 9999;
			background-color: #303030;
			color: white;
			  box-shadow: none;

		}
	}

	</style>
	<script>
		setTimeout(function() {
            $('#flash-message').fadeOut('fast');
            }, 2000);

</script>
@endif