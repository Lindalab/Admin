<?php 

	function navbar($stakeholders,$event,$department,$project,$course,$grant ){
		echo '
        <header class="nav-head">
            <!-- <img class="head-logo" src="./assets/aec-logo.png" alt="AEC logo"> -->
            <!-- <img src="" alt="Ashesi University Logo"> -->
            <h1>AEC</h1>
        </header>
        <ul id="list">
            <a href="./../D-LAB/Dlab.php" class="links" id='.$stakeholders.'>
                <li class="link">
                    <img class="nav-logo" src="./assets/dlab-icon.svg" alt="Design Lab Icon">
                    <p>Design Lab</p>
                </li>
            </a>
            <a href="./../TAC/TAC.php" class="links" id="'.$event.'">
                <li class="link">
                    <img class="nav-logo" src="./assets/tac-icon.svg" alt="Teaching Across Curriculum Icon" >
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
            <a href="./../TAC/TAC.php" class="links" id="'.$department.'">
                <li class="link">
                    <img class="nav-logo" src="./assets/tac-icon.svg" alt="Teaching Across Curriculum Icon" >
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
            <a href="./../TAC/TAC.php" class="links" id="'.$project.'">
                <li class="link">
                    <img class="nav-logo" src="./assets/tac-icon.svg" alt="Teaching Across Curriculum Icon" >
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
            <a href="./../TAC/TAC.php" class="links" id="'.$course.'">
                <li class="link">
                    <img class="nav-logo" src="./assets/tac-icon.svg" alt="Teaching Across Curriculum Icon" >
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
            <a href="./../AVI/VentureIncubator.php" class="links" id="'.$grant.'">
                <li class="link">
                    <img class="nav-logo" src="./assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
        </ul>'
        ;
	}

 ?>
