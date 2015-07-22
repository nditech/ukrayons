<?php

/**
 * Return a list of all the rayons
 */

function ukrainerayons_listcounties() {
  $counties = array(
    4909 => array( // Вінницька область - Vinnyts'ka Oblast'
      'Барський район',
      'Бершадський район',
      'Вінницький район',
      'Гайсинський район',
      'Жмеринський район',
      'Іллінецький район',
      'Калинівський район',
      'Козятинський район',
      'Крижопільський район',
      'Липовецький район',
      'Літинський район',
      'Могилів-Подільський район',
      'Мурованокуриловецький район',
      'Немирівський район',
      'Оратівський район',
      'Піщанський район',
      'Погребищенський район',
      'Теплицький район',
      'Тиврівський район',
      'Томашпільський район',
      'Тростянецький район',
      'Тульчинський район',
      'Хмільницький район',
      'Чернівецький район',
      'Чечельницький район',
      'Шаргородський район',
      'Ямпільський район',
    ),
    4910 => array( // Волинська область Volyos'ka Oblast'
      'Володимир-Волинський район',
      'Горохівський район',
      'Іваничівський район',
      'Камінь-Каширський район',
      'Ківерцівський район',
      'Ковельський район',
      'Локачинський район',
      'Луцький район',
      'Любешівський район',
      'Любомлський район',
      'Маневицький район',
      'Ратнівський район',
      'Рожищенський район',
      'Старовижівський район',
      'Турійський район',
      'Шацький район',
    ),
    4893 => array( // Дніпропетровська областьn Dnipropetrovs'ka Oblast'
      'Апостолівський район',
      'Васильківський район',
      'Верхньодніпровський район',
      'Дніпропетровський район',
      'Криворізький район',
      'Криничанський район',
      'Магдалинівський район',
      'Межівський район',
      'Нікопольський район',
      'Новомосковський район',
      'Павлоградський район',
      'Петриківський район',
      'Петропавлівський район',
      'Покровський район',
      'Пятихатський район',
      'Синельниківський район'
      'Солонянський район'
      'Софіївський район'
      'Томаківський район'
      'Царичанський район'
      'Широківський район'
      'Юрївський район'
    ),
    4894 => array( // Донецька область Donets'ka Oblast' 
      'Амвросіївський район',
      'Артмемівський район',
      'Великоновосілківський район',
      'Волноваський район',
      'Володарський район',
      'Добропільський район',
      'Констянтинівський район',
      'Красноармійський район',
      'Краснолиманський район',
      'Марїнський район',
      'Новоазовський район',
      'Олександрівський район',
      'Першотравнений район',
      'Словянський район',
      'Старобешівський район',
      'Тельманівський район',
      'Шахтарський район',
      'Ясинуватський район',
    ),
    4913 => array( // Житомирська область Zhytomyrs'ka Oblast' 
      'Андрушівський район',
      'Баранівський район',
      'Бердичівський район',
      'Брусилівський район',
      'Володарсько-Волинський район',
      'Ємільчинський район',
      'Житомирський район',
      'Коростенський район',
      'Коростишівський район',
      'Лугинський район',
      'Любарський район',
      'Малинський район',
      'Народицький район',
      'Новоград-Волинський район',
      'Овруцький район',
      'Олевський район',
      'Попільнянський район',
      'Радомишльський район',
      'Романівський район',
      'Ружинський район',
      'Червоноармійський район',
      'Черняхівський район',
      'Чуднівський район',
    ),
    4911 => array( // Закарпатська область Zakarpats'ka Oblast' 
      'Берегівський район',
      'Великоберезнянський район',
      'Виноградівський район',
      'Воловецький район',
      'Іршавський район',
      'Міжгірський район',
      'Мукачівський район',
      'Перечинський район',
      'Рахівський район',
      'Свалявський район',
      'Тячівський район',
      'Ужгородський район',
      'Хустський район', 
    ),
    4912 => array( // Запорізька область Zaporiz'ka Oblast' 
      'Бердянський район',
      'Василівський район',
      'Великобілозерський район',
      'Веселівський район',
      'Вільнянський район',
      'Гуляйпільський район',
      'Запорізький район',
      'Камянсько-Дніпровський район',
      'Куйбишевський район',
      'Мелітопольський район',
      'Михайлівський район',
      'Новомиколаївський район',
      'Оріхівський район',
      'Пологівський район',
      'Приазовський район',
      'Приморський район',
      'Розівський район',
      'Токмацький район',
      'Чернігівський район',
      'Якимівський район',
    ),
    4895 => array( // Івано-Франківська область Ivano-Frankivs'ka Oblast' 
      'Богородчанський район',
      'Верховинський район',
      'Галицький район',
      'Городенківський район',
      'Долинський район',
      'Калуський район',
      'Коломийський район',
      'Косівський район',
      'Надвірнянський район',
      'Рогатинський район',
      'Рожнятівський район',
      'Снятинський район',
      'Тисменицький район',
      'Тлумацький район',
    ),
    4900 => array( // Київська область Kyivs'ka Oblast' 
      'Баришівський район',
      'Білоцерківський район',
      'Богуславський район',
      'Бориспільський район',
      'Бородянський район',
      'Броварський район',
      'Васильківський район',
      'Вишгородський район',
      'Володарський район',
      'Згурівський район',
      'Іванківський район',
      'Кагарлицький район',
      'Києво-Святошинський район',
      'Макарівський район',
      'Миронівський район',
      'Обухівський район',
      'Переяслав-Хмельницький район',
      'Поліський район',
      'Рокитнянський район',
      'Сквирський район',
      'Ставищенський район',
      'Теращанський район',
      'Тетіївський район',
      'Фастівський район',
      'Яготинський район',
   ),
    4899 => array( // Кіровоградська область Kirovohrads'ka Oblast'
      'Бобринецький район',
      'Вільшанський район',
      'Гайворонський район',
      'Голованівський район',
      'Добровеличківський район',
      'Долинський район',
      'Знамянський район',
      'Кіровоградський район',
      'Компаніївський район',
      'Маловисківський район',
      'Новгородківський район',
      'Новоархангельський район',
      'Новомиргородський район',
      'Новоукраїнський район',
      'Олександрівський район',
      'Олександрійський район',
      'Онуфріївський район',
      'Петрівський район',
      'Світловодський район',
      'Ульяновський район',
      'Устинівський район'
    ),
    4901 => array( // Луганська область Luhans'ka Oblast' 
      'Антрацитівський район',
      'Біловодський район',
      'Білокуракинський район',
      'Краснодонський район',
      'Кремінський район',
      'Лутугинський район',
      'Марківський район',
      'Міловський район',
      'Новоайдарський район',
      'Новопсковський район',
      'Перевальський район',
      'Попаснянський район',
      'Сватівський район',
      'Свердловський район',
      'Словяносербський район',
      'Станично-луганський район',
      'Старобільський район',
      'Троїцький район',
    ),
    4902 => array( // Львівська область L'vivs'ka Oblast' 
      'Бродівський район',
      'Буський район',
      'Городоцький район',
      'Дрогобицький район',
      'Жидачівський район',
      'Жовківський район',
      'Золочівський район',
      'Камянка-Бузький район',
      'Миколаївський район',
      'Мостиський район',
      'Перемишлянський район',
      'Пустомитівський район',
      'Радехівський район',
      'Самбірський район',
      'Сколівський район',
      'Сокальський район',
      'Старосамбірський район',
      'Стрийський район',
      'Турківський район',
      'Яворівський район',
    ),
    4903 => array( // Миколаївська область Mykolaivs'ka Oblast' 
      'Арбузинський район',
      'Баштанський район',
      'Березанський район',
      'Березнегуватський район',
      'Братський район',
      'Веселинівський район',
      'Вознесенський район',
      'Врадіївський район',
      'Доманівський район',
      'Єланецький район',
      'Жовтневий район',
      'Казанівський район',
      'Кривоозерський район',
      'Миколаївський район',
      'Новобузький район',
      'Новоодеський район',
      'Очаківський район',
      'Первомайський район',
      'Снігурівський район',
    ),
    4904 => array( // Одеська область Odes 'ka Oblast'  
      'Ананьївський район',
      'Арцизький район',
      'Балтський район',
      'Березівський район',
      'Білгород-Дністровський район',
      'Біляївський район',
      'Болградський район',
      'Великомихайлівський район',
      'Іванівський район',
      'Ізмаїльський район',
      'Кілійський район',
      'Кодимський район',
      'Комінтернівський район',
      'Котовський район',
      'Красноокнянський район',
      'Любашівський район',
      'Миколаївський район',
      'Овідопольський район',
      'Ренійський район',
      'Роздільнянський район',
      'Савранський район',
      'Саратський район',
      'Тарутинський район',
      'Татарбунарський район',
      'Фрунзівський район',
      'Ширяївський район',
    ),
    4905 => array( // Полтавська область Poltavs'ka Oblast' 
      'Великобагачанський район',
      'Гадяцький район',
      'Глобинський район',
      'Гребінківський район',
      'Диканський район',
      'Зіньківський район',
      'Карлівський район',
      'Кобеляцький район',
      'Козельщинський район',
      'Котелевський район',
      'Кременчуцький район',
      'Лохвицький район',
      'Лубенський район',
      'Машівський район',
      'Миргородський район',
      'Новосанжарський район',
      'Оржицький район',
      'Пирятинський район',
      'Полтавський район',
      'Решетилівський район',
      'Семенівський район',
      'Хорольський район',
      'Чорнухинський район',
      'Чутівський район',
      'Шишацький район',
    ),
    4906 => array( // Рівненська область Rivnens'ka Oblast' 
      'Березнівський район',
      'Володимирський район',
      'Гощанський район',
      'Демидівський район',
      'Дубенський район',
      'Дубровицький район',
      'Зарічневський район',
      'Здолбунівський район',
      'Корецький район',
      'Костопільський район',
      'Млинівський район',
      'Острозький район',
      'Радивилівський район',
      'Рівненський район',
      'Рокитнівський район',
      'Сарненський район',
    ),
    4907 => array( // Сумська область Sums 'ka Oblast' 
      'Білопільський район',
      'Буринський район',
      'Великописарівський район',
      'Глухівський район',
      'Конотопський район',
      'Краснопільський район',
      'Кролевецький район',
      'Лебединський район',
      'Липоводолинський район',
      'Недригайлівський район',
      'Охтирський район',
      'Путивлський район',
      'Роменський район',
      'Середино-Будський район',
      'Сумський район',
      'Тростянецький район',
      'Шостинський район',
      'Ямпільський район',
    ),
    4908 => array( // Тернопільська область Ternopil's'ka Oblast'
      'Бережанський район',
      'Борщівський район',
      'Бучацький район',
      'Гусятинський район',
      'Заліщицький район',
      'Збаразький район',
      'Зборівський район',
      'Козівський район',
      'Кременецький район',
      'Лановецький район',
      'Монастирський район',
      'Підволочиський район',
      'Підгаєцький район',
      'Теребовлянський район',
      'Тернопільський район',
      'Чотрківський район',
      'Шумський район',
    ),
    4896 => array( // Харківська область Kharkivs'ka Oblast' 
      'Балаклійський район',
      'Барвінківський район',
      'Близнюківський район',
      'Богодухівський район',
      'Борівський район',
      'Валківський район',
      'Великобурлуцький район',
      'Вовчанський район',
      'Дворічанський район',
      'Дергачівський район',
      'Зачепилівський район',
      'Зміївський район',
      'Золочівський район',
      'Ізюмський район',
      'Кегичівський район',
      'Коломацький район',
      'Красноградський район',
      'Краснокудський район',
      'Купянський район',
      'Лозівський район',
      'Нововодолазький район',
      'Первомайський район',
      'Печенізький район',
      'Сахновщинський район',
      'Харківський район',
      'Чугуївський район',
      'Шевченківський район',
    ),
    4897 => array( // Херсонська область Khersons'ka Oblast'
      'Бериславський район',
      'Білозерський район',
      'Великолепетиський район',
      'Верхньорогачицький район',
      'Високопільський район',
      'Генічеський район',
      'Голопристанський район',
      'Горностаївський район',
      'Іванівський район',
      'Каланчацький район',
      'Каховський район',
      'Нижньосірогозький район',
      'Нововоронцовський район',
      'Новотроїцький район',
      'Скадовський район',
      'Цюрупинський район',
      'Чаплинський район', 
    ),
    4898 => array( // Хмельницька область Khmel'nyts'ka Oblast' 
      'Білогірський район',
      'Віньковецький район',
      'Волочиський район',
      'Городоцький район',
      'Деражнянський район',
      'Дунаєвецький район',
      'Ізяславський район',
      'Камянець-Подільський район',
      'Красилівський район',
      'Летичівський район',
      'Новоушицький район',
      'Полонський район',
      'Славутський район',
      'Староконстянтинівський район',
      'Старосинявський район',
      'Теофіпольський район',
      'Хмельницький район',
      'Чемеровецький район',
      'Шепетівський район',
      'Ярмолинецький район',
    ),
    4890 => array( // Черкаська область Cherkas'ka Oblast' 
      'Городищенський район',
      'Драбівський район',
      'Жашківський район',
      'Звенигородський район',
      'Золотоніський район',
      'Камянський район',
      'Канівський район',
      'Катеринопільський район',
      'Корсунь-Шевченківський район',
      'Лисянський район',
      'Маньківський район',
      'Монастирищенський район',
      'Смілянський район',
      'Тальнівський район',
      'Уманський район',
      'Христинівський район',
      'Черкаський район',
      'Чигиринський район',
      'Чорнобаївський район',
      'Шполянський район',
    ),
    4892 => array( // Чернівецька область Chernivets'ka Oblast' 
      'Вижницький район',
      'Герцаївський район',
      'Глибоцький район',
      'Заставнівський район',
      'Кельменецький район',
      'Кіцманський район',
      'Новоселецький район',
      'Путильський район',
      'Сокирянський район',
      'Сторожинецький район',
      'Хотинський район',
    ),
    4891 => array( // Чернігівська область Chernihivs'ka Oblast'
      'Бахмацький район',
      'Бобровицький район',
      'Борзнянський район',
      'Варвинський район',
      'Городнянський район',
      'Ічнянський район',
      'Козелецький район',
      'Коропський район',
      'Корюківський район',
      'Куликівський район',
      'Менський район',
      'Ніжинський район',
      'Новгород-Сіверський район',
      'Носівський район',
      'Прилуцький район',
      'Ріпкинський район',
      'Семенівський район',
      'Сосницький район',
      'Срібнянський район',
      'Талалаївський район',
      'Чернігівський район',
      'Щорський район',
    ),
    4915 => array( // Київ Kyiv 
      'Голосіївський район',
      'Дарницький район',
      'Деснянський район',
      'Дніпровський район',
      'Оболонський район',
      'Печерський район',
      'Подільський район',
      'Святошинський район',
      'Соломянський район',
      'Шевченківський',
    ),
    4916 => array( // Севастопол Sevastopolь
      'Балаклавський район',
      'Гагарінський район',
      'Ленінський район',
      'Нахімовський район',
    ),
    4914 => array( // Автономна Республіка Крим Respublika Krym 
      'Бахчисарайський район',
      'Білогірський район',
      'Джанкойський район',
      'Кіровський район',
      'Красногвардійський район',
      'Красноперекопський район',
      'Ленінський район',
      'Нижньогірський район',
      'Первомайський район',
      'Роздольненський район',
      'Сакський район',
      'Сімферопольський район',
      'Совєтський район',
      'Чорноморський район',
    ),
  );
  
  return $counties;
}
/**
 * Check and load counties
 */
function ukrainerayons_loadcounties() {
  $counties = ukrainerayons_listcounties();
  static $dao = NULL;
  if (!$dao) {
    $dao = new CRM_Core_DAO();
  }
  // go state-by-state to check existing counties
  foreach ($counties as $id => $state) {
    $check = "SELECT name FROM civicrm_county WHERE state_province_id = $id";
    $results = CRM_Core_DAO::executeQuery($check);
    $existing = array();
    while ($results->fetch()) {
      $existing[] = $results->name;
    }
    // identify counties needing to be loaded
    $add = array_diff($state, $existing);
    
    $insert = array();
    foreach ($add as $county) {
      $countydao = $dao->escape($county);
      $insert[] = "('$countydao', $id)";
    }
    
    // put it into queries of 50 counties each
    for($i = 0; $i < count($insert); $i = $i+50) {
      $inserts = array_slice($insert, $i, 50);
      $query = "INSERT INTO civicrm_county (name, state_province_id) VALUES ";
      $query .= implode(', ', $inserts);
      CRM_Core_DAO::executeQuery($query);
    }
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function ukrainerayons_civicrm_config(&$config) {
  _ukrainerayons_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function ukrainerayons_civicrm_xmlMenu(&$files) {
  _ukrainerayons_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function ukrainerayons_civicrm_install() {
  ukrainerayons_loadcounties();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function ukrainerayons_civicrm_enable() {
  ukrainerayons_loadcounties();
}
/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function ukrainerayons_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  ukrainerayons_loadcounties();
}