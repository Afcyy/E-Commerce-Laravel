<?php

function presentPrice($price)
{
    return "$" . number_format($price / 100, 2);
}

function setActiveURL($slug, $output = 'active')
{
    return request()->category == $slug ? $output : '';
}