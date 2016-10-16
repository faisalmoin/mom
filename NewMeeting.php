<?php require_once("Header.php");
require_once("SessionHandler.php");

?>

    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700,900&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
   

    <script src="//rawgit.com/dbrekalo/attire/master/dist/js/build.min.js"></script>

    <link rel="stylesheet" href="dist/fastselect.min.css">
    <script src="dist/fastselect.standalone.js"></script>

    <style>

        .fstElement {
            font-size: 0.60em;
        }

        .fstToggleBtn {
            min-width: 16.5em;
        }

        .submitBtn {
            display: none;
        }

        .fstMultipleMode {
            display: block;
        }

        .fstMultipleMode .fstControls {
            width: 100%;
        }


    </style>


    <script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-69265879-1', 'auto');
        ga('send', 'pageview');

    </script>


<!-------------------------------------------------------------->


<div class="container">
    <!--<form name="myForm" method="post" action="registration.php" onsubmit="return(validateForm())" onkeypress="return event.keyCode != 13;"> -->
    <form name="myForm" method="Post" action="MeetingAdd.php" onsubmit="return(validateForm());"
          onkeypress="return event.keyCode != 13;" style="background-color: #ffffff;">

        <table width="100%" align="center" border="0px" cellspacing="0px" cellpadding="5px"
               class="table table-responsive borderless" style="font-family: 'Oxygen', Arial; font-size: 18px;">
            <tr>
                <td height="100px" colspan="6" align='center' style="border-top: 0px;">

                    <p style="color: #008B8B ;font-family: 'Poiret One', 'arial'; font-size: 24px; text-transform: uppercase; font-weight: bold;">
                        Meeting Schedule</p>

                </td>
            </tr>

            <tr>
                <td>Organizer<sup style="color: #990000; font-weight: bold">*</sup></td>
                <td colspan="3"><input type="text" name="Organizer" class="form-control "/></td>
                <td></td>
                <td></td>
            </tr>

            <tr>


                <td>Attendees<sup style="color: #990000; font-weight: bold">*</sup></td>
                <td colspan="3">
                    <select class="multipleSelect" multiple name="Attendees[]">
                        <!--option value="madhu@gmail.com,madhu">madhu</option>
                        <option value="madhu2@gmail.com,madhu2">mayuresh</option>
                        <option value="madhusmita@gmail.com">madhusmita</option>
                        <option value="anju@gmail.com">anju</option>
                        <option value="babni@gmail.com">babni</option-->
                        <?php
                              $r="SELECT * FROM employee ORDER BY EmployeeName";
                              $result =  mysqli_query($conn, $r);

                              while ($row = mysqli_fetch_array($result)) {
                              echo "<option value='".$row['EmployeeEmail']."'>" . $row['EmployeeName'] . "</option>";

                              }
                          ?>
                    </select>



                </td>

                <td></td>
                <td></td>
            </tr>
            <tr>

                <td>Subject<sup style="color: #990000; font-weight: bold">*</sup></td>
                <td colspan="3"><input type="text" name="Subject" class="form-control"/></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Location<sup style="color: #990000; font-weight: bold">*</sup></td>
                <td colspan="3"><input type="text" name="Location" class="form-control"/></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Date<sup style="color: #990000; font-weight: bold">*</sup></td>
                <td colspan="3"><input type="text" id="datepicker" name="meetingdate" class="form-control"/></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td>Start Time<sup style="color: #990000; font-weight: bold">*</sup></td>
                <td colspan="3"><input type="text" id="datepicker" name="StartTime" class="form-control"/></td>
                <td>End Time<sup style="color: #990000; font-weight: bold">*</sup></td>
                <td><input type="text" name="EndTime" class="form-control"/></td>
            </tr>


            <tr>
                <td>Agenda</td>
                <td colspan="3"><textarea class="form-control" name="Agenda" width="500px">Agenda</textarea></td>
            </tr>

        </table>

        <p align="justify">

            <input type="submit" class='btn btn-primary' id='Review' value='Submit'>
        </p>
    </form>
</div>



<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">


    $(function () {

        $('.multipleSelect').fastselect();

        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });


        /*

        var selectedList = [];

        $(".fstChoiceItem").each(function () {
            selectedList.push({"name": $(this).data("text"), "value": $(this).data("value")});
        })
        */

    });
</script>

</body>
</html>
