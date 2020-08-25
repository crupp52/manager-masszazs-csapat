<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class StaffForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'label' => 'Név',
                'rules' => 'required',
                'error_messages' => [
                    'required' => 'A mező kitöltése kötelező.'
                ]
            ])
            ->add('profile_picture', Field::FILE, [
                'label' => 'Profilkép'
            ]);

        if (isset($this->getModel()->filename)) {
            $this
                //->add('open', 'uploaded-photo-field-open')
                ->add('uploaded_profile_picture', 'uploaded-photo-field', [
                    'filename' => $this->getModel()->filename,
                    'id' => $this->getModel(),
                    'delete_button' => false
                ]);
                //->add('close', 'uploaded-photo-field-close');
        }

        $this
            ->add('description', 'ckeditor-field', [
                'label' => 'Leírás',
                'name' => 'description',
                'content' => isset($this->getModel()->description) ? $this->getModel()->description : '',
                'rules' => 'required',
                'error_messages' => [
                    'description.required' => "A mező kitörléte kötelező."
                ]
            ])
            ->add('Mentés', Field::BUTTON_SUBMIT, [
                "attr" => [
                    "type" => "submit",
                    "class" => "btn btn-primary"
                ]
            ]);
    }
}
