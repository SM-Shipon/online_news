<?php
include("header.php");


?> 

    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">

            <section class="content-header">
                <h1>
                    User Dashboard
                </h1>
            </section>

            <!-- Main content -->
            <section class="content"

            <div class="box box-default">

                <div class="box box-primary">
                    <h3 class="box-title">Search Complaint</h3>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter text to search complaint">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <?php
                        if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
                            echo '<div class="form-group has-error">';
                            echo '<span class="help-block">';
                            foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
                                echo '<li>', $msg, '</li>';
                            }
                            echo '</span>';
                            echo '</div>';
                            unset($_SESSION['ERRMSG_ARR']);
                        }
                        ?>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>


                <div class="row">
                    <?php
                    if (isset($_POST["Go"])) {
                        $res = mysqli_query($bd, "SELECT * from complain WHERE name='$_POST[name]'");
                        $rowCount = mysqli_num_rows($res);
                        if ($rowCount > 0) {

                            echo "<table border=1>";
                            echo "<tr>";

                            echo "<th>";
                            echo "p_station";
                            echo "</th>";
                            echo "<th>";
                            echo "p_name";
                            echo "</th>";
                            echo "<th>";
                            echo "c_type";
                            echo "</th>";
                            echo "<th>";
                            echo "c_discription";
                            echo "</th>";
                            echo "<th>";
                            echo "c_location";
                            echo "</th>";
                            echo "<th>";
                            echo "c_timing";
                            echo "</th>";
                            echo "<th>";
                            echo "c_support";
                            echo "</th>";
                            echo "<th>";
                            echo "date_of_incident";
                            echo "</th>";
                            echo "<th>";
                            echo "evidence";
                            echo "</th>";
                            echo "<th>";
                            echo "witness";
                            echo "</th>";

                            echo "</tr>";

                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";

                                echo "<td>";
                                echo $row["p_station"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["p_name"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["c_type"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["c_discription"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["c_location"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["c_timing"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["c_support"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["date_of_incident"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["evidence"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["witness"];
                                echo "</td>";

                                echo "</tr>";

                            }
                            echo "</table>";

                        } else { ?>

                            <div style="color: red; margin-left: 400px; margin-top: 25px; font"><h4> No Result!</h4></div>
                        <?php }
                    }

                    ?>
                    <div class="logo">
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>


            </div>


            </section>
            <!-- /.content -->

        </div>
        <!-- /.container -->
    </div>
 <?php
include("footer.php");


?> 