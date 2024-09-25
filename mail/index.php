<?php
$check = mail("sujalkumar132@gmail.com", "Test mail", "The mail function is working!", "From:skumarmathur19320@gmail.com");
if ($check) {
    echo "Mail sent successfully!";
} else {
    echo "Mail not sent!";
}