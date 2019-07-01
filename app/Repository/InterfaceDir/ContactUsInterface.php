<?php
namespace App\Repository\InterfaceDir;
interface ContactUsInterface
{
    public function getContactUsForm();
    public function storeContactUsData(array $data);
}