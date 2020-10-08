
						<!DOCTYPE html>
						<html>
						<head>
							<title></title><script src="js/jquery.js">
		</script> 
						</head>
						<body>
							<?php
							$conn=mysqli_connect("localhost","root","","timetable")or die("connection not established");
						
							$it='0830';
							$query="select * from ttables";
	
							$run=mysqli_query($conn,$query);
							while ($row=mysqli_fetch_array($run)){
		
							echo "INSERT INTO `".$row['tabletb']."` (`id`, `montype`, `monsub`, `monfac`, `monblk`, `tuetype`, `tuesub`, `tuefac`, `tueblk`, `wedtype`, `wedsub`, `wedfac`, `wedblk`, `thutype`, `thusub`, `thufac`, `thublk`, `fritype`, `frisub`, `frifac`, `friblk`) VALUES ('1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');<br>";
							echo "INSERT INTO `".$row['tabletb']."` (`id`, `montype`, `monsub`, `monfac`, `monblk`, `tuetype`, `tuesub`, `tuefac`, `tueblk`, `wedtype`, `wedsub`, `wedfac`, `wedblk`, `thutype`, `thusub`, `thufac`, `thublk`, `fritype`, `frisub`, `frifac`, `friblk`) VALUES ('2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');<br>";
							echo "INSERT INTO `".$row['tabletb']."` (`id`, `montype`, `monsub`, `monfac`, `monblk`, `tuetype`, `tuesub`, `tuefac`, `tueblk`, `wedtype`, `wedsub`, `wedfac`, `wedblk`, `thutype`, `thusub`, `thufac`, `thublk`, `fritype`, `frisub`, `frifac`, `friblk`) VALUES ('3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');<br>";
							echo "INSERT INTO `".$row['tabletb']."` (`id`, `montype`, `monsub`, `monfac`, `monblk`, `tuetype`, `tuesub`, `tuefac`, `tueblk`, `wedtype`, `wedsub`, `wedfac`, `wedblk`, `thutype`, `thusub`, `thufac`, `thublk`, `fritype`, `frisub`, `frifac`, `friblk`) VALUES ('4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');<br>";
							echo "INSERT INTO `".$row['tabletb']."` (`id`, `montype`, `monsub`, `monfac`, `monblk`, `tuetype`, `tuesub`, `tuefac`, `tueblk`, `wedtype`, `wedsub`, `wedfac`, `wedblk`, `thutype`, `thusub`, `thufac`, `thublk`, `fritype`, `frisub`, `frifac`, `friblk`) VALUES ('5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');<br>";
							echo "INSERT INTO `".$row['tabletb']."` (`id`, `montype`, `monsub`, `monfac`, `monblk`, `tuetype`, `tuesub`, `tuefac`, `tueblk`, `wedtype`, `wedsub`, `wedfac`, `wedblk`, `thutype`, `thusub`, `thufac`, `thublk`, `fritype`, `frisub`, `frifac`, `friblk`) VALUES ('6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');<br>";
							echo "INSERT INTO `".$row['tabletb']."` (`id`, `montype`, `monsub`, `monfac`, `monblk`, `tuetype`, `tuesub`, `tuefac`, `tueblk`, `wedtype`, `wedsub`, `wedfac`, `wedblk`, `thutype`, `thusub`, `thufac`, `thublk`, `fritype`, `frisub`, `frifac`, `friblk`) VALUES ('7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');<br>";
							echo "INSERT INTO `".$row['tabletb']."` (`id`, `montype`, `monsub`, `monfac`, `monblk`, `tuetype`, `tuesub`, `tuefac`, `tueblk`, `wedtype`, `wedsub`, `wedfac`, `wedblk`, `thutype`, `thusub`, `thufac`, `thublk`, `fritype`, `frisub`, `frifac`, `friblk`) VALUES ('8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');<br>";

				 			}
							?>
						</body>
						</html>
