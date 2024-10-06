<?php
// 获取URL参数中的sbm_value
if (isset($_GET['sbm'])) {
    $sbm_value = $_GET['sbm'];
    
    // 加载sq.json文件
    $json_file = 'sq.json';
    if (file_exists($json_file)) {
        $json_data = file_get_contents($json_file);
        $data = json_decode($json_data, true);
        
        // 检查sbm_value是否在JSON数据中，并且值是否为true
        if (isset($data[$sbm_value]) && $data[$sbm_value] === true) {
            echo 'true';
        } else {
            echo 'false';
        }
    } else {
        echo 'Error: sq.json file not found.';
    }
} else {
    echo 'Error: sbm_value parameter missing.';
}
?>
