	
	<?php
// Assuming you have a way to get the current page URL, you can use PHP to determine the active page.
$currentPage = basename($_SERVER['PHP_SELF']);
echo "";
// Gets the name of the current PHP file
?>
    
    <header class="fixed">
		<div class="container" style="background: blue;">
			<div class="header_top">
				<div class="left">
					<a href="index.php" class="logo"><img src="images/logo_header.png" alt="SITS PHARMA Institute of Allied health Sciences" style="max-width: 43%;"></a>
				</div>
				<div class="right" style="display:flex; align-items:center;">
				<a href="index.php" class="logo"><img src="images/logo_header2.png" alt="SITS PHARMA Institute of Allied health Sciences" style="max-width: 43%;"></a>
				<div class="menuIcon">
							  <div class="bar1"></div>
							  <div class="bar2"></div>
							  <div class="bar3"></div>
							
							</div>
				</div>
			</div>
		</div>
		<div class="menuIcon">
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div>
		<div class="menu">
			<div class="container">
				<ul class="parent">

				
					<li><a class="<?php echo $currentPage ==='index.php'?'active':'';?>" href="index.php">Home</a></li>
					<li class="has-sub"><a class="<?php echo $currentPage ==='about-us.php'?'active':'';?>" href="about-us.php">About Us</a>
					<ul>
							<li><a href="about-us.php#tab4">Vision & Mission</a></li>
							<li><a href="about-us.php#tab2">Silent Features</a></li>
							<li><a href="about-us.php#tab5_1">Chairman's Message</a></li>
							<li><a href="about-us.php#tab5_2">Director's Message</a></li>
							<li><a href="about-us.php#tab5">Principal's Message</a></li>
							<li><a href="about-us.php#tab0">Committees</a></li>
							<li><a href="about-us.php#tab3">Governing Body</a></li>

						</ul>
				
				</li>
					<li class="has-sub"><a href="#" class="<?php echo ($currentPage ==='peo-po.php' || $currentPage ==='departments.php'|| $currentPage ==='mou-s.php'|| $currentPage ==='peo-po.php'|| $currentPage ==='training.php') ?'active':'';?>">Academics</a>
						<ul>
							<li><a href="peo-po.php#tab0">Academic Regulations</a></li>
							<li><a href="peo-po.php#tab1">Academic Calendar</a></li>
							<li><a href="peo-po.php#tab2">Academic Syllabus</a></li>
							<li><a href="peo-po.php#tab3">Exam Time Table</a></li>
							<li><a href="peo-po.php#tab4">Awards</a></li>
						</ul>
					</li>
					<li class="has-sub"><a class="<?php echo $currentPage ==='admission.php'?'active':'';?>" href="admission.php">Admission</a>
					<ul>
							<li><a href="admission.php#tab0">Programmes Offered</a></li>
							<li><a href="admission.php#tab1">Rules and Regulations</a></li>
							<li><a href="admission.php#tab2">Admission Procedure</a></li>
							<li><a href="admission.php#tab3">Admission Request</a></li>
						</ul>
				
				</li>
					<li class="has-sub"><a class="<?php echo $currentPage ==='infrastructure.php'?'active':'';?>" href="infrastructure.php">Infrastructure</a>
					<ul>
							<li><a href="infrastructure.php#tab0">Laboratories</a></li>
							<li><a href="infrastructure.php#tab6">Transport</a></li>
							<li><a href="infrastructure.php#tab1">Canteen</a></li>
							<li><a href="infrastructure.php#tab2">Sports</a></li>
						</ul>
				</li>
					
					<li class="has-sub"><a class="<?php echo $currentPage ==='placement.php'?'active':'';?>" href="placement.php">Placement</a>
					<ul>
							<li><a href="placement.php#tab0">Our RECRUITERS</a></li>
							<li><a href="placement.php#tab6">Training and Placement</a></li>
							<li><a href="placement.php#tab1">Placement Records</a></li>
							
						</ul>
				</li>
					<li><a class="<?php echo $currentPage ==='faculty.php'?'active':'';?>" href="faculty.php">Faculty</a></li>
					<li class="has-sub"><a class="<?php echo $currentPage ==='alumni.php'?'active':'';?>" href="alumni.php">Alumni</a>
					<ul>
							<li><a href="alumni.php#tab0">Alumni Registration</a></li>
							<li><a href="alumni.php#tab1">Alumni Association Members</a></li>
							
						</ul>
				</li>
					<li><a class="<?php echo $currentPage ==='contact.php'?'active':'';?>" href="contact.php">Contact Us</a></li>
					
					
					<li><a class="<?php echo $currentPage ==='pci.php'?'active':'';?>" href="pci.php">PCI</a></li>
					
					<li><a class="" href="https://www.vmedulife.com/institute/e-grievance/home/sip-hyderabad">E-Grievance Portal</a></li>
					
					
			</ul>
			</div>
		</div>
	</header>

    <script>
        // Output the current page to the console
        console.log("Current Page:", "<?php echo $currentPage; ?>");

		
    </script>