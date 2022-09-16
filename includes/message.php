<?php 
/*session_start();
if(isset($_SESSION['mensagem'])):?>
	<!--<div class="alert alert-primary" role="alert">
  	 	<?php //echo $_SESSION['mensagem']; ?>
	</div>-->
	<!--<script type="text/javascript">
		function confirmacao(){
			$.notify({
				message: '<?php //echo $_SESSION['mensagem']; ?>'
			},{
				type: 'sucess'  
			});
			return false
		}
	</script>!-->
<?php
endif;
session_unset();
 ?>