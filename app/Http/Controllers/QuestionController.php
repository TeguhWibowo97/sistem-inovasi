<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\DB;
use File;
class QuestionController extends Controller
{
    public function index($id_wr)
    {
        //$question = Question::where('id_wr',$id_wr)->get();
        $question = Question::where(function ($query) use($id_wr){
            $query->where('id_wr','=',$id_wr);
        })->get();
        //$question = Question::find($id_wr); 
        //$question = DB::table('questions')->get();
        // dd($question->id_wr);
        return view('question.index',['question'=>$question]);
    }
    public function store(Request $request)
    {
        $question = new Question;
        $question->pertanyaan = $request->pertanyaan;
        $question->save();
        return redirect()->back();
    }
    public function edit(Question $question)
    {
        return view('question.edit',['question'=>$question]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required',
        ]);
        $question = Question::find($id);
        $question->update($request->all());
        if($request->hasFile('dokumen')){
            $question->dokumen = $request->file('dokumen')->store('documents');
            $question->save();
        }
        if( $request->hasFile('avatar')){
            $question->avatar = $request->file('avatar')->store('avatars');
            $question->save();
        }
        return redirect('/question/wr1question/wr1')->with('status','Data Berhasil Ditambahkan !');
    }
    public function wr1question($id_wr)
    {
        $question = Question::where(function ($query) use($id_wr){
            $query->where('id_wr','=',$id_wr);
        })->get();
        return view('question.wr1',['question'=>$question]);
    }
    public function wr2question($id_wr)
    {
        $question = Question::where(function ($query) use($id_wr){
            $query->where('id_wr','=',$id_wr);
        })->get();
        return view('question.wr2',['question'=>$question]);
    }
    public function wr3question($id_wr)
    {
        $question = Question::where(function ($query) use($id_wr){
            $query->where('id_wr','=',$id_wr);
        })->get();
        return view('question.wr3',['question'=>$question]);
    }
    public function wr4question($id_wr)
    {
        $question = Question::where(function ($query) use($id_wr){
            $query->where('id_wr','=',$id_wr);
        })->get();
        return view('question.wr4',['question'=>$question]);
    }
    public function hapus($id)
    {
        $question = Question::where('id',$id)->first();
        File::delete('storage/'.$question->avatar);
        File::delete('storage/'.$question->dokumen);

        Question::where('id',$id)->update([
            'avatar' => NULL,
            'dokumen' => NULL
        ]);

        return redirect()->back()->with('status','Data Berhasil Dihapus !');

    }
}
