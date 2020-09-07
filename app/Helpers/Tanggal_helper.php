<?php 
function tgl_indo($date){                           
		$Bulan = array("Januari","Februari","Maret","April","Mei","Juni",
					"Juli","Agustus","September","Oktober","November","Desember");
		
		// pemisahan tahun, bulan, hari, dan waktu
		$tahun = substr($date,0,4);
		$bulan = substr($date,5,2);
		$tgl = substr($date,8,2);
		$result = " ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ";
		return $result;
	}
	function tgl_bulan($date){                           
		$Bulan = array("Januari","Februari","Maret","April","Mei","Juni",
					"Juli","Agustus","September","Oktober","November","Desember");
		
		// pemisahan tahun, bulan, hari, dan waktu
		$bulan = substr($date,5,2);
		$tgl = substr($date,8,2);
		$result = " ".$tgl." ".$Bulan[(int)$bulan-1]." ";
		return $result;
	}
	function tanggal() {
        $tanggal = Date('d');
        return $tanggal;
	}
	
?>
