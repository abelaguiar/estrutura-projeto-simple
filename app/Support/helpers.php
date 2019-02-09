<?php

function view($page, $datas = [])
{
    require_once dirname(__DIR__)."/Views/".$page;
}
