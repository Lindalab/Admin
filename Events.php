<?php
require_once("adminNavbar.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="crudStylesheet.css">
    <script src="crud.js"></script>
</head>

<body>
    <nav>
        <?php

        adminNavbar(null, null, null, null, null, null, "active");
        ?>
    </nav>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>

            <form action="..\Model\uploadevents.php" method="post">
                <input type="file" id="upload" hidden />
                <label for="upload">Choose file</label>
            </form>

        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Events</div>
                        <div class="number">
                            <?php
                            echo 8; // echo totalEvents();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="fa fa-calendar calen" aria-hidden="true"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Career Fairs</div>
                        <div class="number">
                            <?php
                            echo 8; // echo totalCareerFair();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="fa fa-briefcase case" aria-hidden="true"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Hackatons</div>
                        <div class="number">
                            <?php
                            echo 10;
                            // echo totalhackton();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="fa fa-laptop hack" aria-hidden="true"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Info Session</div>
                        <div class="number">
                            <?php
                            echo 8; // echo totalInforSession();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-down-arrow-alt down'></i>
                            <span class="text">Down From Today</span>
                        </div>
                    </div>
                    <i class="fa fa-info-circle info" aria-hidden="true"></i>
                </div>
            </div>


            <!--Put crud here-->
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Events</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" style="background-color: white; color:rgb(124, 15, 15)" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Event</span></a>
                                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>Event name</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Target group</th>
                                    <th>Event type</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                // displayEvents();
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div id="addEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="../Control/eventProcessing.php" method="post">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Event</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <p>Department Name</p>
                                    <select name="depart_id" class="form-control" required>
                                        <?php
                                        // displaySelectDepartment();
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Event Name</label>
                                    <input type="text" class="form-control" name="evname" required>
                                </div>

                                <div class="form-group">
                                    <label>Start date</label>
                                    <input type="date" class="form-control" name="evsdate" required>
                                </div>
                                <div class="form-group">
                                    <label>End date</label>
                                    <input type="date" class="form-control" name="evndate" required>
                                </div>

                                <div class="form-group">
                                    <label>Event target group</label>
                                    <select name="event_target_group" id="cars">
                                        <option value="Students">Students</option>
                                        <option value="Alumni">Alumni</option>
                                        <option value="Clubs">Clubs</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Event type</label>
                                    <select name="event_type" id="cars">
                                        <option value="Information Session">Information Session</option>
                                        <option value="Hackathon">Hackathon</option>
                                        <option value="Competition">Competition</option>
                                        <option value="Career Fair">Career Fair</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Event Description</label>
                                    <textarea class="form-control" id="w3review" name="evdescription" rows="4" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btnAdd btn-success" name="submit" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit Modal HTML -->
            <div id="editEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Event</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Event name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Start date</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>End date</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Number of Atendees</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Event type</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Event Description</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btnAdd btn-success" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal HTML -->
            <div id="deleteEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Event</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete these Records?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>



    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>