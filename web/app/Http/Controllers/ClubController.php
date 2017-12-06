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

        $this->formFields = $this->getFormFields();
        $this->indexFields = $this->getIndexFields();
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
