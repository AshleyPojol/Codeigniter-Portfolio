<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'acpojol_MyGuests';

    protected $allowedFields = ['fullName', 'emailUsed', 'subjectUsed', 'messageInput'];

    public function getComments()
    {       
        return $this->findAll();
    }
}