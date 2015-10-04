<?php

namespace Foobooks\Http\Controllers;

use Foobooks\Http\Controllers\Controller;

class AuthorController extends Controller {

    public function __construct() {

    }

    // Responds to requests for GET /authors

    // public function getIndex() {
    //     return 'List all the authors.';
    // }

    // Responds to requests for GET /authors/show/{id}
    public function getShow($id) {
        return 'Show author: '.$id;
    }

    /**
     * Responds to requests to GET /authors/create
     */
    public function getCreate() {
        return 'Form to create a new author';
    }

    /**
     * Responds to requests to POST /authors/create
     */
    public function postCreate() {
        return 'Process adding new author';
    }

    /**
     * Responds to requests to GET /authors/edit/{id}
     */
    public function getEdit($id) {
        return 'Form to edit author '.$id ;
    }

    /**
     * Responds to requests to POST /authors/edit/{id}
     */
    public function postEdit($id) {
        return 'Process to edit author '.$id ;
    }

    /**
     * Responds to requests to POST /authors/delete
     */
    public function postDelete($id) {
        return 'Process to delete author '.$id ;
    }
}


?>