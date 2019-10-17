<?php

$goods = getAssocResult('SELECT * FROM goods ORDER BY good_price DESC; ');

$images = getAssocResult('SELECT * FROM images ORDER BY images_low DESC; ');