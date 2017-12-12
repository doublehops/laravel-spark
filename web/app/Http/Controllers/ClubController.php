<?php

namespace App\Http\Controllers;

use App\Club;
use Achillesp\CrudForms\CrudForms;

class ClubController extends Controller
{
    use CrudForms;

    public function __construct(Club $club)
    {
        $this->model = $club;

        // $this->bladeLayout = 'layouts.app'; // DEFINE DIFFERENT LAYOUT HERE

        $this->formFields = $this->getFormFields();
        $this->indexFields = $this->getIndexFields();

        $this->validationRules = [
            'name' => 'required',
            'state' => 'required',
        ];

        $this->validationMessages = [
            'name.required' => 'Name is required',
            'state.required' => 'State is required',
        ];

        $this->validationAttributes = [
            'name' => 'Name',
            'state' => 'State',
        ];
    }

    protected function getIndexFields()
    {
        return [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text'],
            ['name' => 'state', 'label' => 'Name', 'type' => 'text'],
        ];
    }

    protected function getFormFields()
    {
        return [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text'],
            ['name' => 'state', 'label' => 'State', 'type' => 'text'],
        ];
    }
}
