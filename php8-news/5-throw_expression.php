<?php

$user = null;


// Before
if (null !== $user) {
    echo $user;
} else {
    throw new Exception();
}

// After
echo $user ?? throw new Exception();
