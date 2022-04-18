<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Comments extends Component
{
    public int $postId;
    public $users;
    public $user_id = 1;
    public $comment;
    public $comments;
    public function render(): Factory|View|Application
    {
        $post = Post::find($this->postId);
        $this->comments = $post->comments;
        return view('livewire.comments')->with(['post'=>$post, 'comments' => $this->comments]);
    }
    public function addComment() {
        $post = Post::find($this->postId);
        $post->comments()->create([
            'comment'=>$this->comment,
            'user_id' => $this->user_id,
        ]);
        $this->render();
        $this->comment = '';
        $this->user_id='';
    }
    public function hide(Comment $comment) {
        $comment->delete();
        $this->render();
    }
    public function restore($commentId) {
        Comment::withTrashed()->find($commentId)->restore();
        $this->render();
    }
}
