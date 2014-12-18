<?php
header('Content-Type: text/html; charset=utf-8');
	$ConnectDB = mysql_connect("localhost","blackteg_test","12345678");
	if(!mysql_select_db('blackteg_test',$ConnectDB))
	{
/*		echo "Ошибка соединения<br>";*/
		$CreateDBMYSQL = 'CREATE DATABASE blackteg_test';
		if(mysql_query($CreateDBMYSQL,$ConnectDB))
		{
/*			echo "База успешно создана<br>";*/
			if(mysql_select_db('site_db',$ConnectDB))/* echo "Подключение к базе успешно<br>"*/;
/*			else echo "Ошибка соединения<br>";*/
		}
/*		 else echo "Ошибка при создании базы<br>";*/
	}
/*	else echo "Подключение к базе успешно<br>";*/
	
	mysql_query("CREATE TABLE IF NOT EXISTS users(
					idUser INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					name VARCHAR(30) NOT NULL,
					surname VARCHAR(30) NOT NULL,
					email VARCHAR(30) NOT NULL,
					password VARCHAR(30) NOT NULL
					)");					

	mysql_query("CREATE TABLE IF NOT EXISTS goods (
					id_Goods     INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					name_Goods   VARCHAR(30),
					name_Firm    VARCHAR(30),
					price        REAL,
					type_Goods   VARCHAR(30),
					number_Goods INTEGER
		  			 )");
	mysql_query("INSERT INTO goods (id_goods, name_goods, name_firm, price, type_goods, number_goods) VALUES
					(1, 'Ноутбук', 'ASUS', 22000, 'Ноутбук', 5),
 					(2, 'Ноутбук', 'ACER', 15000, 'Ноутбук', 15),
					(3, 'Ipad', 'Apple', 40000, 'Планшет', 2),
					(4, 'Микроволновая печь', 'LG', 1500, 'Бытовая техника', 12),
 					(5, 'Телевизор', 'Philips', 7500, 'Телевизор', 12),
 					(6, 'Телевизор', 'Hyundai', 45000, 'Телевизор', 1),
 					(7, 'Наушники', 'Sony', 800, 'Аксессуары', 75),
 					(8, 'Электронная книга', 'PocketBook', 5000, 'Электронная книга', 39),
 					(9, 'Монитор', 'DELL', 4000, 'Монитор', 25),
 					(10, 'Принтер', 'Canon', 3500, 'Фото и Видео', 5); ");
					 
	mysql_query("CREATE TABLE IF NOT EXISTS client_base (
					id_client  INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					client_name VARCHAR(10),
					client_surname VARCHAR(15),
					client_patronymic VARCHAR(15),
					phone_number VARCHAR(30),
					card_store VARCHAR(30)
		 			 )");
	mysql_query("INSERT INTO client_base (id_client, client_name, client_surname, client_patronymic, phone_number, card_store) VALUES
					(1, 'Алексей', 'Смирнов', 'Александрович', 89116743458, 12300000001),
					(2, 'Ирина', 'Кузнецова', 'Анатольевна', 89213459872, 23000000002),
					(3, 'Надежда', 'Соколова', 'Григорьевна', 89876578435, 78300000003),
					(4, 'Максим', 'Лебедев', 'Дмитриевич', 89027640193, 82300000004),
					(5, 'Иван', 'Морозов', 'Игоревич', 89047381123, 23400000005),
					(6, 'Алёна', 'Волкова', 'Михайловна', 89125648392, 83900000006),
					(7, 'Екатерина', 'Соловьёва', 'Петровна', 89764530912, 99900000007),
					(8, 'Всеволод', 'Васильев', 'Сергеевич', 89569820834, 29300000008),
					(9, 'Олег', 'Павлов', 'Фёдорович', 89353425679, 87300000009),
					(10, 'Виктория', 'Виноградова', 'Юрьевна', 89765000123, 83200000010);");	
					 
	mysql_query("CREATE TABLE IF NOT EXISTS customs (
					id_Custom     INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					id_Client     INTEGER REFERENCES client_base(ID_client),
					id_Goods      INTEGER REFERENCES goods(Id_Goods),
					num_Goods     INTEGER,
					custom_Date   DATE,
					delivery      BOOLEAN
		  			 )");
	mysql_query("INSERT INTO customs (id_custom, id_client, id_goods, num_goods, custom_date, delivery) VALUES
					(1, 10, 1, 2, '2014-10-10', 'true'),
					(2, 9, 1, 1, '2014-12-01', 'false'),
					(3, 8, 2, 2, '2014-11-27', 'true'),
					(4, 7, 3, 1, '2013-12-14', 'false'),
					(5, 6, 3, 1, '2014-11-27', 'true'),
					(6, 5, 4, 3, '2014-12-07', 'true'),
					(7, 4, 5, 20, '2014-11-26', 'true'),
					(8, 3, 8, 1, '2014-12-07', 'false'),
					(9, 2, 8, 3, '2014-10-15', 'false'),
					(10, 1, 10, 2, '2014-11-26', 'true');");	
					 
	mysql_query("CREATE TABLE IF NOT EXISTS delivery (
					id_Delivery     INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					iD_Goods        INTEGER REFERENCES Goods(Id_Goods) ON DELETE CASCADE,
					delivery_Date   DATE,
					price_Delivery  REAL,
					address_Del     VARCHAR(30)
		   			)");
	mysql_query("INSERT INTO delivery (id_delivery, id_goods, delivery_date, price_delivery, address_del) VALUES
					(1, 1, '2014-10-12', 300, 'бул. Новаторов,д 5'),
					(2, 1, '2014-12-05', 600, 'пр. Непокоренных, д 68'),
					(3, 2, '2014-11-28', 300, 'ул. Новороссийская, д 10'),
					(4, 3, '2014-12-14', 800, 'ул. Березовая, д 16'),
					(5, 3, '2014-11-30', 600, 'ул. Пушковская, д 35'),
					(6, 4, '2014-12-08', 300, 'ул. Елисеевская, д 40'),
					(7, 5, '2014-11-27', 2800, 'ул. Тельмана, д 1'),
					(8, 8, '2014-12-09', 600, 'ул. Новостроек, д 25'),
					(9, 8, '2014-10-16', 700, 'ул. Софийская, д 48'),
					(10, 10, '2014-11-27', 600, 'пр. Трамвайный, д 15');");

	mysql_query("CREATE TABLE IF NOT EXISTS discount_campaing (
					id_DC           INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					name_DC         VARCHAR(30),
					dc_date_start   DATE,
					dc_date_end     DATE,
					for_card        BOOLEAN,
					for_internet    BOOLEAN,
					discount_pr     REAL
		  			)");
	mysql_query("INSERT INTO discount_campaing (id_dc, name_dc, dc_date_start, dc_date_end, for_card, for_internet, discount_pr) VALUES
					(1, 'Новогодняя распродажа', '2014-12-01', '2014-12-31', 'false', 'true', 15),
					(2, 'Готовимся к школе', '2014-08-01', '2014-09-30', 'true', 'false', 12),
					(3, 'День Рождения', '2014-01-01', '2014-12-31', 'true', 'false', 40),
					(4, 'Накопительная', '2014-12-01', '2014-12-31', 'true', 'true', 4),
					(5, 'Большая покупка', '2014-12-01', '2014-12-31', 'true', 'true', 10),
					(6, 'Привет Весне', '2014-03-01', '2014-06-11', 'true', 'false', 18),
					(7, 'Пляжный сезон', '2014-06-01', '2014-06-01', 'false', 'true', 25),
					(8, 'Скидка на следующую покупку', '2014-01-01', '2014-12-01', 'true', 'false', 12),
					(9, 'Скидка новеньким', '2014-01-01', '2014-12-31', 'false', 'false', 2),
					(10, 'Второй такой же', '2014-01-01', '2014-12-31', 'true', 'true', 50);");		
					
	mysql_query("CREATE TABLE IF NOT EXISTS feedback (
					id_fb           INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					name_operator   VARCHAR(30),
					address_store   VARCHAR(30),
					phone_number    VARCHAR(30)
		  			 )");
	mysql_query("INSERT INTO feedback (id_fb , name_operator, address_store, phone_number) VALUES
					(1, 'Мария', 'пр. Московский, д 44', '2568974'),
					(2, 'Анатолий', 'ул. Пролетарская, д 36', '5469873'),
					(3, 'Остап', 'пл. Балканская, д 5', '3698514'),
					(4, 'Елизавета', 'пр. Занеский, д 67', '1597496'),
					(5, 'Алина', 'пр. Лиговский, д 26', '5469821'),
					(6, 'Евгений', 'пр. Невский, д 114', '6547913'),
					(7, 'Александр', 'ш. Петергофское, д 51', '9514763'),
					(8, 'Валентина', 'ш. Пулковское, д 19', '5497631'),
					(9, 'Егор', 'пр. Энгельса, д 154', '5498631'),
					(10, 'Глеб', 'пл. Конституции, д 7', '5498631');");
				
	mysql_query("CREATE TABLE IF NOT EXISTS employee(
					id_employee INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					employee_name VARCHAR(15) NOT NULL,
					surname VARCHAR(20) NOT NULL,
					patronymic VARCHAR(20) NOT NULL,
					post VARCHAR(30) NOT NULL,
					started_to_work DATE NOT NULL,
					store_address VARCHAR(70) NOT NULL,
					salary REAL NOT NULL,
					phone_number CHAR(11) NOT NULL
					)");			
	mysql_query("INSERT INTO employee (id_employee, employee_name, surname, patronymic, post, started_to_work, store_address, salary, phone_number) VALUES 
					(1, 'Роман', 'Ильин', 'Степанович', 'администратор зала', '2012-01-10', 'пр. Лиговский, д. 26', 24000, 89118736473),
					(2, 'Елена', 'Гаврилова', 'Вячеславовна', 'директор', '2009-10-20', 'пл. Балканская, д. 5', 85000, 89217389922),
					(3, 'Артём', 'Гусев', 'Маркович', 'бухгалтер', '2014-02-05', 'ш. Пулковское, д. 19', 30000, 89117385832),
					(4, 'Вероника', 'Никифорова', 'Тимофеевна', 'главный бухгалтер', '2010-09-15', 'пр. Московский, д. 44', 36000, 89650931004),
					(5, 'Руслан', 'Поляков', 'Витальевич', 'заместитель директора', '2013-06-03', 'пр. Энгельса, д. 154', 51000, 89534448921),
					(6, 'Оксана', 'Савельева', 'Владиславовна', 'продавец-консультант', '2012-05-28', 'пл. Конституции, д. 7', 22000, 89218994309),
					(7, 'Владимир', 'Соболев', 'Владимирович', 'продавец-консультант', '2014-07-16', 'пр. Московский, д. 44', 22000, 89110034567),
					(8, 'Олеся', 'Фролова', 'Константиновна', 'стажёр', '2014-11-30', 'пр. Заневский, д. 67', 8000, 89812347786),
					(9, 'Артур', 'Львов', 'Евгеньевич', 'системный администратор', '2010-10-10', 'ш. Петергофское, д. 51', 33000, 89213456782),
					(10, 'Матвей', 'Денисов', 'Сергеевич', 'менеджер', '2011-03-15', 'ул. Пролетарская, д. 36', 27000, 89817599988)");
	
	mysql_query("CREATE TABLE IF NOT EXISTS orders_to_suppliers (
					id_otp INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					id_supp INT UNSIGNED REFERENCES suppliers(id_supp),
					id_goods INT UNSIGNED REFERENCES GOODS(id_Goods),
					number_order INT UNSIGNED NOT NULL,
					date_order DATE NOT NULL,
					summ REAL NOT NULL
					)");

	mysql_query("INSERT INTO orders_to_suppliers (id_otp, id_supp, id_goods, number_order, date_order, summ) VALUES 
					(1, 2, 3, 1, '2014-03-02', 40000),
					(2, 6, 7, 15, '2013-08-16', 12000),
					(3, 3, 2, 34, '2013-11-14', 510000),
					(4, 4, 4, 10, '2014-02-28', 15000),
					(5, 1, 1, 13, '2014-05-06', 286000),
					(6, 7, 5, 60, '2012-02-15', 450000),
					(7, 5, 10, 17, '2013-01-30', 59500),
					(8, 10, 6, 3, '2012-07-05', 135000),
					(9, 9, 9, 20, '2014-12-15', 80000),
					(10, 8, 8, 5, '2012-08-23', 25000)");
	
	mysql_query("CREATE TABLE IF NOT EXISTS suppliers(
					id_supp INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					name_supp VARCHAR(20) NOT NULL,
					supp_adress VARCHAR(30) NOT NULL,
					phone_number CHAR(11) NOT NULL,
					discount REAL NOT NULL
					)");
	mysql_query("INSERT INTO suppliers (id_supp, name_supp, supp_adress, phone_number, discount) VALUES
					(1, 'МВидео', 'пр. Полюстровский, д. 84', 89348765434, 20),
					(2, 'Импульс', 'пр. Космонавтов, д. 37', 89118729873, 15),
					(3, 'Компьют', 'ул. Марата, д. 86', 89210338701, 30),
					(4, 'Нетком', 'ул. Большая Морская, д. 16', 89210983231, 10),
					(5, 'Оптторг', 'ул. Октябрьская, д. 8', 89657831234, 10),
					(6, 'Престиж', 'ш. Мурманское, 12 км.', 89210778233, 16),
					(7, 'Техносила', 'пр. Стачек, д. 99', 89213450087, 13),
					(8, 'Электромир', 'пр. Боготырский, д. 13', 89117658932, 5),
					(9, 'Юлмарт', 'ул. Ефимова, д.3', 89110992134, 10),
					(10, 'Старбайт', 'пр. Культуры, д. 41', 89658847763, 30)");
	
	mysql_query("CREATE TABLE IF NOT EXISTS prize (
 					id_prize INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					prize_name VARCHAR(40) NOT NULL,
 					comment_prize CHAR(200) NOT NULL,
 					prize_size REAL NOT NULL
					 )");
	mysql_query("INSERT INTO prize (id_prize, prize_name, comment_prize, prize_size) VALUES 
					(1, 'Ежегодная', 'Выдаётся в конце каждого года', 15),
					(2, '8-е марта', 'Девушкам в честь праздника',10),
					(3, '23-е февраля', 'Мужчинам в честь праздника',10),
					(4, 'День Рождения', 'Подарок от компании на День Рождения',5),
					(5, 'Месячные продажи', 'За самую большую месячную продажу',14),
					(6, 'Выслуга лет', 'Выдаётся каждые 2 года',10),
					(7, 'Хорошая работа', 'За хорошие отзывы (100 шт)',15),
					(8, 'Ночная смена', 'Оплата ночной смены',15),
					(9, 'Приведи друга', 'Бонус за друзей',7),
					(10, 'Пунктуальность', 'Не опоздывать целый год', 10)");
?>