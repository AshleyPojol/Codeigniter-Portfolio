<?php

namespace App\Controllers;

use App\Models\CommentsModel;

class Comments extends BaseController
{
    public function index()
    {
        $model = model(CommentsModel::class);
        helper('form');

        $data = [
            'comments'  => $model->getComments(),
            'title' => 'Comment Section',
        ];

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
        }

        $post = $this->request->getPost(['fullName', 'emailUsed', 'subjectUsed', 'messageInput']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'fullName' => 'required|max_length[255]|min_length[3]',
            'emailUsed' => 'required|max_length[255]|min_length[3]',
            'subjectUsed' => 'required|max_length[255]|min_length[3]',
            'messageInput'  => 'required|max_length[5000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', $data)
            . view('comments/index')
            . view('templates/footer');
        }

   
        $model->save([
            'fullName' => $post['fullName'],
            'emailUsed' => $post['emailUsed'],
            'subjectUsed' => $post['subjectUsed'],
            'messageInput'  => $post['messageInput'],
        ]);

        return view('templates/header', $data)
        . view('comments/success')
        . view('templates/footer');

        
        }

    
    }