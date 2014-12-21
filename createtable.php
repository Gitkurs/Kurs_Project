<?php
header('Content-Type: text/html; charset=utf-8');
	$ConnectDB = mysql_connect("localhost","blackteg_test","12345678");
	if(!mysql_select_db('blackteg_test',$ConnectDB))
	{
		$CreateDBMYSQL = 'CREATE DATABASE blackteg_test';
		if(mysql_query($CreateDBMYSQL,$ConnectDB))
		{
			if(mysql_select_db('blackteg_test',$ConnectDB));
		}
	}	
	
	mysql_query("CREATE TABLE IF NOT EXISTS clientbase(
			clientbase_id          INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			clientbase_name        VARCHAR(30) NOT NULL,
			clientbase_surname     VARCHAR(30) NOT NULL,
			clientbase_secondname  VARCHAR(30) NOT NULL,
			clientbase_phonenumber CHAR(11) NOT NULL,
			clientbase_card        CHAR(11) NOT NULL,
			clientbase_login       VARCHAR(50) NOT NULL,
			clientbase_password    VARCHAR(50) NOT NULL,
			clientbase_email       VARCHAR(50) NOT NULL,
			clientbase_group	   INT UNSIGNED DEFAULT 0,
			CONSTRAINT unq_email UNIQUE(clientbase_email),
			CONSTRAINT unq_login UNIQUE(clientbase_login),
			CONSTRAINT unq_phonenumber UNIQUE(clientbase_phonenumber)
			)") or die(mysql_error());
			
	mysql_query("CREATE TABLE IF NOT EXISTS goods (
			goods_id          INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			goods_name        VARCHAR(30) NOT NULL,
			goods_namefirm    VARCHAR(30) NOT NULL,
			goods_price       REAL NOT NULL,
			goods_type        VARCHAR(30) NOT NULL,
			goods_number      INT UNSIGNED,
			goods_image		  VARCHAR(30)
		   )");	
	mysql_query("INSERT INTO goods (goods_id, goods_name, goods_namefirm,goods_price, goods_type, goods_number,goods_image) VALUES 
		 (1, 'K53S', 'Asus', 22000, 'Ноутбук', 5,'images/n1.jpg'),
		 (2, 'Ideapad B5030', 'Lenovo', 21990, 'Ноутбук', 9,'images/n2.jpg'),
		 (3, 'Pavilion 15-G07SR', 'HP', 39990, 'Ноутбук', 7,'images/n3.jpg'),
		 (4, 'Ideapad Flex 14', 'Lenovo', 14000, 'Ноутбук', 15,'images/n4.jpg'),
		 (5, 'R505-SS03RU', 'Samsung', 20000, 'Ноутбук', 10,'images/n5.jpg'),
		 (6, 'Микроволновая печь', 'LG', 1500, 'Бытовая техника', 12,'images/b1.jpg'),
		 (7, 'Стиральная машина', 'Bosch', 15000, 'Бытовая техника', 10,'images/b2.jpg'),
		 (8, 'Стиральная машина', 'Zanussi', 21990, 'Бытовая техника', 5,'images/b3.jpg'),
		 (9, 'Чайник', 'Maxwell', 1290, 'Бытовая техника', 20,'images/b4.jpg'),
		 (10, 'Хлебопечь', 'Bork', 29990, 'Бытовая техника', 2,'images/b5.jpg'),
		 (11, 'Монитор', 'Samsung', 12990, 'Комплектующие', 4,'images/k1.jpg'),
		 (12, 'Видеокарта', 'Nvidia', 9000, 'Комплектующие', 10,'images/k2.jpg'),
		 (13, 'Звуковая карта', 'M-Audio', 3190, 'Комплектующие', 20,'images/k3.jpg'),
		 (14, 'Блок питания', 'QDION', 1620, 'Комплектующие', 25,'images/k4.jpg'),
		 (15, 'Система охлаждения', 'DeepCool', 130, 'Комплектующие', 12,'images/k5.jpg')"); 
	
	mysql_query("CREATE TABLE IF NOT EXISTS employee(
			employee_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			employee_name VARCHAR(15) NOT NULL,
			employee_surname VARCHAR(20) NOT NULL,
			employee_secondname VARCHAR(20) NOT NULL,
			employee_birthday DATE NOT NULL,
			employee_post VARCHAR(30) NOT NULL,
			employee_startedtowork DATE NOT NULL,
			employee_salary REAL NOT NULL,
			employee_phonenumber CHAR(11) NOT NULL
			)") or die(mysql_error());
	mysql_query("INSERT INTO employee (employee_id, employee_name, employee_surname, employee_secondname, employee_post, employee_startedtowork, employee_salary, employee_phonenumber) VALUES 
			(1, 'Роман', 'Ильин', 'Степанович', '1987-01-15', 'администратор', '2012-01-10', 24000, 89118736473),
			(2, 'Елена', 'Гаврилова', 'Вячеславовна', '1983-02-27', 'директор', '2009-10-20', 85000, 89217389922),
			(3, 'Артём', 'Гусев', 'Маркович', '1990-03-05', 'бухгалтер', '2014-02-05', 30000, 89117385832),
			(4, 'Вероника', 'Никифорова', 'Тимофеевна', '1984-04-10', 'главный бухгалтер', '2010-09-15', 36000, 89650931004),
			(5, 'Руслан', 'Поляков', 'Витальевич', '1985-05-20', 'заместитель директора', '2013-06-03', 51000, 89534448921),
			(6, 'Оксана', 'Савельева', 'Владиславовна', '1991-06-14', 'оператор', '2012-05-28', 22000,, 89218994309),
			(7, 'Владимир', 'Соболев', 'Владимирович', '1993-07-02', 'оператор', '2014-07-16', 22000, 89110034567),
			(8, 'Олеся', 'Фролова', 'Константиновна', '1995-08-13', 'стажёр-оператор', '2014-11-30', 8000, 89812347786),
			(9, 'Артур', 'Львов', 'Евгеньевич', '1987-09-29', 'системный администратор', '2010-10-10', 33000, 89213456782),
			(10, 'Матвей', 'Денисов', 'Сергеевич', '1991-10-09', 'пиар-менеджер', '2011-03-15', 27000, 89817599988)");
			
	mysql_query("CREATE TABLE IF NOT EXISTS customs (
			customs_id       INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			customs_idclient INT UNSIGNED REFERENCES clientbase(clientbase_id),
			customs_idgoods  INT UNSIGNED REFERENCES goods(goods_id),
			customs_numgoods INT UNSIGNED NOT NULL,
			customs_date     DATE NOT NULL,
			customs_delivery BOOLEAN NOT NULL
		    )");
	mysql_query("INSERT INTO customs (customs_id, customs_idclient, customs_idgoods, customs_numgoods, customs_date, customs_delivery) VALUES
			(1, 10, 1, 2, '2014-10-10', 'true'),
			(2, 9, 1, 1, '2014-12-01', 'false'),
			(3, 8, 2, 2, '2014-11-27', 'true'),
			(4, 7, 3, 1, '2013-12-14', 'false'),
			(5, 6, 3, 1, '2014-11-27', 'true'),
			(6, 5, 4, 3, '2014-12-07', 'true'),
			(7, 4, 5, 20, '2014-11-26', 'true'),
			(8, 3, 8, 1, '2014-12-07', 'false'),
			(9, 2, 8, 3, '2014-10-15', 'false'),
			(10, 1, 10, 2, '2014-11-26', 'true')");	
		   
	mysql_query("CREATE TABLE IF NOT EXISTS delivery (
			delivery_id         INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			delivery_idcustom   INT UNSIGNED REFERENCES customs(customs_id),
			delivery_date       DATE NOT NULL,
			delivery_price      REAL NOT NULL,
			delivery_addressdel VARCHAR(30) NOT NULL
		    )");
	mysql_query("INSERT INTO delivery (delivery_id, delivery_idcustom, delivery_date, delivery_price, delivery_addressdel) VALUES
			(1, 1, '2014-10-12', 300, 'бул. Новаторов,д 5'),
			(2, 1, '2014-12-05', 600, 'пр. Непокоренных, д 68'),
			(3, 2, '2014-11-28', 300, 'ул. Новороссийская, д 10'),
			(4, 3, '2014-12-14', 800, 'ул. Березовая, д 16'),
			(5, 3, '2014-11-30', 600, 'ул. Пушковская, д 35'),
			(6, 4, '2014-12-08', 300, 'ул. Елисеевская, д 40'),
			(7, 5, '2014-11-27', 2800, 'ул. Тельмана, д 1'),
			(8, 8, '2014-12-09', 600, 'ул. Новостроек, д 25'),
			(9, 8, '2014-10-16', 700, 'ул. Софийская, д 48'),
			(10, 10, '2014-11-27', 600, 'пр. Трамвайный, д 15')");
		   
	mysql_query("CREATE TABLE IF NOT EXISTS discount(
			discount_id        INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			discount_name      VARCHAR(30) NOT NULL,
			discount_datestart DATE NOT NULL,
			discount_dateend   DATE NOT NULL,
			discount_pr        REAL NOT NULL,
			discount_image     VARCHAR(30) NOT NULL
		    )");
	mysql_query("INSERT INTO discount (discount_id, discount_name, discount_datestart, discount_dateend, discount_pr, discount_image) VALUES
			(1, 'Новогодняя распродажа', '2014-12-01', '2014-12-31', 0.15 , 'images/newyear.jpg'),
			(2, 'Готовимся к школе', '2014-08-01', '2014-09-30',0.12, 'images/school.jpg'),
			(3, 'День Рождения', '2014-01-01', '2014-12-31', 0.4, 'images/birthday.jpg'),
			(4, 'Накопительная', '2014-12-01', '2014-12-31', 0.04, 'images/cumulative.jpg'),
			(5, 'Большая покупка', '2014-12-01', '2014-12-31', 0.1, 'images/bigbuy.jpg'),
			(6, 'Привет Весне', '2014-03-01', '2014-06-11', 0.18, 'images/spring.jpg'),
			(7, 'Пляжный сезон', '2014-06-01', '2014-06-01', 0.25, 'images/summer.jpg'),
			(8, 'Скидка на следующую покупку', '2014-01-01', '2014-12-01', 0.12, 'images/nextbuy.jpg'),
			(9, 'Скидка новеньким', '2014-01-01', '2014-12-31', 0.02, 'images/newbie.jpg'),
			(10, 'Второй такой же', '2014-01-01', '2014-12-31', 0.5, 'images/pairofgoods.jpg')");
		   
	mysql_query("CREATE TABLE IF NOT EXISTS feedback (
			feedback_id           INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			feedback_nameoperator VARCHAR(30) NOT NULL,
			feedback_phonenumber  VARCHAR(30) NOT NULL,
			feedback_email        VARCHAR(30) NOT NULL,
			feedback_skype        VARCHAR(30) NOT NULL
		    )");
	mysql_query("INSERT INTO feedback (feedback_id , feedback_nameoperator, feedback_phonenumber, feedback_email, feedback_skype) VALUES
			(1, 'Мария', '2568974', 'masha1989@mymail.ru', 'masha1989_sky'),
			(2, 'Анатолий', '5469873', 'tolik1986@mymail.ru', 'tolik1986_sky'),
			(3, 'Остап', '3698514', 'ostap1992@mymail.ru', 'ostap1992_sky'),
			(4, 'Елизавета', '1597496', 'lizzy1990@mymail.ru', 'lizzy1990_sky'),
			(5, 'Алина', '5469821', 'alina1986@mymail.ru', 'alina1986_sky'),
			(6, 'Евгений', '6547913', 'zheka1989@mymail.ru', 'zheka1989_sky'),
			(7, 'Александр', '9514763', 'sasha1984@mymail.ru', 'sasha1984_sky'),
			(8, 'Валентина', '5497631', 'valja1989@mymail.ru', 'valja1989_sky'),
			(9, 'Егор', '5498631', 'egorka1993@mymail.ru', 'egorka1993_sky'),
			(10, 'Глеб', '5498631', 'gleb1991@mymail.ru', 'gleb1991_sky')");
			
		   
	mysql_query("CREATE TABLE IF NOT EXISTS ordtosupp(
			ordtosupp_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			ordtosupp_suppid INT UNSIGNED REFERENCES suppliers(suppliers_id),
			ordtosupp_goodsid INT UNSIGNED REFERENCES goods(goods_id),
			ordtosupp_numberorder INT UNSIGNED NOT NULL,
			ordtosupp_dateorder DATE NOT NULL,
			ordtosupp_summ REAL NOT NULL
			)");
	mysql_query("INSERT INTO ordtosupp (ordtosupp_id, ordtosupp_suppid, ordtosupp_goodsid, ordtosupp_numberorder, ordtosupp_dateorder, ordtosupp_summ) VALUES 
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
			suppliers_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			suppliers_namesupp VARCHAR(20) NOT NULL,
			suppliers_suppadress VARCHAR(30) NOT NULL,
			suppliers_phonenumber CHAR(11) NOT NULL
			)");
			mysql_query("INSERT INTO suppliers (suppliers_id, suppliers_namesupp, suppliers_suppadress, suppliers_phonenumber) VALUES
			 (1, 'МВидео', 'пр. Полюстровский, д. 84', 89348765434),
			 (2, 'Импульс', 'пр. Космонавтов, д. 37', 89118729873),
			 (3, 'Компьют', 'ул. Марата, д. 86', 89210338701),
			 (4, 'Нетком', 'ул. Большая Морская, д. 16', 89210983231),
			 (5, 'Оптторг', 'ул. Октябрьская, д. 8', 89657831234),
			 (6, 'Престиж', 'ш. Мурманское, 12 км.', 89210778233),
			 (7, 'Техносила', 'пр. Стачек, д. 99', 89213450087),
			 (8, 'Электромир', 'пр. Боготырский, д. 13', 89117658932),
			 (9, 'Юлмарт', 'ул. Ефимова, д.3', 89110992134),
			(10, 'Старбайт', 'пр. Культуры, д. 41', 89658847763)");	
			
	 mysql_query("CREATE TABLE IF NOT EXISTS prize(
 			prize_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
 			prize_name VARCHAR(40) NOT NULL,
 			prize_begindate_prize DATE NOT NULL,
 			prize_enddate DATE NOT NULL,
			prize_size REAL NOT NULL
			)");	
	mysql_query("INSERT INTO prize (prize_id, prize_name, prize_begindate, prize_end_date, prize_size) VALUES 
		 (1, 'Ежегодная', '2014-12-01, '2014-12-31', 0.05),
		 (2, '8-е марта', '2014-03-01', '2014-03-31', 0.1),
		 (3, '23-е февраля', '2014-02-01', '2014-02-28', 0.1),
		 (4, 'День Рождения', '2014-01-01', '2014-12-31', 0.05)");
		 
	mysql_query("CREATE TABLE IF NOT EXISTS log(
 			log_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
 			log_login VARCHAR(40) NOT NULL,
 			log_email VARCHAR(20) NOT NULL,
			log_date DATE NOT NULL
			)")or die(mysql_error());
			
		mysql_query("CREATE TABLE IF NOT EXISTS reviews(
 			reviews_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
 			reviews_login VARCHAR(20) NOT NULL,
 			reviews_text VARCHAR(300) NOT NULL
			)")or die(mysql_error());
			
			
			
/*		DELIMITER $
		CREATE OR REPLACE TRIGGER inlog 
		BEFORE INSERT ON clientbase
		FOR EACH ROW
		BEGIN
		INSERT INTO log(log_login,log_email,log_phone,log_date) VALUES																																																																																																																																															(new.clientbase_login,new.clientbase_email,new.clientbase_phonenumber,CURDATE());
		END;*/
			
			
?>