# krol

Общие компоненты:
- компоненты меню (основное и мобильное)
- хлебные крошки
- контактные данные через h-блок

1. Главная страница:
- две включаемые области (вверху и внизу)
- описание страницы через h-блок 'Главная страница'
- компонент news.list ближайшие тренинги (инфоблок тренинги)
- компонент news.list корпоративные клиенты (инфоблок корпоративные клиенты)
- компонент news.list блог (инфоблок блог)
- компонент news.list отзывы (инфоблок отзывы)

2. Страница schedule (news):
- компонент news.list, вывод даты через календарь, выбор цвета блока через список
- фильтр catalog.smart.filter по тренерам и типу тренинга
- форма записи на бронь, данные сохраняются в отдельном инфоблоке
- компонент system.pagenavigation кнопка 'Показать еще' постраничной навигации

2.1. Страница schedule/* (detail):
- компонент news.detail, вывод информации из инфоблока тренинга, вывод связанного тренера, связанных с тренером статей в блоге
- форма записи на бронь, данные сохраняются в отдельном инфоблоке
- компонент news.list отзывы (инфоблок отзывы)

3. Страница trainings:
- описание страницы через h-блок 'Корпоративные тренинги'
- компонент news.list корпоративные клиенты (инфоблок корпоративные клиенты)

4. Страница trainers:
- элемент news.list, выбор цвета блока через список

5. Страница blog:
- фильтр catalog.smart.filter по тренерам
- компонент news.list блог (инфоблок блог)
- компонент system.pagenavigation кнопка 'Показать еще' постраничной навигации

6. Страница about:
- включаемая область

7. Страница contacts:
- компонент map.yandex.view

8. 404 страница