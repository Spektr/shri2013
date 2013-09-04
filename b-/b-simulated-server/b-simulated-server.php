<?php
header('Content-type: application/json; charset=utf-8');

switch($_REQUEST['action']){

	case "getQuestions":
		echo '{
			"status":true,
			"message":"Ok",
			"items":[
				{
				"request":"Год рождения.",
				"answerRegExp":"[0-9]{4}",
				"answer":"1.987год."
				},
				{
				"request":"Город, в котором вы живёте.",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Вуз, факультет, специальность, кафедра.",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Год окончания вуза.",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Уровень владения английским языком",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Чего вы ожидаете от участия в Школе?",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Откуда вы о нас узнали?",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Сколько времени вы были бы готовы уделять стажировке или работе в Яндексе?",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Расскажите о вашем опыте разработки. Нам будет интересно всё — как серьезный интерфейс, так и просто домашняя страничка.",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Если вы где-нибудь работали, расскажите, какие у вас были должностные обязанности и был ли опыт работы в команде.",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Перечислите, какими программными продуктами вы пользуетесь в своей работе — от редактора до специализированных утилит (Intellij Idea, Node.js, Uglify.js, GNU Make). Для каждого инструмента укажите, какие задачи вы с помощью него решаете и почему выбрали именно его.",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Пользуетесь ли вы командной строкой? Какими командами вы пользуетесь и какие задачи вы решаете с их помощью? С какими программами вы преимущественно или полностью взаимодействуете через интерфейс командной строки?",
				"answerRegExp":false,
				"answer":"=closed="
				},
				{
				"request":"Напишите на JavaScript функцию, которая выводит список всех чисел, которые равны сумме факториалов своих цифр. Пример такого числа:<br />4! + 0! + 5! + 8! + 5! = 40585<br />В качестве ответа на вопрос пришлите ссылку на http://jsfiddle.net/ с вашим кодом или на ваш репозиторий на https://github.com/.",
				"example":"p-/b-factorion/b-factorion",
				"answerRegExp":false,
				"answer":"https://github.com/Spektr/shri/tree/master/p-/b-factorion"
				},
				{
				"request":"Вы — пилот грузового межгалактического корабля. Ваша работа — перевозка грузов с одной планету на другую. Грузоподъемность вашего корабля ограничена, поэтому за один рейс вы можете перевезти не более N кг полезного груза. Ваш корабль умеет сообщать свое состояние (местоположение и степень загруженности), а также летать в любую точку пространства. Каждая планета может содержать на себе груз, который можно взять. Также на каждой планете груз можно оставить .<br />Задание<br />Даны незавершенные интерфейсы корабля и планеты. Напишите недостающий код.<br />Полное условие задачи доступно на<br />https://github.com/yandex-shri/introtask-space.<br />В качестве ответа на вопрос пришлите ссылку на http://jsfiddle.net/ с вашим кодом или на ваш репозиторий на https://github.com/.<br />",
				"example":"p-/b-space-sheep/b-space-sheep",
				"answerRegExp":false,
				"answer":"https://github.com/Spektr/shri/tree/master/p-/b-space-sheep"
				},
				{
				"request":"Сверстайте форму-анкету с нашими заданиями для кандидатов. Страница должна работать в следующих браузерах: MSIE (8, 9, 10), Google Chrome (26, 27), Firefox (20, 21), Opera (12.15, 12.14), Яндекс.Браузер 1.5. По возможности используйте приёмы безопасной деградации CSS. Страница должна содержать интерактив, реализованный с помощью JS и jQuery.",
				"answerRegExp":false,
				"answer":" github: https://github.com/Spektr/shri/ \n логи переданных ответов: /shri/b-/b-simulated-server/log.txt"
				}
			]
		}';
		
	break;
	
	case "sendQuestion":
		if(file_put_contents("log.txt", $_POST['data']."\n---------------\n", FILE_APPEND)){
			echo '{"status":true}';
		}else{
			echo '{"status":false}';
		}
	break;
	
	default:
		echo 'хрень';
	break;

}
?>
