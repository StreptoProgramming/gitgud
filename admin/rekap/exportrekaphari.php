 <?php
  include '../../configasalam.php'; 
  require_once "../../excel/vendor/autoload.php";
   
  use PhpOffice\PhpSpreadsheet\Helper\Sample;
  use PhpOffice\PhpSpreadsheet\IOFactory;
  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  $i = 2;
  $objPHPExcel = new Spreadsheet();
  session_start();
  if ($level=='admin' || $level=='piket') {
  $data = mysqli_query($conn,"select distinct tanggal  from absensi ");         
  }elseif($level=='wali'){
    $kelas=$_SESSION['kelas'];
    $data = mysqli_query($conn,"select distinct tanggal from absensi  ");
  }  
  $objPHPExcel->createSheet(0);
  $objPHPExcel->setActiveSheetIndex(0);
  $sheet = $objPHPExcel->getActiveSheet();
  $title = "Rekap Hari";
  $sheet->setTitle($title);
  $sheet->setCellValue('A1', 'Tanggal');
  $sheet->setCellValue('B1', 'Sakit');
  $sheet->setCellValue('C1', 'Izin');
  $sheet->setCellValue('D1', 'Alpha');
  $sheet->setCellValue('E1', 'Hadir');
  $sheet->setCellValue('F1', 'Terlambat');     
  $sheet->setCellValue('G1', 'Total Pelanggaran');        
  $sheet->setCellValue('H1', '%'); 

while($d = mysqli_fetch_array($data)){
            $tanggal=$d['tanggal'];
            $jmlsakit=mysqli_query($conn,"select count(*) as aa from absensi where status='sakit' and tanggal='$tanggal' ");
            $jmlsakit = mysqli_fetch_array($jmlsakit)['aa'];
            $jmlizin=mysqli_query($conn,"select count(*) as bb from absensi where status='izin'  and tanggal='$tanggal'  ");
            $jmlizin = mysqli_fetch_array($jmlizin)['bb'];
            $jmlalpha=mysqli_query($conn, "select count(*) as cc from absensi where status='alpha'  and tanggal='$tanggal' ");
            $jmlalpha = mysqli_fetch_array($jmlalpha)['cc'];
            $jmlhadir=mysqli_query($conn, "select count(*) as dd from absensi where status='hadir' and tanggal='$tanggal' ");
            $jmlhadir = mysqli_fetch_array($jmlhadir)['dd'];
            $jmlterlambat=mysqli_query($conn, "select count(*) as ee from absensi where status='terlambat' and tanggal='$tanggal' ");
            $jmlterlambat = mysqli_fetch_array($jmlterlambat)['ee'];
            $sumall=(int)$jmlhadir+(int)$jmlterlambat+(int)$jmlalpha+(int)$jmlizin+(int)$jmlsakit;
            $persen=((int)$jmlhadir)*100/(int)$sumall;
            $persenlanggar=100-(int)$persen;
            $sumlanggar=(int)$jmlterlambat+(int)$jmlalpha+(int)$jmlizin+(int)$jmlsakit;

  $sheet->setCellValue('A'.$i , $d['tanggal']);
  $sheet->setCellValue('B'.$i , $jmlsakit);
  $sheet->setCellValue('C'.$i , $jmlizin);
  $sheet->setCellValue('D'.$i , $jmlalpha);
  $sheet->setCellValue('E'.$i , $jmlhadir);
  $sheet->setCellValue('F'.$i , $jmlterlambat);
  $sheet->setCellValue('G'.$i , $sumlanggar);
  $sheet->setCellValue('H'.$i,  $persenlanggar);

  $i++;


}
  $objPHPExcel->setActiveSheetIndex(0);

  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  $filename='Data Rekap Hari.xlsx';
  //header('Content-Disposition: attachment;filename="rekapNilai_"'.$matprak.'"_modul"'.$mdl.'".xls"');
  header('Content-Disposition: attachment;filename="'.$filename.'"');
  header('Cache-Control: max-age=0');
  $objWriter = IOFactory::createWriter($objPHPExcel, 'Xlsx');
  ob_end_clean();
  $objWriter->save('php://output');
  exit;
?>