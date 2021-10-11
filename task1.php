<?php
// объявляем переменную типа строка
$sentence = "Если кто-то оступился, сбился с пути - это не значит, что он потерян.";
// разбиваем строку на подстроки

// создаем массив для хранения букв
$firstLetterArr=[];
// объявляем функцию
    function firstLetter() {
        global $sentence; // обращаемся к строке глобально
        $wordsArr=explode(' ', $sentence); // разбиваем строку по символу пробела, результатом функции explode будет массив строк, который запишем в переменную wordsArr
        for ($i=0; $i<count($wordsArr); $i++) { // объявляем цикл для перебора массива строк
            if ($wordsArr[$i] != '-') { // проверяем является ли элемент массива словом
                $firstLetterArr[]=substr($wordsArr[$i], 0, 2); // извлекаем из строки первый символ, результат функции substr добавляем в массив firstLetter 
            }
        }
        $firstLetterArr = array_unique($firstLetterArr); // удаляем повторяющиеся элементы из массива
        sort($firstLetterArr); // сортируем массив по возрастанию
        return $firstLetterArr;
    }

var_dump(firstLetter($sentence)); 

?>