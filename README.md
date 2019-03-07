# Lab.-Internet-programming

# Lab2
### task1
1. блоки - div (9 шт. без вложенности).
2. все блоки должны иметь различное оформление (у каждого свой стиль).
3. блоки расположены как на примере.
4. стили для первых трех блоков должен быть в отдельном файле css.
5. стили для второй тройки блоков должен быть в html файле в блоке style.
6. стили для последней тройки блоков должны быть в атрибуте style этих блоков.
# task2
Создать тематическую веб-страницу. Предусмотреть выполнение следующих условий:
1. В качестве фона на странице установить любое изображение.
2. На странице должны быть размещены заголовки разных уровней.
3. Разместить на странице текст в блоки div (не менее 3). Первая буква
каждых абзацев должна отличаться от всего текста.
4. Разместить на странице несколько ссылок. Пройденные ссылки должны
отличаться по цвету от не пройденных. Предусмотреть редирект на
различные блоки текста.
5. Разместить на странице изображения, обтекаемые текстом.

# Lab3 + Lab4

Предусмотреть проверку корректного ввода и предупреждения об ошибках. Работа с отрицательными и дробными числами
должна быть корректной.
### task1
По нажатию на кнопку prompt, в диалоговом окне ввести число и записать его на кнопке, а также добавить его в поле ввода.
### task2
5 дополнительных функций калькултора: Двоичное в десятичное, Косинус, Модуль числа, Десятичный логарифм, Перевод числа из десятичной системы счисления в восьмеричную.

# Lab5
### task1
Создать web-страницу, на которой разместить три поля для ввода чисел и две кнопки (submit, reset). Если пользователь
некорректно ввел данные, очистить поля ввода, иначе отправить данные для обработки PHP-скрипту.
Проверить, является ли минимальное число числом Мерсенна.
### task2
Создать форму для регистрации студентов в
группы, для изучения иностранных языков. Предусмотреть
обязательный ввод фамилии, возраста, электронной почты студента и
выбора не менее одного иностранного языка. Сформировать письмо
студенту с подтверждением о его регистрации. Предусмотреть
корректность ввода данных, обязательных для заполнения. Письмо
должно содержать информацию о дате и времени проведения первого 
занятия по каждому из выбранных языков. Данные для обработки из
формы отправлять PHP-скрипту.

# Mitap

### task1
Написать программу, которая в зависимости от времени суток будет показывать пользователю определённое изображение:  
1. 0-5 часов – ночь  
2. 6-11 часов – утро  
3. 12-17 часов – день  
4. 18 – 23 часа – вечер  
Изображения берутся произвольные и называются 0.jpg, 1.jpg, 2.jpg, 3.jpg.  
Запрещается использовать ветвления! Только математика, только % или другие подобные операции!  

### task2
##### Написать программу, которая в зависимости от времени суток будет показывать пользователю определённое изображение(используя ветвления.):  
1. 0-5 часов – ночь  
2. 6-11 часов – утро  
3. 12-17 часов – день  
4. 18 – 23 часа – вечер  
Изображения берутся произвольные и называются произвольно, без порядковой нумерации.  

##### Сделать правильные склонения для слова «час» при выводе на экран.  
Например,  
1. 10 часов  
2. 21 час  
3. 4 часа  

### task3
1. Составить функцию для склонения слова.  
Например, выбираете слова «минут». Тогда функция принимает число в диапазоне от 0 до 59, а возвращает слово в правильном склонении:  
 1. вход: 10, выход: минут  
 2. вход: 21, выход: минута  
 3. вход: 4, выход: минуты  
2. Проверить работу функции на всех входных значениях.  
3. Возьмите слово, у которого нет ограничения по диапазону. Например, «товар-товара-товаров». Подумайте, что изменится по сравнению с пунктов 1.  

### task4
На основе последнего примера доделать форму заказа обратного звонка.  
1. Необходимо добавить проверку вводимых пользователем данных:  
+имя не короче двух символов  
+телефон состоит из цифр  
2. В случае ошибки данные на форме должны сохраняться. Например, если человек ввёл имя и забыл телефон, то показываем ему сообщение об ошибке, а имя остаётся в поле.  
