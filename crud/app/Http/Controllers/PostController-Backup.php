<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    public function create()
    {
        $new_post = [
            'title' => 'Meu Primeiro Post',
            'content' => 'Conteúdo Qualquer',
            'author' => 'Mizael Douglas',

        ];

        //forma mais convecional de criar um registro no banco
        $post = new Post($new_post);
        $post->save();

        return $post;
    }

    public function read(Request $r)
    {
        $post = new Post();
        $post = $post->find(1);

        return $post;
    }

     public function all(Request $r)
     {
         $post = Post::all();

         return $post;
     }

     public function update(Request $r)
     {
         $posts = Post::where('id', '>', 2)->update([
             'author' => 'Desconhecido',
             'title' => 'ALGUM TITULO ALTERADO',
         ]);

         //  $post->title = 'Meu atualizado';
         //  $post->save();

         return $posts;

     }

     public function delete(Request $r)
     {

         $post = Post::where('id', '>', 0)->delete();

         return $post;

         //  $post = Post::find(3);
         //  if ($post) {
         //      // code...

         //      return $post->delete();
         //  }

         //  return 'Não existe Post com esse ID';

     }
}
