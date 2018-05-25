<?php

function xml_attribute($object, $attribute)
{
    if(isset($object[$attribute]))
        //return (string) utf8_decode($object[$attribute]);
        //return (string) utf8_encode($object[$attribute]);
    	return (string) $object[$attribute];
}