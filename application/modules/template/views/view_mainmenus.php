<?php
/* echo '<pre>';
	//var_dump($webpages);
echo '</pre>';
foreach ($webpages as $page) {
	echo '<pre>';
		echo $page['pagetitle'];
		echo $page['pageid'];
		echo $page['pageroute'];
	echo '</pre>';
} */
?>
<?php
	/* echo '<ul class="sf-menu mainMenu">';
		foreach ($webpages as $page) {
			echo '<li><a href="'.$page["pageroute"].'">'.$page["pagetitle"].'</a>';
				echo '<div class="mobnav-subarrow"></div>';
				echo '<ul>';
					foreach($childs as $child) {
						echo '<li><a href="'.$page["pageroute"].'">'.$page["pagetitle"].'</a></li>';
					}
				echo '</ul>';
			echo '</li>';
			
		}
	echo '</ul>'; */
?>
<ul class="sf-menu mainMenu">
    <li><a href="<?php echo base_url(); ?>">প্রচ্ছদ</a></li>
    <li><a href="#">প্রতিষ্ঠান সম্পর্কিত</a>

        <div class="mobnav-subarrow"></div>
        <ul>
			<li><a href="<?php echo base_url(); ?>page/history">ইতিহাস</a></li> 
            <li><a href="<?php echo base_url(); ?>page/Infrastructure">ভৌত অবকাঠামো</a></li>
			<li><a href="<?php echo base_url(); ?>academiccouncill">পরিচালনা পর্ষদ</a></li>
            <li><a href="<?php echo base_url(); ?>page/rules">প্রতিষ্ঠানের নিয়ম শৃঙ্খলা</a></li>
            <li><a href="<?php echo base_url(); ?>page/masterplan">মাস্টারপ্ল্যান</a></li>
			<li><a href="<?php echo base_url(); ?>page/vacancy">শুন্যপদের তথ্য</a></li>
            <li><a href="<?php echo base_url(); ?>page/workingmanpower">কর্মরত জনবল</a></li>
            <li><a href="<?php echo base_url(); ?>page/teachersandstaffvacancy">শিক্ষক ও কর্মচারীদের সৃষ্টপদ </a></li>
        </ul>
    </li>
    <li><a href="<?php echo base_url(); ?>page/About-Us">আমাদের কথা</a>

        <div class="mobnav-subarrow"></div>
        <ul>
            <li><a href="<?php echo base_url(); ?>page/messageofheadteacher">প্রধান শিক্ষকের বানী</a></li>
			<li><a href="<?php echo base_url(); ?>headteacher">সাবেক প্রধান শিক্ষকের তালিকা</a></li>
            <li><a href="<?php echo base_url(); ?>talentstudent">কৃতি শিক্ষার্থীদের তালিকা</a></li> 
        </ul>
    </li>
    <li><a href="#">অফিস</a>

        <div class="mobnav-subarrow"></div>
        <ul>
            <li><a href="<?php echo base_url(); ?>page/academiccalendar">একাডেমিক  ক্যালেন্ডার</a></li>
			<li><a href="<?php echo base_url(); ?>page/holidays">ছুটির তালিকা</a></li>
			<li><a href="<?php echo base_url(); ?>syllabus">পাঠ্যতালিকা</a></li>
			<li><a href="<?php echo base_url(); ?>student">ছাত্র ছাত্রীদের তালিকা </a></li>
			<li><a href="<?php echo base_url(); ?>xstudent">প্রাক্তন  ছাত্র ছাত্রীদের তালিকা </a></li>
			<li><a href="<?php echo base_url(); ?>teacher">শিক্ষকদের তালিকা </a></li>
			<li><a href="<?php echo base_url(); ?>xteacher">প্রাক্তন  শিক্ষকদের তালিকা </a></li>
			<li><a href="<?php echo base_url(); ?>staff">অন্যান্য কর্মচারীদের  তালিকা </a></li>
			<li><a href="<?php echo base_url(); ?>xstaff">প্রাক্তন কর্মচারীদের  তালিকা </a></li>
		
        </ul>
    </li>
    <li><a href="<?php echo base_url(); ?>notice">নোটিশ বোর্ড</a></li>
    <li><a href="<?php echo base_url(); ?>latestnews">খবর</a></li>

    <li><a href="#">অন্যান্য</a>

        <div class="mobnav-subarrow"></div>
        <ul>
            <li><a href="<?php echo base_url(); ?>page/playground">খেলার মাঠ</a></li>
            <li><a href="<?php echo base_url(); ?>page/multimedia-classroom">মাল্টিমিডিয়া ক্লাসরুম</a></li>
            <li><a href="<?php echo base_url(); ?>page/ICT-Lab">আইসিটি ল্যাব</a></li>
            <li><a href="<?php echo base_url(); ?>page/mosque">মসজিদ</a></li>
        </ul>
    </li>
    <li><a href="#">ফলাফল</a></li>
	<li><a href="<?php echo base_url(); ?>gallery">গ্যালারী</a></li>
	<li><a href="<?php echo base_url(); ?>contact">যোগাযোগ</a></li>
	<li><a href="<?php echo base_url(); ?>onlineadmission">অনলাইন ভর্তি</a></li>
</ul>