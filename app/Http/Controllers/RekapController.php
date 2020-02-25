<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class RekapController extends Controller
{
    public function index(Question $question)
    {
        // Query menghitung data pertanyaan WR I
        $id_wr1 = 'wr1';
        $question_wr1 = Question::where(function ($query) use($id_wr1){
            $query->where('id_wr','=',$id_wr1)
                    ->WhereNotNull('keterangan');
        })->get();
        $questionwr1 = Question::where(function($query) use ($id_wr1){
            $query->where('id_wr','=',$id_wr1);
        });
        $td_wr1 = $question_wr1->count();
        $tq_wr1 = $questionwr1->count();

        // Query menghitung data pertanyaan WR II
        $id_wr2 = 'wr2';
        $question_wr2 = Question::where(function ($query) use($id_wr2){
            $query->where('id_wr','=',$id_wr2)
                    ->WhereNotNull('keterangan');
        })->get();
        $questionwr2 = Question::where(function($query) use ($id_wr2){
            $query->where('id_wr','=',$id_wr2);
        });
        $td_wr2 = $question_wr2->count();
        $tq_wr2 = $questionwr2->count();
        
        // Query menghitung data pertanyaan WR III
        $id_wr3 = 'wr3';
        $question_wr3 = Question::where(function ($query) use($id_wr3){
            $query->where('id_wr','=',$id_wr3)
                    ->WhereNotNull('keterangan');
        })->get();
        $questionwr3 = Question::where(function($query) use ($id_wr3){
            $query->where('id_wr','=',$id_wr3);
        });
        $td_wr3 = $question_wr3->count();
        $tq_wr3 = $questionwr3->count();

        // Query menghitung data pertanyaan WR IV
        $id_wr4 = 'wr4';
        $question_wr4 = Question::where(function ($query) use($id_wr4){
            $query->where('id_wr','=',$id_wr4)
                    ->WhereNotNull('keterangan');
        })->get();
        $questionwr4 = Question::where(function($query) use ($id_wr4){
            $query->where('id_wr','=',$id_wr4);
        });
        $td_wr4 = $question_wr4->count();
        $tq_wr4 = $questionwr4->count();

        $tot_dokumen = Question::count('dokumen');
        $tot_gambar = Question::count('avatar');
        $tot_keterangan = Question::count('keterangan');


        // Rekap Data menyimpan variabel kedalam array
        $rekap = array(
            'td_wr1'=>$td_wr1,
            'tq_wr1'=>$tq_wr1,
            'td_wr2'=>$td_wr2,
            'tq_wr2'=>$tq_wr2,
            'td_wr3'=>$td_wr3,
            'tq_wr3'=>$tq_wr3,
            'td_wr4'=>$td_wr4,
            'tq_wr4'=>$tq_wr4,
            'tot_dokumen'=>$tot_dokumen,
            'tot_gambar'=>$tot_gambar,
            'tot_keterangan'=>$tot_keterangan
        );
        return view('rekap.index',$rekap);
    }
}
