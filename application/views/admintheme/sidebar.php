<div class="container-fluid">
    <div class="row-fluid" id="sidebar">
        <div class="span3">
            &nbsp;
        </div>
        <div class="span9" id="content" >
            <div id="successmsg" class="alert alert-success" style="display: none;"></div>
            <div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3" id="sidebar">
            <div class="panel-group" id="accordion">
                <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse" id="accordion1">
                    <li class="active"><a href="<?php echo base_url(); ?>dashboard"><span class="glyphicon glyphicon-flash"></span>Statistics</a></li>
                    <?php if ($this->ion_auth->in_group("Admin")) { ?>
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#studentsLink"><i class="fa fa-user"></i> Students</a>

                        <ul id="studentsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewstudent"><i class="fa fa-user"></i> Add New</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewstudents"><i class="fa fa-user"></i> Current Students</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewxstudents"><i class="fa fa-user"></i> X Students</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewallstudents"><i class="fa fa-user"></i> All Students</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#teachersLink"><i class="fa fa-user"></i> Teachers</a>

                        <ul id="teachersLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewteacher"><i class="fa fa-user"></i> Add New</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewteachers"><i class="fa fa-user"></i> Current Teachers</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewxteachers"><i class="fa fa-user"></i> X Teachers</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewxheadteachers"><i class="fa fa-user"></i> X Head Teachers</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewallteachers"><i class="fa fa-user"></i> All Teachers</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#staffsLink"><i class="fa fa-user"></i> Staffs</a>

                        <ul id="staffsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewstaff"><i class="fa fa-user"></i> Add New</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewstaffs"><i class="fa fa-user"></i> Current Staffs</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewstaffs"><i class="fa fa-user"></i> X Staffs</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewstaffs"><i class="fa fa-user"></i> All Staffs</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#admissionsLink"><i class="fa fa-user"></i> Admissions</a>

                        <ul id="admissionsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewapplicant"><i class="fa fa-user"></i> New Applicants</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewapplicants"><i class="fa fa-user"></i> Current Applicants</a></li>
							<li class="divider"></li>
						</ul>
                    </li>                    
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#attendanceLink"><i class="fa fa-user"></i> Attendance</a>
                        <ul id="attendanceLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>attendance"><i class="icon-bell"></i> Absence Notifier</a></li>
                            <li><a data-parent="#accordion1" href="#attendanceLink"><i class="icon-glass"></i> Attendance Graph</a></li>
                            <li><a data-parent="#accordion1" href="#attendanceLink"><i class="icon-download"></i> Attendance Sheet</a></li>
                            <li><a data-parent="#accordion1" href="#attendanceLink"><i class="icon-download"></i> Class Wise Attendance</a></li>
							 <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewabsence"><i class="icon-download"></i> View Absence</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#results"><i class="fa fa-user"></i> Results</a>
                        <ul id="results" class="nav nav-list collapse">
							<li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>generateresults"><i class="icon-bell"></i> Generate Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addresults"><i class="icon-glass"></i> Add/Edit Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewresults"><i class="icon-glass"></i> View Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewothersresult"><i class="fa fa-user"></i> Add Others Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewothersresults"><i class="fa fa-user"></i> Others Resultss</a></li>
							<li class="divider"></li>
                        </ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#accountsLink"><i class="fa fa-user"></i> Accounts & Finance</a>

                        <ul id="accountsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewcredit"><i class="fa fa-user"></i> Add Credit</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewcredits"><i class="fa fa-user"></i> All Credits</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewdebit"><i class="fa fa-user"></i> Add Debit</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewdebits"><i class="fa fa-user"></i> All Debits</a></li>
                            <li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewfinancialdepartment"><i class="fa fa-user"></i> Add new</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewfinancialdepartments"><i class="fa fa-user"></i> Financial Department</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#libraryLink"><i class="fa fa-user"></i> Library</a>

                        <ul id="libraryLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewbook"><i class="fa fa-user"></i> Add New Book</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewbooks"><i class="fa fa-user"></i> All Books</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#photogalleryLink"><i class="fa fa-user"></i> Photo Gallery</a>

                        <ul id="photogalleryLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewphoto"><i class="fa fa-user"></i> Add Photo</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewphotos"><i class="fa fa-user"></i> View Photos</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewgallery"><i class="fa fa-user"></i> Add Gallery</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewgalleries"><i class="fa fa-user"></i> View Galleries</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#routineLink"><i class="fa fa-user"></i> Routine</a>

                        <ul id="routineLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addroutine"><i class="fa fa-user"></i> Add New</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewroutine"><i class="fa fa-user"></i> Class Wise Routine</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#newsLink"><i class="fa fa-user"></i> Latest News</a>

                        <ul id="newsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewnews"><i class="fa fa-user"></i> Add New News</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewnews"><i class="fa fa-user"></i> All News</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#departmentLink"><i class="fa fa-user"></i> Department</a>

                        <ul id="departmentLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewdepartment"><i class="fa fa-user"></i> Add New Department</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewdepartments"><i class="fa fa-user"></i> All Department</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#downloadLink"><i class="fa fa-user"></i> Download</a>

                        <ul id="downloadLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewdownload"><i class="fa fa-user"></i> Add New Download</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewdownloads"><i class="fa fa-user"></i> All Downloads</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#talentedstudentsLink"><i class="fa fa-user"></i> Talented Students</a>

                        <ul id="talentedstudentsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewtalentedstudent"><i class="fa fa-user"></i> Add Talented Students</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewtalentedstudents"><i class="fa fa-user"></i> All Talented Students</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#academiccouncillorsLink"><i class="fa fa-user"></i> Academic Councillors</a>

                        <ul id="academiccouncillorsLink" class="nav nav-list collapse">
							<li class="divider"></li>
						    <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewacademiccouncillor"><i class="fa fa-user"></i> Add Academic Councillors</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewacademiccouncillors"><i class="fa fa-user"></i> All Academic Councillors</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#syllabussLink"><i class="fa fa-user"></i> Syllabus</a>

                        <ul id="syllabussLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewsyllabus"><i class="fa fa-user"></i> Add Syllabus</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewsyllabuss"><i class="fa fa-user"></i> All Syllabus</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#othersLink"><i class="fa fa-user"></i> Notice</a>

                        <ul id="othersLink" class="nav nav-list collapse">
                            <li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewnotice"><i class="fa fa-user"></i> Add Notice</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewnotices"><i class="fa fa-user"></i> Notices</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#slideLink"><i class="fa fa-user"></i> Slideshow</a>

                        <ul id="slideLink" class="nav nav-list collapse">
							<li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewslide"><i class="fa fa-user"></i> Add New Slide</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewslides"><i class="fa fa-user"></i> All Slides</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#tcLink"><i class="fa fa-user"></i> Requests</a>

                        <ul id="tcLink" class="nav nav-list collapse">
							<li class="divider"></li>
						   <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewtc"><i class="fa fa-user"></i> Add New Request</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewtcs"><i class="fa fa-user"></i> Transfer Certificate</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewtestimonials"><i class="fa fa-user"></i> Testimonial</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprottoyans"><i class="fa fa-user"></i> Attestation</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewtotlists"><i class="fa fa-user"></i> Totlist</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprevious"><i class="fa fa-user"></i>Previous Requests</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<?php } ?>
					<?php if ($this->ion_auth->in_group("Teachers")) { ?>
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#results"><i class="fa fa-user"></i> Results</a>
                        <ul id="results" class="nav nav-list collapse">
							<li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addresults"><i class="icon-glass"></i> Add/Edit Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewresults"><i class="icon-glass"></i> View Results</a></li>
							<li class="divider"></li>
                        </ul>
                    </li>
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#attendanceLink"><i class="fa fa-user"></i> Attendance</a>
                        <ul id="attendanceLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewabsence"><i class="icon-download"></i> View Absence</a></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>attendance"><i class="icon-bell"></i> Absence Notifier</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					 
					<li class="panel"><a href="<?php echo base_url(); ?>viewroutine"><i class="fa fa-user"></i> Class Routine</a></li>
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#tcLink"><i class="fa fa-user"></i> Profile</a>

                        <ul id="tcLink" class="nav nav-list collapse">
							<li class="divider"></li>
						    <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprofile"><i class="fa fa-user"></i>View Profile</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>editprofile"><i class="fa fa-user"></i>Change Password</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<?php } ?>
					<?php if ($this->ion_auth->in_group("Students")) { ?>
					<li class="panel"><a href="#routineLink"><i class="fa fa-user"></i> Results</a></li>
					<li class="panel"><a href="<?php echo base_url(); ?>viewabsence"><i class="fa fa-user"></i> View Absence</a></li>
					<li class="panel"><a href="<?php echo base_url(); ?>viewclassroutine"><i class="fa fa-user"></i> Class Routine</a></li>
					<li class="panel"><a href="#routineLink"><i class="fa fa-user"></i> Payment Status</a></li>
					
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#tcLink"><i class="fa fa-user"></i> Profile</a>

                        <ul id="tcLink" class="nav nav-list collapse">
							<li class="divider"></li>
						    <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprofile"><i class="fa fa-user"></i> View Profile</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>editprofile"><i class="fa fa-user"></i> Change Password</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<?php } ?>
					<?php if ($this->ion_auth->in_group("Guardians")) { ?>
					<li class="panel"><a href="#routineLink"><i class="fa fa-user"></i> Results</a></li>
					<li class="panel"><a href="<?php echo base_url(); ?>viewabsence"><i class="fa fa-user"></i> View Absence</a></li>
					<li class="panel"><a href="<?php echo base_url(); ?>classroutines"><i class="fa fa-user"></i> Class Routine</a></li>
					<li class="panel"><a href="#routineLink"><i class="fa fa-user"></i> Payment Status</a></li>
					
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#tcLink"><i class="fa fa-user"></i> Profile</a>

                        <ul id="tcLink" class="nav nav-list collapse">
							<li class="divider"></li>
						    <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprofile"><i class="fa fa-user"></i> View Profile</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>editprofile"><i class="fa fa-user"></i> Change Password</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<?php } ?>

                </ul>
            </div>
        </div>
        <div class="span9" id="content">
            <div class="row-fluid">

