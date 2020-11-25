<?php

$user = null;

try {
    echo $user ?? throw new Exception();
} catch (Exception) {
    echo "Some error just happened";
}
