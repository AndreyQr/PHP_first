<?php

include './engine/autoload.php';
autoload('config');
include ENGINE_DIR.'db.php';
include ENGINE_DIR . 'goods_table_controler.php';


include TEMPLATES_DIR.'header.php';
include TEMPLATES_DIR.'goods_table.php';
include TEMPLATES_DIR.'footer.php';