<?php

/**
 * This file conains helper functions
 */


function escape($html)
{
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

/**
 * This function return the correct rootURI to use
 * @return string
 */
function getRootURI()
{
    return ($_SERVER['HTTP_HOST'] == 'localhost')
        ? '/time-tracker'
        : '';
}