<?php
$routes[] = ['GET|POST', '/search/subscribe', 'GoCart\Controller\Search#subscribe'];
$routes[] = ['GET|POST', '/search/[:code]?/[:sort]?/[:dir]?/[:page]?', 'GoCart\Controller\Search#index'];
