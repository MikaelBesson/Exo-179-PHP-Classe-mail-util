<?php


class mail
{

    $message = $votreMessage($message, 70, "\r\n");
mail('caffeinated@example.com', 'Mon Sujet', $message);
}