<?php
namespace Composer\Installers;

class Ue4Installer extends BaseInstaller
{
    protected $locations = array(
        'content'      => 'Content/Shared/{$name}/',
    );
}

