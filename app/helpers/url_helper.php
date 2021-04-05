<?php
//Helpers are just reusable functions in the whole application
function redirect($page) {
    header('location: ' . URL_ROOT, '/' . $page);
}