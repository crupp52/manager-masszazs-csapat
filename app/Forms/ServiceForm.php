<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class ServiceForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', Field::TEXT, [
                'label' => 'Szolgáltatás neve',
                'rules' => 'required',
                'error_messages' => [
                    'description.required' => "A mező kitörléte kötelező."
                ]
            ])
            ->add('description', 'ckeditor-field', [
                'label' => 'Leírás',
                'name' => 'description',
                'content' => $this->getModel()->description,
                'rules' => 'required',
                'error_messages' => [
                    'description.required' => "A mező kitörléte kötelező."
                ]
            ])
            ->add('photos[]', Field::FILE, [
                'label' => 'Képek',
                'attr' => [
                    'multiple',
                    'accept' => 'image/*'
                ]
            ]);

        if ($this->getModel()->photos->count() > 0) {
            $this
                ->add('open', 'uploaded-photo-field-open');

            foreach ($this->getModel()->photos as $key => $photo) {
                $this
                    ->add('uploaded_photos_' . $key, 'uploaded-photo-field', [
                        'filename' => $photo->filename
                    ]);
            }

            $this
                ->add('close', 'uploaded-photo-field-close');
        }

        $this
            ->add('Mentés', Field::BUTTON_SUBMIT, [
                "attr" => [
                    "type" => "submit",
                    "class" => "btn btn-primary"
                ]
            ]);
    }
}
