<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'acpojol_myguests';

    protected $allowedFields = ['fullName', 'emailUsed', 'subjectUsed', 'messageInput'];

    public function getComments()
    {       
        return $this->findAll();
    }
}