<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // The Eloquent model associated with this resource
    protected $model = Blog::class;

    // The page title
    protected $title = 'Products';

    // Define the fields for the resource
    public function fields()
    {
        return [
            'name' => [
                'type' => 'text',
                'label' => 'Product Name',
                'required' => true,
                'searchable' => true
            ],
            'price' => [
                'type' => 'number',
                'prefix' => '$',
                'required' => true
            ],
            'status' => [
                'type' => 'select',
                'options' => ['active', 'draft', 'archived']
            ],
            'description' => [
                'type' => 'richtext'
            ]
        ];
    }
}
