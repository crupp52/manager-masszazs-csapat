<?php namespace App\Forms\Fields;

use Illuminate\Support\Facades\Storage;
use Kris\LaravelFormBuilder\Fields\FormField;

class UploadedPhotoField extends FormField
{

    protected function getTemplate()
    {
        return 'fields.uploaded-photo-filed';
    }

    public function render(array $options = [], $showLabel = true, $showField = true, $showError = true)
    {
        $options['filename'] = $this->getOption('filename', null);
        $options['id'] = $this->getOption('id', null);
        $options['delete_button'] = $this->getOption('delete_button', true);

        if ($options['filename'] != null) {
            $options['url'] = Storage::disk('public')->url('/images/'.$options['filename']);
        }

        return parent::render($options, $showLabel, $showField, $showError);
    }
}
