<?php
namespace App\services;
class Concat{
    public function concate($nom,$prenom){
        return 'Bonjour Mr'.'  '.$nom.'    '.$prenom;
    }
}