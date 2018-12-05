<!-- Заголовок title -->
<?php 
ob_start();
$title="Контакт ";

 ?>

<!--   message form            -->
<div class="container">
<div class="row">
<div class="col-md-6">
	<div class="widget-content">
	<div class="page-title">Ваше сообщение</div>
<?php
	if(!isset($_GET['message']))
	{
	?>
	
	<div class="contact-form">
		<form  action="send_contact" id="myForm" method="post" >
				
				<p><input class="form-control" type="text" id="name" name="name" placeholder="Ваше имя"  autofocus required ></p> 
                                <p><input class="form-control" type="email" id="email" name="email" placeholder="Email address" required></p> 
				<p><textarea class="form-control" id="mess" name="message" placeholder="Сообщение" required></textarea></p> 	
				
				<input class="button" type="submit" name ="send" id="submit" value="Send it">				
		</form>	
	</div> <!-- /.contact-form -->
	<?php
	}
	elseif(isset($_GET['message']) && $_GET['message']=='send'){
	echo '
		<h3>Отправка сообщения</h3>		
		<p>Ваше сообщение отправлено. Спасибо. </p>';
	echo '<hr><p><a  href="contact">Написать сообщение</a> </p>';
	}
	else{
		echo '<h3>Сообщение об ошибке</h3>';		
		echo '<p><b>Please correct the following error:</b><br />'.$_GET['message'].'</p>';
		echo '<hr><p><a  href="contact">Написать сообщение</a> </p>';
	 
	}
	
	?>
	
	</div> <!-- /.inner-content -->
</div> <!-- /.col-md-6 -->	


	
<div class="col-md-6">
	<div class="widget-content">
	<div class="page-title">Our Location</div>
   	<h3>Ida-Virumaa Kutsehariduskeskus</h3>
	<p >
    <br>
    <b>Aadress:</b> Kutse 13, 41533 Jõhvi, Ida-Virumaa<br>
	 <b>Telefon:</b> 332 0381<br>
	 <b>E-post:</b> info@ivkhk.ee<br>
 	</p>
	</div> <!-- /.inner-content -->
</div> <!-- /.col-md-6 -->	
	
</div> <!-- /.row -->	
</div> <!-- /.container -->		
	
	
	
	


<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";