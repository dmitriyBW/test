<?php  return array (
  'attributes' => 'Атрибуты',
  'attr_attr_desc' => 'Один или несколько атрибутов, разделенных пробелами, чтобы добавить к тегу этого элемента (например, <span class="example-input">rel="external" type="application/pdf"</span>).',
  'attr_class_desc' => 'Один или несколько имен классов, разделенных пробелами.',
  'attr_style_desc' => 'Определения CSS (например, цвет <span class="example-input">color:#f36f99; text-decoration:none;</span>).',
  'attr_target_blank' => 'Blank',
  'attr_target_parent' => 'Parent',
  'attr_target_self' => 'Self',
  'attr_target_top' => 'Top',
  'attr_target_desc' => 'Указывает, в каком окне/вкладке или рамке должен быть открыт связанный url. Для указания определенного кадра введите его название вместо одного из предложенных вариантов.',
  'capitalize' => 'Прописные',
  'checkbox' => 'Флажки (checkbox)',
  'checkbox_columns' => 'Столбцы',
  'checkbox_columns_desc' => 'Количество колонок, в которых будут отображаться флажки (checkbox).',
  'class' => 'Класс',
  'classes' => 'Класс(ы)',
  'combo_allowaddnewdata' => 'Разрешить добавлять новые элементы',
  'combo_allowaddnewdata_desc' => 'Если выбрано «Да», разрешает добавлять элементы, которые еще не в списке. По умолчанию «Нет».',
  'combo_forceselection' => 'Требуется совпадение',
  'combo_forceselection_desc' => 'Сохранить только введенный параметр, когда он соответствует тому, который уже определен в списке.',
  'combo_forceselection_multi_desc' => 'Если выбрано «Да», то будет разрешен выбор элементов только из списка. Если выбрано «Нет», то будет разрешен ввод пользовательских значений.',
  'combo_listempty_text' => 'Опция не найдена',
  'combo_listempty_text_desc' => 'Сообщение для отображения при вводе текста не соответствует существующим параметрам.',
  'combo_listheight' => 'Высота списка',
  'combo_listheight_desc' => 'Высота выпадающего списка, в % или px. По умолчанию высота как у поля с выпадающим списком.',
  'combo_listwidth' => 'Ширина списка',
  'combo_listwidth_desc' => 'Ширина выпадающего списка, в % или px. По умолчанию ширина как у поля с выпадающим списком.',
  'combo_maxheight' => 'Максимальная высота',
  'combo_maxheight_desc' => 'Максимальная высота выпадающего списка в пикселях перед отображением прокрутки. (По умолчанию: 300)',
  'combo_stackitems' => 'Выбранные значения в столбик',
  'combo_stackitems_desc' => 'Если выбрать «Да», выбранные значения будут выстраиваться вертикально. По умолчанию «Нет», при этом значения выстраиваются в одну строку.',
  'combo_title' => 'Заголовок списка',
  'combo_title_desc' => 'Если указано, в начале выпадающего списка будет создан заголовок, содержащий указанный текст.',
  'combo_typeahead' => 'Включить автозавершение',
  'combo_typeahead_desc' => 'Нажать и автоматически выбирать параметры, которые совпадают по мере ввода после настраиваемой задержки. (По умолчанию: Нет)',
  'combo_typeahead_delay' => 'Задержка',
  'combo_typeahead_delay_desc' => 'Миллисекунды перед отображением соответствующего параметра. (По умолчанию: 250)',
  'date' => 'Дата',
  'date_format' => 'Формат даты',
  'date_format_desc' => 'Введите формат, используя <a href="https://www.php.net/strftime" target="_blank">синтаксис PHP функции strftime</a>.
    <div class="example-list">Общие примеры включают:
        <ul>
            <li><span class="example-input">[[+example_1a]]</span> ([[+example_1b]]) (формат по умолчанию)</li>
            <li><span class="example-input">[[+example_2a]]</span> ([[+example_2b]])</li>
            <li><span class="example-input">[[+example_3a]]</span> ([[+example_3b]])</li>
            <li><span class="example-input">[[+example_4a]]</span> ([[+example_4b]])</li>
            <li><span class="example-input">[[+example_5a]]</span> ([[+example_5b]])</li>
            <li><span class="example-input">[[+example_6a]]</span> ([[+example_6b]])</li>
            <li><span class="example-input">[[+example_7a]]</span> ([[+example_7b]])</li>
        </ul>
    </div>',
  'date_use_current' => 'Использовать текущую дату как откат',
  'date_use_current_desc' => 'Когда значение для этого TV не требуется ("Разрешить пустое" = «Да») и не указана дата по умолчанию, параметр «Да» будет отображаться текущая дата.',
  'default' => 'По умолчанию',
  'default_date_now' => 'Сегодня с текущим временем',
  'default_date_today' => 'Сегодня (полуночь)',
  'default_date_yesterday' => 'Вчера (полуночь)',
  'default_date_tomorrow' => 'Завтра (полуночь)',
  'default_date_custom' => 'Пользовательский (см. описание ниже)',
  'delim' => 'Разделитель',
  'delimiter' => 'Разделитель',
  'delimiter_desc' => 'Один или более символов, используемых для разделения значений (применимо к TV с поддержкой нескольких выбранных опций).',
  'disabled_dates' => 'Неактивные даты',
  'disabled_dates_desc' => 'Разделенный запятыми, javascript <abbr title="regular expression">regex</abbr>-совместимый список дат (без разделителей) дат в формате даты менеджера (в настоящее время “[[+format_current]]”).
    <p>Примеры использования формата по умолчанию (“[[+format_default]]”) включают:</p>
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (выбирает отдельные даты)</li>
            <li><span class="example-input">[[+example_2a]]</span> (выбор [[+example_2b]] и [[+example_2c]] каждого года)</li>
            <li><span class="example-input">[[+example_3a]]</span> (“^” чтобы соответствовать началу строки; это выбирает все  [[+example_3b]])</li>
            <li><span class="example-input">[[+example_4a]]</span> (выбор каждого дня в [[+example_4b]])</li>
            <li><span class="example-input">[[+example_5]]</span> (“$” чтобы соответствовать концу строки; это выбирает каждый день в марте каждого года)</li>
        </ul>
        Примечание. Если в вашем формате даты используются разделители точки, их необходимо экранировать.  (например., “[[+example_6a]]” должно быть введено выше как  “[[+example_6b]]”).
    </div>',
  'disabled_days' => 'Неактивные дни',
  'disabled_days_desc' => '',
  'dropdown' => 'Выпадающий список',
  'earliest_date' => 'Ранняя дата',
  'earliest_date_desc' => 'Самая ранняя дата, которую можно выбрать.',
  'earliest_time' => 'Раннее время',
  'earliest_time_desc' => 'Самое раннее время, которое можно выбрать.',
  'email' => 'Электронная почта',
  'file' => 'Файл',
  'height' => 'Высота',
  'hidden' => 'Скрытый',
  'hide_time' => 'Скрыть параметр времени',
  'hide_time_desc' => 'Удаляет возможность выбора времени из выбора даты TV.',
  'htmlarea' => 'HTML-поле',
  'htmltag' => 'HTML-тег',
  'image' => 'Изображение',
  'image_alt' => 'Альтернативный текст',
  'latest_date' => 'Поздняя дата',
  'latest_date_desc' => 'Самая поздняя дата, которую можно выбрать.',
  'latest_time' => 'Позднее время',
  'latest_time_desc' => 'Самое позднее время, которое можно выбрать.',
  'listbox' => 'Список (одиночный выбор)',
  'listbox-multiple' => 'Список (множественный выбор)',
  'lower_case' => 'Нижний регистр',
  'max_length' => 'Максимальная длина',
  'min_length' => 'Минимальная длина',
  'regex_text' => 'Регулярное выражение содержит ошибку',
  'regex_text_desc' => 'Сообщение, показывающее, вводит ли пользователь текст, неверный в соответствии с <abbr title="regular expression">регулярным выражением</abbr> валидатором.',
  'regex' => 'Проверка регулярного выражения',
  'regex_desc' => 'JavaScript <abbr title="regular expression">regex</abbr>-совместимая строка (без разделителей), чтобы ограничить содержимое этого TV. Некоторые примеры: 
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (шаблон для почтовых индексов США)</li>
            <li><span class="example-input">[[+example_2]]</span> (разрешать только буквы)</li>
            <li><span class="example-input">[[+example_3]]</span> (разрешить все символы, кроме цифр)</li>
            <li><span class="example-input">[[+example_4]]</span> (должен заканчиваться строкой “-XP”)</li>
        </ul>
    </div>',
  'name' => 'Название',
  'number' => 'Число',
  'number_allowdecimals' => 'Разрешить десятичные',
  'number_allownegative' => 'Разрешить отрицательные',
  'number_decimalprecision' => 'Точность',
  'number_decimalprecision_desc' => 'Максимальное количество цифр, допустимое после десятичного разделителя. (По умолчанию: 2)',
  'number_decimalprecision_strict' => 'Строгая десятичная точность ',
  'number_decimalprecision_strict_desc' => 'При значении «Да» сохраняет конечные нули в десятичных знаках (по умолчанию «Нет»).',
  'number_decimalseparator' => 'Разделитель',
  'number_decimalseparator_desc' => 'Символ, используемый как десятичный разделитель. (По умолчанию: «.»)',
  'number_maxvalue' => 'Максимальное значение',
  'number_minvalue' => 'Минимальное значение',
  'option' => 'Переключатели (radio)',
  'parent_resources' => 'Родительские ресурсы',
  'radio_columns' => 'Столбцы',
  'radio_columns_desc' => 'Количество столбцов, в которых отображаются переключатели.',
  'rawtext' => 'Сырой текст (устарело)',
  'rawtextarea' => 'Область сырого текста (устарело)',
  'required' => 'Может быть незаполненным',
  'required_desc' => 'Выберите «Нет», чтобы сделать TV обязательным полем в ресурсах, к которым он привязан. (По умолчанию: «Да»)',
  'resourcelist' => 'Список ресурсов',
  'resourcelist_depth' => 'Глубина',
  'resourcelist_depth_desc' => 'Количество подпапок для углубления поискового запроса в этом списке. (По умолчанию: 10)',
  'resourcelist_forceselection_desc' => 'Выключено: список совпадений действителен.',
  'resourcelist_includeparent' => 'Включать родителей',
  'resourcelist_includeparent_desc' => 'Выберите «Да» для включения в список ресурсов, указанных в поле «Родители».',
  'resourcelist_limitrelatedcontext' => 'Ограничить текущим контекстом',
  'resourcelist_limitrelatedcontext_desc' => 'Выберите «Да», чтобы включить только ресурсы, связанные с контекстом текущего ресурса.',
  'resourcelist_limit' => 'Лимит',
  'resourcelist_limit_desc' => 'Максимальное количество ресурсов, отображаемых в списке этого TV. (По умолчанию: 0, это неограниченно)',
  'resourcelist_listempty_text_desc' => 'Выключено: выбор всегда будет соответствовать списку.',
  'resourcelist_parents' => 'Родители',
  'resourcelist_parents_desc' => 'Если указано, список TV будет включать только дочерние ресурсы из набора идентификаторов ресурсов (контейнеров), разделённых запятыми.',
  'resourcelist_where' => 'Where условие',
  'resourcelist_where_desc' => '
    <p>A Объект JSON одного или нескольких полей ресурсов для фильтрации списка ресурсов этого TV. </p>
    <div class="example-list">Некоторые примеры:
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (выбрать только ресурсы с назначенным шаблоном 4)</li>
            <li><span class="example-input">[[+example_2]]</span> (выбрать все ресурсы, за исключением тех, у которых имя “Home”)</li>
            <li><span class="example-input">[[+example_3]]</span> (включать только ресурсы, тип которых является веб-ссылкой или символической ссылкой)</li>
            <li><span class="example-input">[[+example_4]]</span> (включать только те ресурсы, которые опубликованы и не являются контейнерами)</li>
        </ul>
    </div>
    <p>Примечание. Фильтрация по значениям TV не поддерживается.</p>',
  'richtext' => 'Текстовый редактор',
  'sentence_case' => 'Чувствительный к регистру',
  'start_day' => 'Первый день недели',
  'start_day_desc' => 'День, отображаемый в начале недели в списке выбора даты этого TV. (по умолчанию: «Воскресенье»)',
  'string' => 'Строка',
  'string_format' => 'Строковый формат',
  'style' => 'Стиль',
  'tag_name' => 'Название тега',
  'target' => 'Цель',
  'text' => 'Текст',
  'textarea' => 'Текстовая область',
  'textareamini' => 'Текстовая область (мини)',
  'textbox' => 'Текстовый блок',
  'time_increment' => 'Приращение времени',
  'time_increment_desc' => 'Количество минут между каждым значением времени в списке. (По умолчанию: 15)',
  'title' => 'Заголовок',
  'tv_default_checkbox_desc' => 'Набор опций, разделенных двумя вертикальными чертами, выбранных для этого TV, если пользователь не проверяет один или более вариантов. Если ваши опции включают в себя метки (напр. Параметр Один==1||Параметр Два==2||Параметр Три==3), убедитесь, что вы ввели значение (т.е. «1» для Параметра 1 ,«1||3» для Параметров Один и Три )',
  'tv_default_date' => 'Дата и время по умолчанию',
  'tv_default_date_desc' => 'Дата для отображения, если пользователь ее не предоставил. Выберите относительную дату из списка выше или введите другую дату, используя один из следующих шаблонов: 
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (число представляет количество "часов назад")</li>
            <li><span class="example-input">[[+example_2]]</span> (число представляет количество часов в будущем)</li>
            <li><span class="example-input">[[+example_3]]</span> (конкретная дата [и время, если необходимо] с использованием показанного формата)</li>
        </ul>
        Примечание. Использование «+» и «-», показанное выше, противоречит здравому смыслу, но правильно («+» обозначает обратную во времени).
    </div>',
  'tv_default_email' => 'Адрес электронной почты по умолчанию',
  'tv_default_email_desc' => 'Адрес электронной почты этого TV будет показываться, если пользователь не предоставит его.',
  'tv_default_file' => 'Файл по умолчанию',
  'tv_default_file_desc' => 'Путь к файлу, который TV покажет, если пользователь не предоставит его.',
  'tv_default_image' => 'Изображение по умолчанию',
  'tv_default_image_desc' => 'Путь к изображению, который будет показываться, если пользователь не предоставит его.',
  'tv_default_option' => 'Опция по умолчанию',
  'tv_default_option_desc' => 'Вариант для этого TV, если пользователь не указал его. Если параметры включают в себя метки (напр. Параметр Один==1||Параметр Два==2||Параметр Три==3), убедитесь, что вы ввели значение (т.е. “1” для Параметра Один)',
  'tv_default_options' => 'Параметры по умолчанию',
  'tv_default_options_desc' => 'Набор опций, разделенных двумя вертикальными линиями, выбранных для этого TV, если пользователь не выбирает один или более вариантов. Если ваши опции включают в себя метки (напр. Параметр Один==1||Параметр Два==2||Параметр Три==3), убедитесь, что вы ввели значение (т.е. «1» для Параметра Один или «1||3» для Параметров Один и Три)',
  'tv_default_radio_desc' => 'Вариант для этого TV, если пользователь не указал его. Если параметры включают в себя метки (напр. Параметр Один==1||Параметр Два==2||Параметр Три==3), убедитесь, что вы ввели значение (т.е. “1” для Параметра Один)',
  'tv_default_listbox_desc' => 'Вариант для этого TV, если пользователь не указал его. Если параметры включают в себя метки (напр. Параметр Один==1||Параметр Два==2||Параметр Три==3), убедитесь, что вы ввели значение (т.е. “1” для Параметра Один)',
  'tv_default_listbox-multiple_desc' => 'Набор опций, разделенных двумя вертикальными линиями, выбранных для этого TV, если пользователь не выбирает один или более вариантов. Если ваши опции включают в себя метки (напр. Параметр Один==1||Параметр Два==2||Параметр Три==3), убедитесь, что вы ввели значение (т.е. «1» для Параметра Один или «1||3» для Параметров Один и Три)',
  'tv_default_number' => 'Номер по умолчанию',
  'tv_default_number_desc' => 'Число, которое покажет это TV, если пользователь его не укажет.',
  'tv_default_resource' => 'Ресурс по умолчанию (ID)',
  'tv_default_resourcelist_desc' => 'Ресурс, который этот TV покажет, если пользователь не выбрал.',
  'tv_default_tag' => 'Тег(и) по умолчанию',
  'tv_default_tag_desc' => 'Разделенный запятыми набор опций(ов) выбранных для этого TV, если пользователь не выбирает один или более вариантов. Если ваши опции включают метки (например, Тег Раз==1||Тег Два==2||Тег Три==3), не забудьте ввести значение (например: «1» для Тег Один или «1,3» для Тег Один и Тег Три)',
  'tv_default_text' => 'Текст по умолчанию',
  'tv_default_text_desc' => 'Текстовое содержимое, которое будет показано TV, если пользователь не предоставит его.',
  'tv_default_url' => 'URL по умолчанию',
  'tv_default_url_desc' => 'URL-адрес, который этот TV покажет, если пользователь не предоставил его.',
  'tv_elements_checkbox' => 'Параметры флажка',
  'tv_elements_listbox' => 'Параметры выпадающего списка',
  'tv_elements_radio' => 'Параметры радиокнопок',
  'tv_elements_tag' => 'Параметры тегов',
  'tv_elements_desc' => 'Определяет выбираемые параметры для этого TV, которые могут быть введены вручную или собраны с помощью однострочного <a href="https://docs.modx.com/current/building-sites/elements/template-variables/bindings/select-binding" target="_blank">запроса базы данных</a>. Некоторые примеры:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Птица||Кошка||Собака</span> (короче для птица==Птица||Кошка==Кошка||Собака==Собака)</li>
            <li><span class="example-input"><span class="example-input"> Белый==#ffffff|||Черный==#000000</span> (где label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (строит список опубликованных ресурсов с назначенным id шаблона равным 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (строит тот же список, что и предыдущий пример, включая пустой вариант)</li>
        </ul>
    </div>
    ',
  'tv_elements_checkbox_desc' => 'Определяет выбираемые параметры для этого TV, которые могут быть введены вручную или собраны с помощью однострочного <a href="https://docs.modx.com/current/building-sites/elements/template-variables/bindings/select-binding" target="_blank">запроса базы данных</a>. Некоторые примеры:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Птица||Кошка||Собака</span> (короче для птица==Птица||Кошка==Кошка||Собака==Собака)</li>
            <li><span class="example-input"><span class="example-input"> Белый==#ffffff|||Черный==#000000</span> (где label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (строит список опубликованных ресурсов с назначенным id шаблона равным 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (строит тот же список, что и предыдущий пример, включая пустой вариант)</li>
        </ul>
    </div>
    ',
  'tv_elements_listbox_desc' => 'Определяет выбираемые параметры для этого TV, которые могут быть введены вручную или собраны с помощью однострочного <a href="https://docs.modx.com/current/building-sites/elements/template-variables/bindings/select-binding" target="_blank">запроса базы данных</a>. Некоторые примеры:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Птица||Кошка||Собака</span> (короче для птица==Птица||Кошка==Кошка||Собака==Собака)</li>
            <li><span class="example-input"><span class="example-input"> Белый==#ffffff|||Черный==#000000</span> (где label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (строит список опубликованных ресурсов с назначенным id шаблона равным 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (строит тот же список, что и предыдущий пример, включая пустой вариант)</li>
        </ul>
    </div>
    ',
  'tv_elements_listbox-multiple_desc' => 'Определяет выбираемые параметры для этого TV, которые могут быть введены вручную или собраны с помощью однострочного <a href="https://docs.modx.com/current/building-sites/elements/template-variables/bindings/select-binding" target="_blank">запроса базы данных</a>. Некоторые примеры:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Птица||Кошка||Собака</span> (короче для птица==Птица||Кошка==Кошка||Собака==Собака)</li>
            <li><span class="example-input"><span class="example-input"> Белый==#ffffff|||Черный==#000000</span> (где label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (строит список опубликованных ресурсов с назначенным id шаблона равным 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (строит тот же список, что и предыдущий пример, включая пустой вариант)</li>
        </ul>
    </div>
    ',
  'tv_elements_option_desc' => 'Определяет выбираемые параметры для этого TV, которые могут быть введены вручную или собраны с помощью однострочного <a href="https://docs.modx.com/current/building-sites/elements/template-variables/bindings/select-binding" target="_blank">запроса базы данных</a>. Некоторые примеры:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Птица||Кошка||Собака</span> (короче для птица==Птица||Кошка==Кошка||Собака==Собака)</li>
            <li><span class="example-input"><span class="example-input"> Белый==#ffffff|||Черный==#000000</span> (где label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (строит список опубликованных ресурсов с назначенным id шаблона равным 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (строит тот же список, что и предыдущий пример, включая пустой вариант)</li>
        </ul>
    </div>
    ',
  'tv_elements_radio_desc' => 'Определяет выбираемые параметры для этого TV, которые могут быть введены вручную или собраны с помощью однострочного <a href="https://docs.modx.com/current/building-sites/elements/template-variables/bindings/select-binding" target="_blank">запроса базы данных</a>. Некоторые примеры:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Птица||Кошка||Собака</span> (короче для птица==Птица||Кошка==Кошка||Собака==Собака)</li>
            <li><span class="example-input"><span class="example-input"> Белый==#ffffff|||Черный==#000000</span> (где label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (строит список опубликованных ресурсов с назначенным id шаблона равным 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (строит тот же список, что и предыдущий пример, включая пустой вариант)</li>
        </ul>
    </div>
    ',
  'tv_elements_tag_desc' => 'Определяет выбираемые параметры для этого TV, которые могут быть введены вручную или собраны с помощью однострочного <a href="https://docs.modx.com/current/building-sites/elements/template-variables/bindings/select-binding" target="_blank">запроса базы данных</a>. Некоторые примеры:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Птица||Кошка||Собака</span> (короче для птица==Птица||Кошка==Кошка||Собака==Собака)</li>
            <li><span class="example-input"><span class="example-input"> Белый==#ffffff|||Черный==#000000</span> (где label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (строит список опубликованных ресурсов с назначенным id шаблона равным 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (строит тот же список, что и предыдущий пример, включая пустой вариант)</li>
        </ul>
    </div>
    ',
  'upper_case' => 'Верхний регистр',
  'url' => 'URL',
  'url_display_text' => 'Показать текст',
  'width' => 'Ширина',
  'tv_default_datetime' => 'Дата и время по умолчанию',
);