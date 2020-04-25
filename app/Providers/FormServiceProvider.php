<?php

namespace App\Providers;
use Form;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //for text input only
        Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        //for textarea
        Form::component('bsTextArea', 'components.form.textArea', ['name', 'value' => null, 'attributes' => []]);
        //for submit btn
        Form::component('bsSubmit', 'components.form.submit', [ 'value' => 'Submit', 'attributes' => []]);
        //for edit & update form
        Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
    }
}
