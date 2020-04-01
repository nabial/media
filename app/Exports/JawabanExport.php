<?php

namespace App\Exports;

use App\Jawaban;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class JawabanExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $jawaban = DB::table('jawaban')->select('id','user_id','score')->get();
        return $jawaban;
    }

    public function headings(): array
    {
    	return[
    		'id',
    		'email',
    		'score',
    	];
    }
}
