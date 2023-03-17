<?php

namespace App\Http\Controllers;

use App\Models\CommentsModel;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function getComments() {
        $comments = CommentsModel::orderBy('created_at', 'desc')->get();

        return [
            'comments' => $comments
        ];
    }

    public function createComment(Request $request) {
        $form = $request->validate([
            'nume' => 'required',
            'comentariu' => 'required',
        ]);

        CommentsModel::create($form);
        return [
            
        ];
    }
}
