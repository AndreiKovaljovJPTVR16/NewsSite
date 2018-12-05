<?php ob_start() ?>
<h2>404 ошибка  </h2>
<article>
<p>
	<h3>404 ошибка - что это такое?</h3>
	Когда человек хочет перейти на новую страницу, браузер 
	обращается к серверу чтобы тот передал ему её содержимое. 
	Если сайт работает, но по запрашиваемому URL страница не найдена, 
	то сервер сообщает о 404 ошибке.
</p>

</article>

<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php";