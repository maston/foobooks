<?php


namespace Foobooks\Http\Controllers;
use Foobooks\Http\Controllers\Controller;
class BookController extends Controller {

	public function __construct() {

	}

	// Responds to requests for GET /books

	public function getIndex() {
	   $listData = array();
        array_push($listData,'Harry Potter');
        array_push($listData,'Charlie and the Chocolate Factory');
        array_push($listData,'Cat in the Hat');
        array_push($listData,'Great Expectations');
        array_push($listData,'The Fault of Our Stars');

        return View('books.index')
            ->with('listData', $listData);
	}

	// Responds to requests for GET /books/show/{id}
	public function getShow($title=null) {
		// return 'Show book: '.$title;
        return view('books.show')->with('title', $title);
	}

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
	    // $view  = '<form method="POST">';
	    // $view .= csrf_field(); # This will be explained more later
	    // $view .= 'Title: <input type="text" name="title">';
	    // $view .= '<input type="submit">';
	    // $view .= '</form>';
	    // return $view;
        return view('books.create');
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return 'Process adding new book'.$_POST['title'];
    }

    /**
     * Responds to requests to GET /books/edit/{id}
     */
    public function getEdit($id) {
        return 'Form to edit book '.$id ;
    }

    /**
     * Responds to requests to POST /books/edit/{id}
     */
    public function postEdit($id) {
        return 'Process to edit book '.$id ;
    }

    /**
     * Responds to requests to POST /books/delete
     */
    public function postDelete($id) {
        return 'Process to delete book '.$id ;
    }
}