 <?php
  include '../../configasalam.php'; 
  require_once "../../excel/vendor/autoload.php";
   
  use PhpOffice\PhpSpreadsheet\Helper\Sample;
  use PhpOffice\PhpSpreadsheet\IOFactory;
  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  $i = 2;
  $objPHPExcel = new Spreadsheet();
  session_start();
  $tglawal=$_SESSION['tgalawal'];
  $tglakhir=$_SESSION['tgalakhir'];
  $level=$_SESSION['level'];
  if ($level=='admin' || $level=='piket') {
  $data = mysqli_query($conn,"select distinct namasiswa, kelas from absensi where tanggal between '$tglawal' and '$tglakhir' ");            
  }elseif($level=='wali'){
    $kelas=$_SESSION['kelas'];
    $data = mysqli_query($conn,"select distinct namasiswa, kelas from absensi where kelas='$kelas' and tanggal between '$tglawal' and '$tglakhir'  ");
  }elseif ($level=='siswa') {
    $namasiswaa=$_SESSION['namasiswa'];
    $kelas=$_SESSION['kelas'];
    $data = mysqli_query($conn,"select distinct namasiswa, kelas from absensi where namasiswa='$namasiswaa' and kelas='$kelas' and tanggal between '$tglawal' and '$tglakhir' ");
  }
  $objPHPExcel->createSheet(0);
  $objPHPExcel->setActiveSheetIndex(0);
  $sheet = $objPHPExcel->getActiveSheet();
  $title = "Rekap";
  $sheet->setTitle($title);
  $sheet->setCellValue('A1', 'Nama');
  $sheet->setCellValue('B1', 'Kelas');
  $sheet->setCellValue('C1', 'Sakit');
  $sheet->setCellValue('D1', 'Izin');
  $sheet->setCellValue('E1', 'Alpha');
  $sheet->setCellValue('F1', 'Hadir');
  $sheet->setCellValue('G1', 'Terlambat');           
  $sheet->setCellValue('H1', '%'); 

while($d = mysqli_fetch_array($data)){
  $nm=$d['namasiswa'];
  $kls=$d['kelas'];
  $jmlsakit=mysqli_query($conn,"select count(*) as aa from absensi where status='sakit' and namasiswa='$nm' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir' ");
  $jmlsakit = mysqli_fetch_array($jmlsakit)['aa'];
  $jmlizin=mysqli_query($conn,"select count(*) as bb from absensi where status='izin' and namasiswa='$nm' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir'");
  $jmlizin = mysqli_fetch_array($jmlizin)['bb'];
  $jmlalpha=mysqli_query($conn, "select count(*) as cc from absensi where status='alpha' and namasiswa='$nm' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir'");
  $jmlalpha = mysqli_fetch_array($jmlalpha)['cc'];
  $jmlhadir=mysqli_query($conn, "select count(*) as dd from absensi where status='hadir' and namasiswa='$nm' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir'");
  $jmlhadir = mysqli_fetch_array($jmlhadir)['dd'];
  $jmlterlambat=mysqli_query($conn, "select count(*) as ee from absensi where status='terlambat' and namasiswa='$nm' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir'");
  $jmlterlambat = mysqli_fetch_array($jmlterlambat)['ee'];
  $sumall=(int)$jmlhadir+(int)$jmlterlambat+(int)$jmlalpha+(int)$jmlizin+(int)$jmlsakit;
  $persen=((int)$jmlhadir)*100/(int)$sumall;

  $sheet->setCellValue('A'.$i , $d['namasiswa']);
  $sheet->setCellValue('B'.$i , $d['kelas']);
  $sheet->setCellValue('C'.$i , $jmlsakit);
  $sheet->setCellValue('D'.$i , $jmlizin);
  $sheet->setCellValue('E'.$i , $jmlalpha);
  $sheet->setCellValue('F'.$i , $jmlhadir);
  $sheet->setCellValue('G'.$i , $jmlterlambat);
  $sheet->setCellValue('H'.$i, $persen);

  $i++;


}
  $objPHPExcel->setActiveSheetIndex(0);

  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  $filename='Data Rekap.xlsx';
  //header('Content-Disposition: attachment;filename="rekapNilai_"'.$matprak.'"_modul"'.$mdl.'".xls"');
  header('Content-Disposition: attachment;filename="'.$filename.'"');
  header('Cache-Control: max-age=0');
  $objWriter = IOFactory::createWriter($objPHPExcel, 'Xlsx');
  ob_end_clean();
  $objWriter->save('php://output');
  exit;
?>