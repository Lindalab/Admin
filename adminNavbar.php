<?php 

	function adminNavbar($stakeholders,$event,$department,$project,$course,$grant,$logout ){
		echo '
        <header class="nav-head">
            
            <h1>AEC</h1>
        </header>
        <ul id="list">
            <a href="Stakeholder.php" class="links" id="'.$stakeholders.'">
                <li class="link">
                <i class="bx bx-user  user student" aria-hidden="true"></i>
                <span class="links_name">Stakeholders</span>
                </li>
            </a>
            <a href="Events.php" class="links" id="'.$event.'">
                <li class="link">
                <i class="bx bx-calendar"></i>
                <span class="links_name">Events</span>
                    
                </li>
            </a>
            <a href="Departments.php" class="links" id="'.$department.'">
                <li class="link">
                <i class="bx bx-building"></i>
                <span class="links_name">Departments</span>
                </li>
            </a>
            <a href="Projects.php" class="links" id="'.$project.'">
                <li class="link">
                <i class="bx bx-alarm"></i>
                <span class="links_name">Project</span>
                    
                </li>
            </a>
            <a href="Courses.php" class="links" id="'.$course.'">
                <li class="link">
                    <i class="bx bx-book"></i>
                <span class="links_name">Courses</span>
                    
                </li>
            </a>
            <a href="grant.php" class="links" id="'.$grant.'">
                <li class="link">
                    <i class="bx bx-wallet"></i>
                <span class="links_name">Grant</span>
                    
                </li>
            </a>
            
                <a href="#" class="links" id="'.$logout.'">
                    <li class="link">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                 </li>
                </a>
           
        </ul>
        '
        ;
	}
