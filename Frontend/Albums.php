<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUSIQUE Music | Albums</title>
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<style type="text/css">
#sub{monospace; }
#sub:hover,#can:hover{
	color:#fff;
	-moz-box-shadow:0px 0px 5px #B0B0B0;
	-webkit-box-shadow:0px 0px 5px #B0B0B0;
	-khtml-box-shadow:0px 0px 5px #B0B0B0;
	border:1.5em medium #B0B0B0;}
.info:hover{
	transform : scale(1.1);
}


</style>

<script type="text/javascript">
function validate(){
	var searchdata = document.forms["search"]["search"].value;

	if(searchdata =="" || searchdata==null){
		alert("Enter album name!");
		return false;
	}
}
</script>
</head>

<body>
	<nav style="background-color: #232931;
    color: #fff;" class="navbar navbar-expand-lg navbar-light menu">
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a  style="font-size: 1.25rem; color:#f4f3f3;"class="nav-link" href="#" style="color: #f4f3f3;" >MUSIQUE</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="../index.php" style="color: #f4f3f3;" >HOME </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Albums.php"style="color: #f4f3f3;">ALBUMS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Licensing.php" style="color: #f4f3f3;">LICENSING</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Songs.php" style="color: #f4f3f3;" >VOTE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="AboutUs.php" style="color: #f4f3f3;">ABOUT US</a>
				</li>
			</ul>
		</div>
	</nav>

<nav class="menu_under navbar navbar-light bg-light">
  <form class="form-inline">
		<div class="login">
						<?php
			$today = date('F j, Y');
			echo '&nbsp;Today is '.$today;
			?>
							&nbsp;&nbsp;&nbsp;<a class=" nav-item btn btn-sm btn-outline-secondary" href="../Frontend/FeedbackForm.php" id="fback">Submit Feedback</a>

							<a class="nav-item btn btn-sm btn-outline-secondary adminbtn" href="../loginpage.php">Admin Login</a>
					<!-- <ul>
							<li><a class="nav-item btn btn-sm btn-outline-secondary" href="loginpage.php">Admin Login</a></li>
					</ul> -->
		</div>
  </form>
</nav>

<div style="" class="container_wrapper"><!--Start Container for the web content-->
    <div style="background-color: #f4bc1c;padding-right: 20px;" class=" list-group sidebar_menu"><!--Sidebar-->
    	<h3 style="margin-left: 40px;  margin-top: 40px; margin-bottom: 30px;"class="header_1">MUSIQUE Music</h3>
            <ul style="column-count:1;">
                <?php
                require_once('../Administrator/PHP/connect.php');
                $getCat= mysqli_query($connect,"SELECT id,catname FROM tblcategory");
                while($rowCat = mysqli_fetch_array($getCat)){
                ?>
                <li style="list-style-type: none;" >
                <a class="list-group-item list-group-item-action"href="AlbumByCategory.php?id=<?php echo $rowCat['id']?>"><img src="https://i.pinimg.com/originals/2c/f7/9e/2cf79e6342a9518deb7c36dc148da643.jpg" height="8"  width="8"/>&nbsp;<?php echo $rowCat['catname']?></a>
                </li>
                <?php } ?>
            </ul>
    </div><!--End Sidebar-->
		<div style="margin-left: 40px;"class="search_box"><!--Start search box container-->
				<form name="search" id="search" method="post" action="Search.php" onsubmit="return validate()">
						<table>
								<tr>
										<td><h3>CATEGORY</h3></td>
										<td>
												<select style="margin-left: 30px;
																			 margin-top: 30px;
																			 margin-right: 30px;
																			 margin-bottom: 30px;
																			 padding-top: 2px;
																			 padding-bottom: 2px;
																			 padding-right: 2px;
																			 padding-left: 2px;" name="category">
													<option value="SELECT" selected="selected"> SELECT CATEGORY </option>
													<?php
						$getCat= mysqli_query($connect,"SELECT id,catname FROM tblcategory");
						while($rowCat = mysqli_fetch_array($getCat)){
						?>
														<option value="<?php echo $rowCat['id']?>"><?php echo $rowCat['catname']?></option>
													<?php } ?>
													</select>
											</td>
											<td>
												<input type="text" id="search" name="search" placeholder="Enter Album Name" size="39"/>
											</td>
											<td>
												<input style="font-family:Montserrat;margin-left: 10px;"class="btn btn-warning " type="submit" value="Search" id="sub"/>
									</td>
									</tr>
							</table>
					</form>
		</div><!--End search box container-->
    <div style=" padding-top: 10px; color: #fff;background-color: #232931;"class="col2"><!--Start second column-->

     	<div style="margin-left: 40px;" id="header_title"><h3>Album List</h3></div>
  <?php
		error_reporting(E_ERROR);
		$line = 0;
		$page = 'Albums.php';
		$dataperpage = mysqli_query($connect,"SELECT * FROM tblalbum");
		$numpage = mysqli_num_rows($dataperpage);
		$start = $_GET['start'];
		$eu = $start - 0;
		$limit = 10;
		$thisp= $eu + $limit;
		$back = $eu - $limit;
		$next = $eu + $limit;
		if(strlen($start) > 0 && !is_numeric($start)){
			echo 'Data Error';
		exit();
		}
        $getAlbum = mysqli_query($connect,"SELECT * FROM tblalbum ORDER BY id LIMIT $eu,$limit");
        while($rowAlbum = mysqli_fetch_array($getAlbum)){
       	?>
     		<div style="margin-left: 40px;margin-top: 30px;margin-bottom: 20px;"class="content_holder">
					<ul style="column-count:3">
	      <!--Start content holder for the album-->
            	<div class="info">
                	<?php echo "<img  src=../Administrator/PHP/upload_images/album/$rowAlbum[albumimage] height=70 width=70/>"; ?>
                	<div class="info1">
                    	<?php
						$album = strtoupper($rowAlbum['albumname']);
						echo '<table cellpadding=0 cellspacing=0>';
							echo '<tr>';
								echo '<td><label id=album>Album:</label></td>';
								echo "<td><a style='color:#fff;' href='ViewSongs.php?id=".$rowAlbum['id']."' id=link>".$album."</td>";
							echo '</tr>';
							echo '<tr>';
								echo '<td><label id=a1>Singer:</label></td>';
								echo '<td><label id=a2>'.$rowAlbum['albumsinger'].'</label></td>';
							echo '</tr>';
							echo '<tr>';
								echo '<td><label id=a1>Writer:</label></td>';
								echo '<td><label id=a2>'.$rowAlbum['albumwriter'].'</label></td>';
							echo '</tr>';
						echo '</table>';
						?>
                    </div>
                </div>
							</ul>
            </div><!--End content holder for the album-->
        <?php
			} //End row album
			//////////////////
			//
			//Start Pagination
			if($numpage>$limit){
				echo "<table align=center><tr><td align=left>";
					if($back>=0){
						echo "<a href=$page?start=$back class='btn btn-warning'>PREV</a>";
					}
						echo "</td><td align=center width=200>";
							$l = 1;
								for($i = 0; $i < $numpage;$i = $i + $limit){
									if($i<>$eu){
										echo "<a href=$page?start=$i><font style='margin:10px;'class='btn btn-warning' color=red >$l</font></a>";
									}else{
										echo "<font style='margin:10px;' class='btn btn-warning' color=red >$l</font>";
									}
										$l = $l + 1;
									}
						echo "</td><td align=right>";
							if($thisp<$numpage){
								echo "<a  href=$page?start=$next class='btn btn-warning'>NEXT</a>";
							}
				echo "</td></tr></table>";
			}
		?>
    </div>
		<div>


		</div>
		<!--End second column-->
</div><!--End Container-->
</body>
</html>
