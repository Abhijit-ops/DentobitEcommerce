<?php
namespace App\Repository\InterfaceDir;
interface UserInterface
{
    public function getUserDatails();
    public function userOrder($id);
    public function updateProfileForm();
    public function updateProfile(array $data);
}