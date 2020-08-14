<?php namespace App\Forms\Fields;

use Kris\LaravelFormBuilder\Fields\FormField;

class CKEditorField extends FormField {

    protected function getTemplate()
    {
        return 'fields.ckeditor-field';
    }

    public function render(array $options = [], $showLabel = true, $showField = true, $showError = true)
    {
        $options['name'] = $this->getOption('name', null);

        return parent::render($options, $showLabel, $showField, $showError);
    }
}
