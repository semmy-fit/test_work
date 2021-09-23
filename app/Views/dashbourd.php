<?php
$session = session();
echo "Welcome back, " . $session->get('user_name');