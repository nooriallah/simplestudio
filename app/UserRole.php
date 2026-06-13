<?php

namespace App;

enum UserRole: string
{
    case SUBSCRIBER = 'subscriber';
    case EDITOR = 'editor';
    case ADMIN = 'admin';
}
