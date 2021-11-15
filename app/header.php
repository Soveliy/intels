<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><title><?$APPLICATION->ShowTitle()?></title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.min.css">
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <div class="wrapper">
      <header class="header header--main">
          <div class="container">
            <div class="header__row">
                <div class="burger">
                    <div class="rect"></div>
                    <div class="rect"></div>
                    <div class="rect"></div>
                </div>
                <div class="logo header__logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="">
                </div>
                <div class="header__right">
                    <a href="tel:4954455511" class="header__phone">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <mask id="path-1-inside-1_116:5015" fill="white">
                          <rect x="4" y="2" width="16" height="20" rx="1"/>
                          </mask>
                          <rect x="4" y="2" width="16" height="20" rx="1" stroke="white" stroke-width="4" mask="url(#path-1-inside-1_116:5015)"/>
                          <circle cx="12" cy="17" r="1.25" fill="white" stroke="white" stroke-width="0.5"/>
                          </svg>
                          495 44 555 11                        
                    </a>
                    <a href="#" class="header__cabinet">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C10.3431 4 9 5.34315 9 7C9 8.65685 10.3431 10 12 10C13.6569 10 15 8.65685 15 7C15 5.34315 13.6569 4 12 4ZM7 7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7C17 9.76142 14.7614 12 12 12C9.23858 12 7 9.76142 7 7ZM4.46447 15.4645C5.40215 14.5268 6.67392 14 8 14H16C17.3261 14 18.5979 14.5268 19.5355 15.4645C20.4732 16.4021 21 17.6739 21 19V21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21V19C19 18.2044 18.6839 17.4413 18.1213 16.8787C17.5587 16.3161 16.7956 16 16 16H8C7.20435 16 6.44129 16.3161 5.87868 16.8787C5.31607 17.4413 5 18.2043 5 19V21C5 21.5523 4.55228 22 4 22C3.44772 22 3 21.5523 3 21V19C3 17.6739 3.52678 16.4021 4.46447 15.4645Z" fill="white"/>
                          </svg>
                          
                    </a>
                </div>
                <div class="main-menu">
                    <div class="main-menu__row">
                        <div class="menu">
                            <div class="menu__title">
                              Компания
                            </div>
                            <ul class="menu__list">
                                <li class="menu__list-item"><a href="#">О компании</a></li>
                                <li class="menu__list-item"><a href="#">Сертификаты и лицензии</a></li>
                                <li class="menu__list-item"><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                        <div class="menu">
                          <div class="menu__title">
                              Услуги
                          </div>
                          <ul class="menu__list">
                              <li class="menu__list-item"><a href="#">Проектирование</a></li>
                              <li class="menu__list-item"><a href="#">Строительство</a></li>
                              <li class="menu__list-item"><a href="#">Сопровождение и ввод в эксплуатацию</a></li>
                              <li class="menu__list-item"><a href="#">Эксплуатация и техническое обслуживание</a></li>
                          </ul>
                          </div>
                          <div class="menu">
                              <div class="menu__title">
                                  Блог
                              </div>
                              <ul class="menu__list">
                                  <li class="menu__list-item"><a href="#">Название статьи 1</a></li>
                                  <li class="menu__list-item"><a href="#">Название статьи 2</a></li>
                                  <li class="menu__list-item"><a href="#">Название статьи 3</a></li>
                                  <li class="menu__list-item"><a href="#">Название статьи 4</a></li>
                                  <li class="menu__list-item"><a href="#">Название статьи 5</a></li>
                              </ul>
                          </div>
                    </div>
                    <div class="main-menu__row">
                        <div class="main-menu__number">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => $APPLICATION->GetTemplatePath("include_areas/number.php"),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
                        </div>
                        <div class="main-menu__email">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => $APPLICATION->GetTemplatePath("include_areas/email.php"),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
                          
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </header>
      <main class="main">
     