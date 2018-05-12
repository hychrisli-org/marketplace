CREATE TABLE USER(

  userId SMALLINT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(30) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL
);

INSERT INTO USER (username, password) VALUES('user1', '$2a$10$bNqsANQaxojDrovhLCF2DeaSxXKMA6l1iss/nzzBkS/SdhhtWCPT6');


CREATE TABLE PRODUCT(
  productId  SMALLINT PRIMARY KEY AUTO_INCREMENT,
  title      VARCHAR(100) NOT NULL,
  description       VARCHAR(750) NOT NULL,
  productUrl VARCHAR(150) NOT NULL,
  imgUrl     VARCHAR(150) NOT NULL,
  company    VARCHAR(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE REVIEW(
  reviewId  INT PRIMARY KEY AUTO_INCREMENT,
  productId SMALLINT,
  username  VARCHAR(30) NOT NULL,
  title     VARCHAR(100) NOT NULL,
  comment   VARCHAR(1000) NOT NULL,
  reviewTs  DATETIME,
  FOREIGN KEY (productId) REFERENCES PRODUCT(productId)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO REVIEW (productId, username, title, comment, reviewTs) VALUES (1, 'user1', 'I Love this product', 'Great Quality and amazing details', STR_TO_DATE('2018-05-02 19:45:23', '%Y-%m-%d %H:%i:%s'));


INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Tsum Tsum Ice Cream Set','スイートなパステルカラーが可愛らしいミニツム&ハウスセットが登場★アイスクリームモチーフのハウスに、ドナルド、デイジー、チップ、デールの4体が入っているよ。ミニツムたちは、ふわふわコスチュームにチョコのようなビーズ、星やハートをトッピング☆頭にコーンの帽子も可愛いね！ツムツムたちと楽しいアイスクリームパーティを♪','http://www.isanlam.net/index.php/tsum-tsum-ice-cream-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q316TM_TSUM_ICE_SET.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Tsum Tsum Easter Wreath','今年のイースターはキュートなTSUM TSUM～ツムツム～たちと♪ふわふわ、もふもふのうさぎコスチュームに身を包んだミニツムのリースセット。草原のようなグリーン×水玉模様のリースは春らしさ満点♪可愛らしいコスチュームにおちゃめな表情をしたミッキー、ミニー、グーフィー、プルートに会えるのはこのセットだけ！玄関やお部屋に飾ってツムツムと一緒にイースターをお祝いしよう♪','http://www.isanlam.net/index.php/tsum-tsum-easter-wreath/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q217TM_MINI_TSUM_EAST_SET.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('4th Anniversary Box Set','TSUM TSUM～ツムツム～4周年記念！！豪華なボックスハウスセットが登場♪
ディズニーツムツムのゲームにでてくるボックスをイメージしたパッケージは、アニバーサリー感たっぷり！中には、日本未発売の『三銃士』や『ヘラクレス』など、25体のミニツムたちが♪今しか手に入らないこの特別なセットで、4周年をお祝いしよう♪','http://www.isanlam.net/index.php/4th-anniversary-box-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q118TM_4TH_ANNIV_BOX_SET_2.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Chip & Dale Rescue Rangers Box Set','チップ&デールファンに大人気の『チップとデールの大作戦 レスキュー・レンジャーズ』がミニツムになって新登場！チップとデールをはじめ、ガジェット、モンタリー・ジャック、ジッパー、ファット・キャットも。迫力のあるオレンジ色のボックスに入っています。あなたのコレクションにぜひ仲間入りさせてあげて！','http://www.isanlam.net/index.php/chip-dale-rescue-rangers-box-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q318TM_RESCUE_C_D_SET.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('D23 Expo 2018 Princess Tsum Set','究極のディズニーファンイベント「D23 Expo Japan 2018」。日本での3度目の開催を記念したスペシャルなアイテム★
作曲家のアラン・メンケンが手掛けた名曲の映画の代表作から『リトル・マーメイド』『アラジン』『美女と野獣』のキャラクターがミニツムのセットになりました。物語を連想させるような装飾や衣装は、このセットだけの特別デザイン。プレミアムなアイテムを是非この機会にゲットしてね！','http://www.isanlam.net/index.php/d23-expo-2018-princess-tsum-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q218D23AL_ALAN_M_TSUM.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Peter Pan Box Set','SUM TSUM～ツムツム～に『ピーター・パン』のセットが新登場！
ピーター・パン、ティンカー・ベル、ウェンディ、ジョン、マイケル、フック船長、スミー、チクタクワニ、タイガー・リリー、ナナが集まった豪華なセット。ロンドンの夜景がデザインされた特別なボックスに入っているから、そのままお部屋に飾ってもステキ♪スペシャルなミニツムセットを、あなたのコレクションにぜひ加えてね☆','http://www.isanlam.net/index.php/peter-pan-box-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q218TM_MINITSUM_PETERSET.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('2018 Tsum Tsum Valentine Set','今年のバレンタインは、ふわふわのファーに包まれて・・・♪
ふわふわなピンク色のハート型ボックス。ゴールドの刺しゅうがほどこされたフタをオープン・・ふわふわフェイクファーをまとったミニツムたちが、ぎゅっぎゅっと体を寄せあっています♪ミニー、デイジー、ミス・バニーはハート柄の衣装でラブリーにおめかし。おとこのこツムたちもほっぺをピンク色にそめて、このセットならでは。リボンがついたおしりにも注目です♪','http://www.isanlam.net/index.php/2018-tsum-tsum-valentine-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q218TM_MINI_TSUM_VA_SET.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ariel Tsum Tsum Wedding Set','『リトル・マーメイド』に登場するしあわせなふたりのツムツムセットが登場☆
ピンクのハート型クッションにエリック王子とアリエルのミニツムがセットされたHAPPYなツムツムセット☆素敵にドレスアップしたふたりの姿から仲良しさが伝わってきます。キラキラと繊細にきらめくクッションはフリルやパールが付いていてゴージャス☆リボンをほどけばリングピローにもなります☆
ウェディングシーンにもぴったりのツムツムです！','http://www.isanlam.net/index.php/ariel-tsum-tsum-wedding-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q318TM_TSUM_ARIEL_ERIC.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Cinderella Tsum Tsum Wedding Set','『シンデレラ』に登場するしあわせなふたりのツムツムセットが登場☆
ブルーのハート型クッションに王子とシンデレラのミニツムがセットされたHAPPYなツムツムセット☆素敵にドレスアップしたふたりの姿から仲良しさが伝わってきます。キラキラと繊細にきらめくクッションはフリルやストーンが付いていてゴージャス☆リボンをほどけばリングピローにもなります☆
ウェディングシーンにもぴったりのツムツムです！','http://www.isanlam.net/index.php/cinderella-tsum-tsum-wedding-set/','https://store-resources-disneyjp.akamaized.net/img/goods/L/Q318TM_TSUM_CINDY_PRINCE.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Snow White Seven dwarfs Series Set','『白雪姫』に登場するキャラクターたちがミニツムになりました！
日本未発売の、王子、魔女をふくんだ豪華セット♪長いまつげが愛らしい白雪姫をはじめ、女王、物語に欠かせない7人のこびとたちももちろんいっしょです。『白雪姫』の世界観を表現したボックス入りなので、そのままお部屋に飾ってもステキ♪','http://www.isanlam.net/index.php/snow-white-seven-dwarfs-series-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/03/Snow-White-Tsum-Tsum-Box-Set-5.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Dumbo Circus','大人気のTSUM TSUM～ツムツム～に、なかよし親子が登場★サーカスのテントハウスに入ったジャンボ&ダンボの親子とティモシーツムツムセット。ミニツムのダンボとお母さんのジャンボの上に、マメツムのティモシーがちょこん。愛らしさに思わずほっこり。ツムツムたちはハウスからだして積み上げることもできます☆
★この商品に適したギフトバッグはLサイズです★','http://www.isanlam.net/index.php/dumbo-circus/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/04/Q317TM_OYAKOHOUSE_SET_DB.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('4th Anniversary Dumbo Cake House Plush Set','TSUM TSUM～ツムツム～4周年記念！！モコフワなケーキハウスセットが登場☆ ダンボがトップを飾る2段ケーキには、4周年にちなんだ4本のローソクが飾られています。ケーキの中には・・モコモコ&フサフサのドナルド、デイジー、プーさん、マリーのミニツムが☆いつもとちがう触りごこちが新鮮☆ウルウルの瞳も印象的です☆パールや星型ビーズ、ガーランドの刺しゅうがあしらわれたケーキはとっても豪華☆アニバーサリーにふさわしい新しいツムツムです！ ★この商品は送料無料です。 ★この商品は「ツムツム ぬいぐるみ ディズニーキャラクター 4周年記念 ボックスセット TSUM TSUM」以外の商品と同時注文ができません。ご了承ください。','http://www.isanlam.net/index.php/4th-anniversary-dumbo-cake-house-plush-set/','http://www.isanlam.net/wordpress/wp-content/uploads/2018/03/00732ce30ab3354b93a360749804a722.jpg', 'Tsum');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 001','Ceiling Light Fixture 001','http://litemech.com/cookie/ceiling1.php','http://litemech.com/cookie/img/i1.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 002','Ceiling Light Fixture 002','http://litemech.com/cookie/ceiling2.php','http://litemech.com/cookie/img/i2.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 003','Ceiling Light Fixture 003','http://litemech.com/cookie/ceiling3.php','http://litemech.com/cookie/img/i3.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 004','Ceiling Light Fixture 004','http://litemech.com/cookie/ceiling4.php','http://litemech.com/cookie/img/i4.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 005','Ceiling Light Fixture 005','http://litemech.com/cookie/ceiling5.php','http://litemech.com/cookie/img/i5.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 006','Ceiling Light Fixture 006','http://litemech.com/cookie/ceiling6.php','http://litemech.com/cookie/img/i6.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 007','Ceiling Light Fixture 007','http://litemech.com/cookie/ceiling7.php','http://litemech.com/cookie/img/i7.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 008','Ceiling Light Fixture 008','http://litemech.com/cookie/ceiling8.php','http://litemech.com/cookie/img/i8.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 009','Ceiling Light Fixture 009','http://litemech.com/cookie/ceiling9.php','http://litemech.com/cookie/img/i9.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Ceiling Light Fixture 010','Ceiling Light Fixture 010','http://litemech.com/cookie/ceiling10.php','http://litemech.com/cookie/img/i10.png', 'Litemech');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Axles','Since 2001, Ronsco has been a leading manufacturer of freight and transit axles. At our AAR M-1003 certified axle finishing facility located in Oakville (Toronto), Ontario, we excel at producing a broad range of standard North American (AAR) axles as well as a variety of special designs for the local and international markets.','http://lamp.hychris.li/service-axles.php','http://lamp.hychris.li/images/services/axles.jpeg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Bearings','For over 40 years Ronsco has worked with our Canadian customers in the sales and service of new and reconditioned freight rail bearings. Ronsco is the Timken rail bearing distributor to the Canadian rail freight market. Timken’s focus on bearing performance and industry leading fuel saving seal technology has translated into Timken being the leading new and reconditioned rail bearing supplier in Canada','http://lamp.hychris.li/service-bearings.php','http://lamp.hychris.li/images/services/bearings.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Wheels','Ronsco is a long-term supplier of freight and transit wheels to the North American and international markets through our partnership with leading international wheel manufacturing companies.','http://lamp.hychris.li/service-wheels.php','http://lamp.hychris.li/images/services/wheels.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Freight Car Parts','Ronsco carries an extensive array of common replacement parts for all types of railcars, locomotives, and track componentry. This product offering is designed to support the material requirements of railways, railcar maintenance facilities, new car builders, leasing companies, shippers, and all other railcar owners. Replacements parts are distributed out of strategically located warehousing facilities in Edmonton (Alberta), Hamilton (Ontario), & Coteau-du-lac (Montreal,Quebec)','http://lamp.hychris.li/service-freight-car.php','http://lamp.hychris.li/images/services/freight-car.png', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Locomotive Parts','Ronsco carries an extensive array of common replacement parts for all types of railcars, locomotives, and track componentry. This product offering is designed to support the material requirements of railways, railcar maintenance facilities, new car builders, leasing companies, shippers, and all other railcar owners. Replacements parts are distributed out of strategically located warehousing facilities in Edmonton (Alberta), Hamilton (Ontario), & Coteau-du-lac (Montreal,Quebec).','http://lamp.hychris.li/service-locomotive.php','http://lamp.hychris.li/images/services/locomotive.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Engineered Products','Ronsco works with our customers for the design, manufacture, and distribution of a broad range of specialty track and engineered components. Ronsco provides a broad range of services which includes, project management, engineering design, manufacturing, quality and testing services.','http://lamp.hychris.li/service-engineered.php','http://lamp.hychris.li/images/services/engineered-parts.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Locomotive Repair','Ronsco, in conjunction with our Allrail subsidiary, provides locomotive repair services in our conveniently located Montreal (Coteau-du-lac) location, as well as providing mobile services in Montreal, Toronto, and across the province of Quebec. With a yard capacity of 100 to 120 units, 50,000 sq-ft and 8 tracks under roof, the shop is well equipped with a pit, paint booth, 35-ton crane, and 50-ton jacks allowing for a variety of locomotive maintenance and overhaul projects.','http://lamp.hychris.li/service-locomotive-repair.php','http://lamp.hychris.li/images/services/locomotive-repair.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Rail Car Repair','Programs, as well as specially engineered railcar conversion projects. We currently operate in a modern facility west of Montreal (Coteau-du-lac), Quebec as well as providing mobile services in Halifax, Montreal, Valleyfield, and across the province of Quebec.','http://lamp.hychris.li/service-railcar-repair.php','http://lamp.hychris.li/images/services/railcar-repair.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Railway Consulting','AllRail is the consulting services division of Ronsco Inc., focused solely on railway related projects. These services include Transportation and Capacity Planning, Engineering Services, Rail Operations, Yard/Track Layout, Technical Specification Preparation, Tender Document Preparation, Expert Witness, Rail Bridge design and inspection, Rail car design and modification, Locomotive Upgrade and Modification, Site Inspections.','http://lamp.hychris.li/service-railway-consult.php','http://lamp.hychris.li/images/services/railway-consulting.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Railway Consulting','AllTrain, a division of Ronsco Inc., offers a library of industry specific eLearning courses for the railway and airline industries.','http://lamp.hychris.li/service-training.php','http://lamp.hychris.li/images/services/railway-training.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Contract Distribution','Ronsco’s strength is in efficiently procuring, stocking, distributing and providing tailored logistical services associated with railway parts that we inventory. Ronsco contract distribution is designed to help our clients focus on their core competencies, whether that is running a railroad, a repair facility, or leasing railcars.','http://lamp.hychris.li/service-contract-distr.php','http://lamp.hychris.li/images/services/contract-distribution.jpg', 'Meteoric');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Dota 2','Dota 2','http://gameseller.info/dota2.php','http://gameseller.info/images/dota2.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('League of Legends','League of Legends','http://gameseller.info/leagueoflegends.php','http://gameseller.info/images/leagueoflegends.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Modern Warfare 2','Modern Warfare 3','http://gameseller.info/ModernWarfare2.php','http://gameseller.info/images/ModernWarfare2.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Modern Warfare 3','Modern Warfare 4','http://gameseller.info/ModernWarfare3.php','http://gameseller.info/images/ModernWarfare3.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Black Ops 2','Black Ops 3','http://gameseller.info/BlackOps2.php','http://gameseller.info/images/bo2.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Black Ops 3','Black Ops 4','http://gameseller.info/BlackOps3.php','http://gameseller.info/images/BlackOps3.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Sims 4','Sims 5','http://gameseller.info/sims4.php','http://gameseller.info/images/sims4.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Destiny 2','Destiny 3','http://gameseller.info/destiny2.php','http://gameseller.info/images/destiny2.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('Far Cry 5','Far Cry 6','http://gameseller.info/farcry5.php','http://gameseller.info/images/farcry5.jpg','GameSeller');
INSERT INTO PRODUCT(title,description,productUrl,imgUrl, company) VALUES ('World of Warcraft','World of Warcraft','http://gameseller.info/WorldofWarcraft.php','http://gameseller.info/images/WorldofWarcraft.jpg','GameSeller');
