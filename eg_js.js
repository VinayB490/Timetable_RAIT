// $(document).ready(function(){
// 	// $('#sublec').on('click',function(){
// 	// console.log('hello');
// 	// var tbsem=$('#tbsem').val();
// 	// console.log(tbsem+"\n");

// 	// });


	
// });

<!-- <script type="text/javascript">
		 $(document).ready(function(){
	 	// readypg();
	 	<?php readypage(); ?>
	 	<?php readypagerdy(); ?>
});
</script> -->

// // CREATE TABLE `timetable`.`example` ( `id` INT(8) NOT NULL , `montype` VARCHAR(10) NOT NULL , `monsub` VARCHAR(10) NOT NULL , `monfac` VARCHAR(10) NOT NULL , `monblk` VARCHAR(300) NOT NULL , `tuetype` VARCHAR(10) NOT NULL , `tuesub` VARCHAR(10) NOT NULL , `tuefac` VARCHAR(10) NOT NULL , `tueblk` VARCHAR(300) NOT NULL , `wedtype` VARCHAR(10) NOT NULL , `wedsub` VARCHAR(10) NOT NULL , `wedfac` VARCHAR(10) NOT NULL , `wedblk` VARCHAR(300) NOT NULL , `thutype` VARCHAR(10) NOT NULL , `thusub` VARCHAR(10) NOT NULL , `thufac` VARCHAR(10) NOT NULL , `thublk` VARCHAR(300) NOT NULL , `fritype` VARCHAR(10) NOT NULL , `frisub` VARCHAR(10) NOT NULL , `frifac` VARCHAR(10) NOT NULL , `friblk` VARCHAR(300) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 
<?php 
 function readypagerdy(){
	# code...

$conn=mysqli_connect("localhost",	"root","","timetable")or die("connection not established");
$tbsem = $_SESSION['tbsemtp'];
$tbclass=$_SESSION['tbclass'] ;
$tbdept=$_SESSION['tbdept'];
$tbdiv=$_SESSION['tbdiv'] ;
$tbroom=$_SESSION['tbroom'];
$tbstart=$_SESSION['tbstart'];

$tabletb=$tbdept.$tbclass.$tbdiv.$tbstart;


	?>

<?php
	 $dy= array('mon','tue','wed','thu','fri'); 
	 for($di=1;$di<9;$di++){
	$querya="select * from ".$tabletb." where id='$di';";
	$runa=mysqli_query($conn,$querya)or die('alert');
	$rowa= mysqli_fetch_assoc($runa);
		for ($dj = 0; $dj<5;$dj++) {
			// $ptypep=;

	$pptype=$rowa[$dy[$dj].'type'];
	$ppsub=$rowa[$dy[$dj].'sub'];
	$ppfac=$rowa[$dy[$dj].'fac'];
	$ppblk=$rowa[$dy[$dj].'blk'];
?>

	console.log('<?php echo $pptype." ".$ppsub." ".$ppfac." ".$ppblk." " ; ?>');
	<!-- $('#<?php echo $dy[$dj].$di; ?> #tbtype').val('<?php echo $pptype; ?>'); -->
	 <!-- sub("<?php echo $dy[$dj].$di; ?>");  -->
	
	
	$('#<?php echo $dy[$dj].$di; ?> #tbcourse option[value="<?php echo$ppsub; ?>"]').attr('selected','selected');
	 
	$('#<?php echo $dy[$dj].$di; ?> #tbtname option[value="<?php echo $ppfac; ?>"]').attr('selected','selected');

 	
	<!-- $('#<?php echo $dy[$dj].$di; ?> #tbtname').val('<?php echo $ppfac; ?>'); -->
	<!-- $('#<?php echo $dy[$dj].$di; ?> #tbdesc').val('<?php echo $ppblk; ?>'); -->


<?php	
			}
		}
}
?> 