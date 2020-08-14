<?php namespace App\Forms\Fields;

use Illuminate\Support\Facades\Storage;
use Kris\LaravelFormBuilder\Fields\FormField;

class UploadedPhotoFieldClose extends FormField
{

    protected function getTemplate()
    {
        return 'fields.uploaded-photo-filed-close';
    }

    public function render(array $options = [], $showLabel = true, $showField = true, $showError = true)
    {
        return parent::render($options, $showLabel, $showField, $showError);
    }
}
