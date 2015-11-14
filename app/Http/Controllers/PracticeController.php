<?php
namespace Foobooks\Http\Controllers;
use Foobooks\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeController extends Controller {

   function getExample8() {
        $book = \Foobooks\Book::with('author')->first();
        echo $book->title.' was written by '.$book->author->first_name.' '.$book->author->last_name;
    }
    
    function getExample7() {
        $author = new \Foobooks\Author;
        $author->first_name = 'J.K';
        $author->last_name = 'Rowling';
        $author->bio_url = 'https://en.wikipedia.org/wiki/J._K._Rowling';
        $author->birth_year = '1965';
        $author->save();
        dump($author->toArray());
        $book = new \Foobooks\Book;
        $book->title = "Harry Potter and the Philosopher's Stone";
        $book->published = 1997;
        $book->cover = 'http://prodimage.images-bn.com/pimages/9781582348254_p0_v1_s118x184.jpg';
        $book->purchase_link = 'http://www.barnesandnoble.com/w/harrius-potter-et-philosophi-lapis-j-k-rowling/1102662272?ean=9781582348254';
        $book->author()->associate($author); # <--- Associate the author with this book
        //$book->author_id = $author->id;
        $book->save();
        dump($book->toArray());
        return 'Added new book.';
    }

    function getExample6() {
        // Query Responsibility
        $books = \Foobooks\Book::orderBy('id','DESC')->get();
        $first = $books->first();
        $last  = $books->last();
        //$first = \App\Book::orderBy('id','ASC')->first();
        //$last = \App\Book::orderBy('id','DESC')->first();
        dump($books);
        dump($first);
        dump($last);
    }


    function getExample7() {
        $book = new \Foobooks\Book();
        $results = $book->where('published', '<', 1950)->first();
        echo $results->title;
    }
    function getExample6() {
        $book = new \Foobooks\Book();
        $book_to_update = $book->find(1);
        $book_to_update->title = 'Green Eggs and Ham';
        $book_to_update->save();
    }
    function getExample5() {
        $book = new \Foobooks\Book();
        $harry_potter = $book->find(8);
        $harry_potter->delete();
    }
    function getExample4() {
        $book = new \Foobooks\Book();
        $book->title = 'Harry Potter';
        $book->author = 'J.k Rowling';
        $book->save();
        return 'Example 4';
    }
    function getExample3() {
        $books = new \Foobooks\Book();
        $all_books = $books->all();
        foreach($all_books as $book) {
            echo $book->title.'<br>';
        }
        return 'Example 3';
    }
    function getExample2() {
        // Equivalent to: SELECT * FROM books
        $books = \DB::table('books')->get();
        foreach($books as $book) {
            echo $book->title.'<br>';
        }
        return 'Example 2';
    }
    function getExample1() {
        \DB::table('books')->insert([
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'published' => 1925,
            'cover' => 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG',
            'purchase_link' => 'http://www.barnesandnoble.com/w/the-great-gatsby-francis-scott-fitzgerald/1116668135?ean=9780743273565',
        ]);
        return 'Example 1';
    }
}