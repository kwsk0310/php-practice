<?php
date_default_timezone_set('Asia/Taipei');
printf("<h2>%s<h2>",date("Y-m-d H:i:s"));
printf("<h2>%s<h2>",date("Y-m-d H:i:s",time()));
printf("<h2>%s<h2>",date("Y-m-d H:i:s",time()+24*60*60));
