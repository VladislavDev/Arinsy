<?php
    $type = $_REQUEST['type'];  // Получаем тип запроса (цель запроса)
    
    switch($type){
        case 'filepath':        // Если цель - получить путь к данному файлу
            echo $_SERVER['SCRIPT_FILENAME'];   // Вернуть путь к данному файлу
            break;                              // Завершить выполнение
        case 'credit':          // Если цель - расчёт кредита
            $rate       = $_REQUEST['rate'];    // Получить кредитную ставку в процентах
            $amount     = $_REQUEST['amount'];  // Получить начальную сумму кредита
            $payment    = $_REQUEST['pay'];     // Получить сумму ежемесячного платежа

            $year   = 0;                        // Кол-во лет выплаты кредита
            $mon    = 0;                        // Кол-во месяцев выплаты кредита

            while($amount > 0){                 // Пока кредит не выплачен
                if (($amount - $payment * 12) > 0){     // Если за год не будет выплачен
                    $amount -= ($payment * 12);         // Отнять год выплат
                    $year++;                            // Прибавить кол-во лет выплаты
                }else{                          // Если платить по кредиту менее года
                    for ($i = 0; $amount > 0; $i++){    // Помесячно отнимаем сумму платежа
                        $amount -= $payment;
                        $mon++;                         // Прибавляем месяц
                    }
                }
                $amount = $amount * (1+($rate / 100));  // По истечении года начислить процент по кредиту
            }

            echo ($year * 12 + $mon);   // Вернуть кол-во месяцев выплаты кредита
            break;                      // Завершить выполнение
        case 'md5-test':
            $str    = $_REQUEST['str'];
            $hash   = $_REQUEST['hash'];
            
            if ($hash === md5($str)){
                echo json_encode(TRUE);
            }else{
                echo json_encode(FALSE);
            }
            break;
        case 'sha1-test':
            $str    = $_REQUEST['str'];
            $hash   = $_REQUEST['hash'];
            
            if ($hash === sha1($str)){
                echo json_encode(TRUE);
            }else{
                echo json_encode(FALSE);
            }
            break;
    }
?>