<?php
namespace coding\app\system;

final class StaticPaths{
    public const ROOT = __DIR__."/../../app";
    public const PUBLICS = __DIR__."/../../public";
    public const VIEWS = self::ROOT."/views";
    public const ADMIN_VIEWS = self::VIEWS."/adminViews";
    public const USER_VIEWS = self::VIEWS."/userViews";
    public const ADMIN_COMPONENTS = self::ADMIN_VIEWS."/Components";
    public const USER_COMPONENTS = self::USER_VIEWS."/Components";
    public const UPLOADS = self::PUBLICS."/uploads";
    public const IMAGES = self::UPLOADS."/images";
    public const FILES = self::UPLOADS."/files";
    public const CATEGORIES = self::IMAGES."/categories";
    public const PAYMENTS = self::IMAGES."/payments";
    public const PUBLISHERS = self::IMAGES."/publishers";
    public const AUTHORS = self::IMAGES."/authors";
    public const BOOKS = self::IMAGES."/books";
    public const USERS = self::IMAGES."/users";




}

?>