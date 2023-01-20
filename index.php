<!DOCTYPE html>
<html>
<head>
	<title>Название</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='shortcut icon' href='files/pictures/im/logo.png'>
	<link href='files/styles/not_mine/bootstrap.min.css' rel='stylesheet'>
	<link rel='stylesheet' type='text/css' href='files/styles/not_mine/reset.css'>
	<link rel='stylesheet' type='text/css' href='files/styles/style.css'>
</head>
<body>
	<header>
		<p>
			Название
		</p>
	</header>
	<!--спрятанные блоки для блока products - формы для отправки эл. почты-->
	<section>
		<div class='hid' id='hidden_1'>
			<img src='files/pictures/im/close.png' class='back_hid' id='back_1'>
			<div class='div_txt'>
				<p class='txt'>
					Услуга по созданию для вас особенного и неповторимого образа, благодаря которому вы наконец сможете показать всем своё внутреннее Я
				</p>
			</div>
			<form>
				<div class='mail'>
					<p class='em_txt'>
						Введите ваш е-mail:
					</p>
					<input name='email' class='data_1' maxlength='25' placeholder='Введите ваш e-mail...'>
					<input type='submit' name='submit' class='butt' id='butt_1'>
				</div>
			</form>
			<div class='error'>
				<p class='error_txt' id='er_1'>
					Вы не указали ваш e-mail!
				</p>
			</div>
		</div>
		<div class='hid' id='hidden_2'>
			<img src='files/pictures/im/close.png' class='back_hid' id='back_2'>
			<div class='div_txt'>
				<p class='txt'>
					Услуга по созданию дизайна в вашем доме, ведь для того, чтобы привнести красоту в свой мир, нужно начать с того места где ты живешь
				</p>
			</div>
			<form>
				<div class='mail'>
					<p class='em_txt'>
						Введите ваш е-mail:
					</p>
					<input name='email' class='data_2' maxlength='25' placeholder='Введите ваш e-mail...'>
					<input type='submit' name='submit' class='butt' id='butt_2'>
				</div>
			</form>
			<div class='error'>
				<p class='error_txt' id='er_2'>
					Вы не указали ваш e-mail!
				</p>
			</div>
		</div>
		<div class='hid' id='hidden_3'>
			<img src='files/pictures/im/close.png' class='back_hid' id='back_3'>
			<div class='div_txt'>
				<p class='txt'>
					Объединение двух предыдущих услуг, специально для вас мы создадим вам особенный образ и невероятный дизайн квартиры
				</p>
			</div>
			<form>
				<div class='mail'>
					<p class='em_txt'>
						Введите ваш е-mail:
					</p>
					<input name='email' class='data_3' maxlength='25' placeholder='Введите ваш e-mail...'>
					<input type='submit' name='submit' class='butt' id='butt_3'>
				</div>
			</form>
			<div class='error'>
				<p class='error_txt' id='er_3'>
					Вы не указали ваш e-mail!
				</p>
			</div>
		</div>
		<div class='fin_hid'>
			<img src='files/pictures/im/close.png' class='back_fh'>
			<div class='fin_div'>
				<p class='fin_txt'>
					Спасибо! Наш работник свяжется с вами.
				</p>
			</div>
		</div>
	</section>
	<main>
		<!--текст с задним фоном-фото-->
		<div class='pretty_back'>
			<p>
				<span>
					"Мы принесём красоту в&nbsp;ваш&nbsp;мир!"
				</span>
			</p>
		</div>
		<!--три картинки - информационно-декоративные элементы-->
		<div class='lil_inf'>
				<img id='lil_1' src='files/pictures/im/01.png'>
				<img id='lil_2' src='files/pictures/im/02.png'>
				<img id='lil_3' src='files/pictures/im/03.png'>
		</div>
		<!--картинка с задним фоном-фото-->
		<div class='decor'>
			<img src='files/pictures/im/letters-on.png'>
		</div>
		<!--блок с появлением при прокрутке страницы-->
		<div class='anim_decor'>
			<p>
				<span class='head_dec'>
					Только лучшие дизайны
				</span>
				<br>
				<span class='inf_dec'>
					Работу над вашей проблемой будет вести группа наших лучших дизайнеров, из их вариантов будет выбираться стиль подходящий вам больше всего. В крайнем случае вы сможете сами выбрать себе стиль который понравится лично вам. Каждый наш сотрудник был проверен временем, и каждый наш клиент не был обделен вниманием - каждый для нас особенный.
				</span>
			</p>
			<img class='img_dec' src='files/pictures/im/02.jpg'>
		</div>
		<!--блок с выбором услуги и кнопками для появления формы для отправки эл. почты в БД-->
		<div class='products'>
			<div class='outer_pro'>
				<div>
					<img src='files/pictures/im/cloths.png'>
					<p>
						Услуга по созданию для вас особенного и неповторимого образа, благодаря которому вы наконец сможете показать всем своё внутреннее Я
					</p>
					<div id='prod_1'>
						<p>25000 руб.</p>
					</div>
					<br>
				</div>
				<div>
					<img src='files/pictures/im/floor.jpg'>
					<p>
						Услуга по созданию дизайна в вашем доме, ведь для того, чтобы привнести красоту в свой мир, нужно начать с того места где ты живешь
					</p>
					<div id='prod_2'>
						<p>35000 руб.</p>
					</div>
					<br>
				</div>
				<div>
					<img src='files/pictures/im/floor_cloths.png'>
					<p>
						Объединение двух предыдущих услуг, специально для вас мы создадим вам особенный образ и невероятный дизайн квартиры
					</p>
					<div id='prod_3'>
						<p>50000 руб.</p>
					</div>
					<br>
				</div>
			</div>
		</div>
		<!--блок с комментариями и их отправкой (с помощью БД)-->
		<div class='comments'>
			<div class='inner_block'>
				<p class='just_text'>Комментарии</p>
				<div class='no_comment'></div>
				<div class='all_comments'>
					<?php
						$pdo = new PDO('mysql:host=localhost;dbname=landing', 'root', 'root');
						if ($pdo == false) {
							echo '<script>window.onload = function() {setTimeout(function () {alert("Ошибка: Невозможно подключиться к MySQL" . mysqli_connect_error())} ,1000)}</script>';
						}
						else {
							echo '<script>window.onload = function() {setTimeout(function () {alert("Соединение с MySQL было успешно установлено")} ,1000)}</script>';
						}
						$sql = 'SELECT * FROM comments';
						$statement = $pdo->query($sql);
						$comments = $statement->fetchAll(PDO::FETCH_ASSOC);
						$comments_flip = array_reverse($comments);
						foreach ($comments_flip as $comment):?>
							<div class='the_comment'>
								<hr>
								<h2 class='name'><?= $comment['name'];?></h2>
								<p class='date'><?= $comment['date_time'];?></p>
								<div class='outer_comment'>
									<p class='comment'><?= $comment['content'];?></p>
								</div>
							</div>
						<?php endforeach;?>
				</div>
				<div class='open_comments'><span>Показать следующие комментарии</span></div>
				<div class='close_comments'><span>Скрыть комментарии</span></div>
				<input class='user_name' data-toggle='tooltip' placeholder='Ваш ник...'>
				<textarea class='text_comm' data-toggle='tooltip' placeholder='Напишите комментарий...'></textarea>
				<input type='submit' class='comm_butt'>
			</div>
		</div>
		<!--блок с картинками, взятыми из локальной папки-->
		<div class='gallary'>
			<div id='viewport'>
	            <ul id='slidewrapper'>
	                <?php
	                	$dir = 'files/pictures/gallary';
	                	$files = array_diff(scandir($dir), array('..', '.'));
						foreach ($files as $file):?>
	                		<li class='slide'><img src='files/pictures/gallary/<?= $file;?>' alt='1' class='slide-img'></li>
					<?php endforeach;?>
	            </ul>
		        <div id='prev-next-btns'>
	                <div id='prev-btn'></div>
	                <div id='next-btn'></div>
	            </div>
	        </div>
		</div>
	</main>
	<footer>
		<div>
			<p>
				<a href='tel:+7 800 555-35-35'>
					Телефон: +7 800 555 35 35
				</a>
				<a href='mailto:ilushavolkov@mail.ru'>
					Эл. почта: mail@mail.ru
				</a>
			</p>
		</div>
	</footer>
	<script src='files/script/not_mine/jquery-3.6.1.min.js'></script>
	<script src='files/script/not_mine/popper.min.js'></script>
	<script src='files/script/not_mine/bootstrap.min.js'></script>
</body>
<script src='files/script/script.js'></script>
<script>
	$(document).ready(function(){
		//функция для отправки в php файл эл. почты через блок products, для каждой услуги отдельная форма и функция (каждая услуга сохраняется в БД под номером 1,2 или 3)
		function send_prod(submit, input_data, block, fin_block, er_block) {
			$(submit).on('click', function(){
				event.preventDefault()
				var mail_1 = $('input.data_1').val()
				var mail_2 = $('input.data_2').val()
				var mail_3 = $('input.data_3').val()
				if (mail_1 || mail_2 || mail_3) {
					$.ajax({
						method: 'POST',
						url: 'files/script/send.php',
						data: {email_1:mail_1, email_2:mail_2, email_3:mail_3}
							})
						$(block).css({'visibility':'hidden'})
						$(er_block).css({'visibility':'hidden'})
						$(fin_block).css({'visibility':'visible'})
						$(input_data).val('')
				}
				else {$(er_block).css({'visibility':'visible'})}
			})
		}
		send_prod('input#butt_1', 'input.data_1', '#hidden_1', '.fin_hid', '#er_1')
		send_prod('input#butt_2', 'input.data_2', '#hidden_2', '.fin_hid', '#er_2')
		send_prod('input#butt_3', 'input.data_3', '#hidden_3', '.fin_hid', '#er_3')
		//функция для отправки комментариев в php файл и последующего обновления страницы (чтобы обновились комментарии)
		function send_comm() {
			var name = $('.user_name').val()
			var content = $('.text_comm').val()
			if (name) {
				if (content) {
					$.ajax({
						method: 'POST',
						url: 'files/script/send.php',
						data: {user:name, msg:content}
						})
					$('.user_name').val('')
					$('.text_comm').val('')
					setTimeout(function(){
					    window.location.reload()
					},100)
				}
				else {
					tooltip ('.text_comm')
				}
			}
			else {
				tooltip ('.user_name')
				}
			}
		//функция при пустом значении одного из полей комментариев
		function tooltip(clas) {
			$(clas).tooltip('show')
			setTimeout(function(){
			    $(clas).tooltip('hide')
			},2000)
		}
		$('.comm_butt').click(send_comm)
		$('[data-toggle="tooltip"]').tooltip({
			title: 'Введите текст...',
			placement: 'bottom',
			trigger: 'manual'
		});
		//тест на проверку отправки ajax запроса
		$(document)
			.ajaxError(function () {
				alert('возникла ошибка при отправлении ajax запроса')
			})
			.ajaxSuccess(function () {
				alert('ajax запрос был успешно выполнен')
			})
	})
</script>
</html>