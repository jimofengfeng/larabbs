<?php

//返回路由中class名称
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

?>