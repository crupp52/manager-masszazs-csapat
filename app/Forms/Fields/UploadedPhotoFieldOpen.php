<?php namespace App\Forms\Fields;

use Illuminate\Support\Facades\Storage;
use Kris\LaravelFormBuilder\Fields\FormField;

class UploadedPhotoFieldOpen extends FormField
{

    protected function getTemplate()
    {
        return 'fields.uploaded-photo-filed-open';
    }

    public function render(array $options = [], $showLabel = true, $showField = true, $showError = true)
    {
        return parent::render($options, $showLabel, $showField, $showError);
    }
}
