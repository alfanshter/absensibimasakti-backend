<?php

namespace App\Http\Controllers;

use App\Models\Sib;
use App\Models\Sibkes;
use App\Models\Sibper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontSuratIjinController extends Controller
{
    public function create()
    {

        return view('job.create');
    }

    
	public function store(Request $request)
    {
        
		
		$sib = Sib::create($request->all());
		if(isset($sib->id)){
			$id = $sib->id;
			$sibper = New Sibper();
			$sibper["sib_id"] = $id;
			for($i=1;$i<=20;$i++){
				
				
				if(isset($request["peralatan".$i])){
				$sibper["peralatan".$i] = $request["peralatan".$i];
				$sibper["jumlah".$i] = $request["jumlah".$i];
				$sibper["material".$i] = $request["material".$i];
				$sibper["jumlaha".$i] = $request["jumlaha".$i];
				$sibper["keterangan".$i] = $request["keterangan".$i];
				}
				
			}
			$sibper->save();
			
			$sibper = New Sibkes();
			$sibper["sib_id"] = $id;
			for($i=1;$i<=20;$i++){
				
				
				if(isset($request["aktivitas".$i])){
				$sibper["no".$i] = $request["no".$i];
				$sibper["aktivitas".$i] = $request["aktivitas".$i];
				$sibper["potensi".$i] = $request["potensi".$i];
				$sibper["langkah".$i] = $request["langkah".$i];
				}
				
			}
			$sibper->save();
		}
		



        notify()->success('Successfully added');
        return redirect('/job-safety-analysis');
    }

	public function delete($id)
    {
        if (Auth::check()) {
            $sib = Sib::findOrFail($id);
            $sib->delete();
            notify()->success('Successfully added');

            return redirect('/job-safety-analysis');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

	
	public function excel($id)
	{
	
		$dir1 = './uploads/';

		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$sheetname = 'form';
		$reader->setLoadSheetsOnly($sheetname);
		$spreadsheet = $reader->load($dir1."template_gtk.xlsx");
		 
		//$spreadsheet = new Spreadsheet();
		 
		$sheet = $spreadsheet->getActiveSheet(); 
		   

		$sib = Sib::leftjoin('sib_perlengkapan','sib_perlengkapan.sib_id','=','sib.id')
				->leftjoin('sib_keselamatan','sib_keselamatan.sib_id','=','sib.id')
				->where('sib.id',$id)
				->first();


			$sheet->setCellValue('B6', ($sib->ruangterbatas=='1')?'x':''); 
			$sheet->setCellValue('D6', ($sib->kerjalistrik=='1')?'x':''); 
			$sheet->setCellValue('F6', ($sib->ketinggian=='1')?'x':''); 
			$sheet->setCellValue('G6', ($sib->perpipaan=='1')?'x':''); 
			$sheet->setCellValue('H6', ($sib->kerjapanas=='1')?'x':''); 
			
			$sheet->setCellValue('B8', ($sib->pekerjaan)?'Pekerjaan                         : '.$sib->pekerjaan:'Pekerjaan                         : '); 
			$sheet->setCellValue('B9', ($sib->lokasi)?'Lokasi                               : '.$sib->lokasi:'Lokasi                               : '); 
			$sheet->setCellValue('B10', ($sib->area)?'Area                                  : '.$sib->area:'Area                                  : '); 
			$sheet->setCellValue('B11', ($sib->plant)?'Plant                                 : '.$sib->plant:'Plant                                 : '); 
			$sheet->setCellValue('B12', ($sib->namapemohon)?'Nama Pemohon              : '.$sib->namapemohon:'Nama Pemohon              : '); 
			$sheet->setCellValue('B13', ($sib->perusahaanpemohon)?'Perusahaan Pemohon   : '.$sib->perusahaanpemohon:'Perusahaan Pemohon   : '); 
			$sheet->setCellValue('B14', ($sib->pengawas)?'Pengawas                        : '.$sib->pengawas:'Pengawas                        : ');
			$sheet->setCellValue('H9', ($sib->teknisi)?$sib->teknisi:'');
			$sheet->setCellValue('H10', ($sib->helper)?$sib->helper:'');
			$sheet->setCellValue('H11', ($sib->welder)?$sib->welder:'');
			
			//$sheet->insertNewRowBefore(9, 1);
			$iPerlengkapan = 0;
			$posX = 0;
			$tambahan = 0;
			for($i=1;$i<20;$i++){
				
				if(isset($sib['peralatan'.$i])){
					$iPerlengkapan++;
					$posX = 16 + $iPerlengkapan;
					
					if($iPerlengkapan>4){
						$sheet->insertNewRowBefore($posX-1, 1);
						$sheet->mergeCells('D'.($posX-1).':E'.($posX-1));
						$tambahan++;
					}
					
				}
			}
			
			$iPerlengkapan = 0;
			$posX = 0;
			for($i=1;$i<20;$i++){
				
				if(isset($sib['peralatan'.$i])){
					$iPerlengkapan++;
					$posX = 16 + $iPerlengkapan;
					
					$sheet->setCellValue('B'.$posX, $i);
					$sheet->setCellValue('C'.$posX, $sib['peralatan'.$i]?$sib['peralatan'.$i]:'');
					$sheet->setCellValue('D'.$posX, $sib['jumlah'.$i]?$sib['jumlah'.$i]:'');
					$sheet->setCellValue('F'.$posX, $sib['material'.$i]?$sib['material'.$i]:'');
					$sheet->setCellValue('G'.$posX, $sib['jumlaha'.$i]?$sib['jumlaha'.$i]:'');
					$sheet->setCellValue('H'.$posX, $sib['keterangan'.$i]?$sib['keterangan'.$i]:'');
					
				}
			}
			
			$sheet->setCellValue('E'.(22+$tambahan), ($sib->mat1=='1')?'x':''); 
			$sheet->setCellValue('E'.(23+$tambahan), ($sib->mat1=='1')?'x':''); 
			$sheet->setCellValue('H'.(22+$tambahan), ($sib->mat1=='1')?'x':''); 
			$sheet->setCellValue('H'.(23+$tambahan), ($sib->mat1=='1')?'x':''); 
			
			$iPerlengkapan = 0;
			$posX = 0;
			$tambahan2 = 0;
			for($i=1;$i<20;$i++){
				
				if(isset($sib['aktivitas'.$i])){
					$iPerlengkapan++;
					$posX = 25 + $iPerlengkapan +$tambahan;
					
					if($iPerlengkapan>3){
						$sheet->insertNewRowBefore($posX-1, 1);
						$sheet->mergeCells('C'.($posX-1).':D'.($posX-1));
						$sheet->mergeCells('E'.($posX-1).':F'.($posX-1));
						$sheet->mergeCells('G'.($posX-1).':H'.($posX-1));
						$tambahan2++;
					}
					
				}
			}
			
			$iPerlengkapan = 0;
			$posX = 0;
			for($i=1;$i<20;$i++){
				
				if(isset($sib['aktivitas'.$i])){
					$iPerlengkapan++;
					$posX = 25 + $iPerlengkapan +$tambahan;
					
					$sheet->setCellValue('B'.$posX, $i);
					$sheet->setCellValue('C'.$posX, $sib['aktivitas'.$i]?$sib['aktivitas'.$i]:'');
					$sheet->setCellValue('E'.$posX, $sib['potensi'.$i]?$sib['potensi'.$i]:'');
					$sheet->setCellValue('G'.$posX, $sib['langkah'.$i]?$sib['langkah'.$i]:'');
					
				}
			}
			
			$sheet->setCellValue('B'.(30+$tambahan+$tambahan2), ($sib->apd1=='1')?'x':''); 
			$sheet->setCellValue('B'.(31+$tambahan+$tambahan2), ($sib->apd4=='1')?'x':''); 
			$sheet->setCellValue('B'.(32+$tambahan+$tambahan2), ($sib->apd7=='1')?'x':''); 
			
			$sheet->setCellValue('D'.(30+$tambahan+$tambahan2), ($sib->apd2=='1')?'x':''); 
			$sheet->setCellValue('D'.(31+$tambahan+$tambahan2), ($sib->apd5=='1')?'x':''); 
			$sheet->setCellValue('D'.(32+$tambahan+$tambahan2), ($sib->apd8=='1')?'x':'');
			
			$sheet->setCellValue('F'.(30+$tambahan+$tambahan2), ($sib->apd3=='1')?'x':''); 
			$sheet->setCellValue('F'.(31+$tambahan+$tambahan2), ($sib->apd6=='1')?'x':''); 
			$sheet->setCellValue('F'.(32+$tambahan+$tambahan2), ($sib->apd9=='1')?'x':'');
			
			$sheet->setCellValue('H'.(34+$tambahan+$tambahan2), ($sib->check1=='Y')?'Yes':'No');
			$sheet->setCellValue('H'.(35+$tambahan+$tambahan2), ($sib->check2=='Y')?'Yes':'No');
			$sheet->setCellValue('H'.(36+$tambahan+$tambahan2), ($sib->check3=='Y')?'Yes':'No');
			$sheet->setCellValue('H'.(37+$tambahan+$tambahan2), ($sib->check4=='Y')?'Yes':'No');
			
			$sheet->setCellValue('C'.(42+$tambahan+$tambahan2), ($sib->alasan_dihentikan)?$sib->alasan_dihentikan:'');
			$sheet->setCellValue('G'.(41+$tambahan+$tambahan2), ($sib->tgl_dihentikan)?date('d/m/Y',strtotime($sib->tgl_dihentikan)):'         /              /');
			
			$sheet->setCellValue('B'.(40+$tambahan+$tambahan2), ($sib->penerima_komitmen)?'   Penerima Ijin : '.$sib->penerima_komitmen:'   Penerima Ijin : ');
			$sheet->setCellValue('G'.(40+$tambahan+$tambahan2), ($sib->tgl_komitmen)?date('d/m/Y',strtotime($sib->tgl_komitmen)):'         /              /');
			
			$sheet->setCellValue('B'.(45+$tambahan+$tambahan2), ($sib->penerima_st)?'  Penerima Ijin: '.$sib->penerima_st:'  Penerima Ijin: ');
			$sheet->setCellValue('G'.(45+$tambahan+$tambahan2), ($sib->tgl_penerima_st)?date('d/m/Y',strtotime($sib->tgl_penerima_st)):'         /              /');
			
			$sheet->setCellValue('B'.(46+$tambahan+$tambahan2), ($sib->pemberi_st)?'  Pemberi Ijin: '.$sib->pemberi_st:'  Pemberi Ijin: ');
			$sheet->setCellValue('G'.(46+$tambahan+$tambahan2), ($sib->tgl_pemberi_st)?date('d/m/Y',strtotime($sib->tgl_pemberi_st)):'         /              /');
			

		$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
		   

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode('SIB'.date('Ymd').'.xlsx').'"');
		$writer->save('php://output');
		

		
	}
	
}
