<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 15:27
 */

namespace App\Http\Services;


use App\Book;

class BotService
{
    private $bookService;

    /**
     * BotService constructor.
     * @param $bookService
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }


    public function knowBooks(){
        $books = $this->bookService->getAll();

        $msg = '';
        $count = $books->count();

        if($count >= 3) {
            $msg = 'Temos os livros ';
            for ($i = 0; $i < $count; $i++) {
                $book = $books[$i];

                if($i < $count - 2)
                    $msg .= '"' . $book->name_PT . '", ';
                else if($i == $count - 2)
                    $msg .= '"' . $book->name_PT . '" e ';
                else
                    $msg .= '"' . $book->name_PT . '"';
            }
            $msg .= ". Posso te passar algumas informações se você quiser, é só me falar por qual livro você se interessou mais..";
        } else if($count == 2){
            $msg = 'Deixe-me ver.. temos somente os livros "' . $books[0]->name_PT . '" e "' . $books[1]->name_PT .'", você quer saber mais sobre algum deles?';
        } else if($count == 1){
            $msg = 'No momento só temos o livro "' . $books[0]->name_PT . '"...';
        } else{
            $msg = 'No momento estamos sem livros...';
        }

        return $msg;
    }
}