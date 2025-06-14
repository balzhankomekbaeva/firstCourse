<?php
$age = 16;
$permission = true;

if ($permission && $age >= 18) {
    echo "Доступ разрешён";
} elseif ($permission && $age < 18) {
    echo "Доступ разрешён при родительском согласии";
} else {
    echo "Доступ запрещён";
}
?>