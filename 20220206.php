<?php
    $employeeList = array(
        array('0001', '経理', '本社(東京)'),
        array('0002', '営業', '名古屋'),
        array('0003', 'マーケティング', '本社(東京)'),
        array('0004', '営業', '京都'),
        array('0005', '商品開発', '本社(東京)')
    );

    $headerRow = array('社員番号', '部署', '勤務地');

    $file = fopen('employee.csv', 'w');

    fputcsv($file, $headerRow);

    foreach ($employeeList as $fields) {
        fputcsv($file, $fields);
    }

    fclose($file);

    $openFile = fopen('employee.csv', 'r');
    
    while (($fields2 = fgetcsv($openFile)) !== false) {
        print_r($fields2);
        echo '<br>';
    }

    fclose($openFile);
?>