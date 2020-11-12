<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
    <title>Study Program</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-datetimepicker.min.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/moment.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

<form action="program.php" name="createProgramForm" onsubmit="return checkSubmission()" method="POST">
<div class="container">
<div class="table-responsive">
<table class="table table-borderless">    
    <tbody>
    <tr>
        <th width="100%" height=60px style="text-align: center" bgcolor="#3bbbc4" colspan="4">
            <font size="12">Create Your Program</font>
        </th>
    </tr>
    <tr>
        <td colspan="2">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">                
            </div>
        </td>
        <td colspan="2">
            <div class="form-group">
                <label for="trainingType">Training Type</label>
                <input type="text" class="form-control" id="trainingType" name="trainingType">                
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="form-group">
                <label for="prerequisties">Prerequisties</label>
                <textarea id="editor" name="editor"></textarea>                       
            </div>
        </td>
    </tr>    
    <tr>
        <td colspan="1">
            <div class="form-group">
                <label for="duration">Duration of the program (Year)</label>
                <input type="text" class="form-control" id="duration" name="duration">                
            </div>
        </td>
        <td colspan="1">
            <div class="form-group">
                <label for="noOfSem">Total number of Semester</label>
                <input type="text" class="form-control" id="noOfSem" name="noOfSem">                
            </div>
        </td>
        <td colspan="1">
            <div class="form-group">
                <label for="datetimepicker1">Start Date of Program</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>   
            </div>
        </td>
        <td colspan="1">
            <div class="form-group">
                <label for="datetimepicker2">End Date of Program</label>
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>   
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="1">           
            <div class="form-group">
            <label for="yearSelect">School Year</label>
            <div>
            <select class="selectpicker form-control"  id="yearSelect">
                <option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            </div>
            </div>
        </td>
        <td colspan="1">           
            <div class="form-group">
            <label for="semesterSelect">Semester</label>
            <div>
            <select class="selectpicker form-control" id="semesterSelect">
                <option></option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            </div>
            </div>
        </td>
        <td colspan="1">
            <div class="form-group">
                <label for="datetimepicker3">Start Date of Semester</label>
                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>   
            </div>
        </td>
        <td colspan="1">
            <div class="form-group">
                <label for="datetimepicker4">End Date of Semester</label>
                <div class='input-group date' id='datetimepicker4'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>   
            </div>
        </td>
    </tr>  
    <tr class="tohide">
        <td colspan="2">
            <div class="form-group">
                <label for="addBtn">Available Module</label>
                <div>
                    <button id="addBtn" class="btn btn-info btn-block" type="button" onclick="addModule()">></button>
                </div>
                <br>
                <div>
                <select class="form-control" id="availModule" name="availModule" size="10">
                    <option>Loading...</option>
                </select>
                </div>
            </div>
        </td>
        <td colspan="2">
            <div class="form-group">
                <label for="removeModule">Module Added</label>
                <div>
                    <button id="removeBtn" class="btn btn-info btn-block" type="button" onclick="removeModule()"><</button>
                </div>
                <br>
                <div>
                <select class="form-control" id="addedModule" name="addedModule" size="10">                    
                </select>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="12" height=60px style="text-align: center">
            <input type="submit" class="btn btn-info" id="createProgram" name="createProgram" value="Submit">
            <input type="submit" class="btn btn-Secondary" id="cancel" name="cancel" value="Submit">
        </td>
    </tr>
    </tbody>
</table>
</div>
</div>
</form>

<script>  
    $(document).ready(function () {
        $('#datetimepicker1, #datetimepicker2, #datetimepicker3, #datetimepicker4').datetimepicker({        
        });
        $("#datetimepicker2").data("DateTimePicker").disable();
        $("#datetimepicker3").data("DateTimePicker").disable();
        $("#datetimepicker4").data("DateTimePicker").disable();
        $(".tohide").hide();
    });

    $(function(){
        $("#datetimepicker1").on("dp.change", function(){  
            $("#datetimepicker2").data("DateTimePicker").enable();
            var inc = 0;
            if ($("#duration").val() != ""){
                inc = parseInt($("#duration").val()) * 12;
            }
            console.log(inc);
            var dtStr = $(this).data("DateTimePicker").date().toString();                        
            var dt = new Date(dtStr);
            dt.setMonth(dt.getMonth() + inc);
            var obj = $('#datetimepicker2').data("DateTimePicker");                        
            obj.date(dt);            
        });
        $("#datetimepicker2").on("dp.change", function(){            
            $('#datetimepicker3').data("DateTimePicker").enable();
        });
        $("#datetimepicker3").on("dp.change", function(){            
            $('#datetimepicker4').data("DateTimePicker").enable();
        });

        $("#yearSelect").on("change", function(){            
            $("#semesterSelect").change(loadModule);
        });
        $("#semesterSelect").on("change", function(){            
            $("#yearSelect").change(loadModule);
        });

        $("#duration").on("change keyup paste", function(){
            if ($("#duration").val() != ""){
                inc = parseInt($("#duration").val()) * 12;
            }
            console.log(inc);
            var dtStr = $(this).data("DateTimePicker").date().toString();                        
            var dt = new Date(dtStr);
            dt.setMonth(dt.getMonth() + inc);
            var obj = $('#datetimepicker2').data("DateTimePicker");                        
            obj.date(dt);
        })        
    });

    function loadModule(){      
        $(".tohide").show();  
        var year = $("#yearSelect").val();
        var semester = $("#semesterSelect").val();
        $("availModule").empty();
        console.log(year);
        $.ajax({
            url: 'getCourses.php',
            type: 'POST',
            data: {
                "year": 1,
                "semester": 2,
            },
            success: function(res){                    
                console.log(res);
                $("#availModule").html(res)
            }            
        });
    }

    function addModule(){
        var selectedMod = document.getElementById("availModule").value;
        var addedModObj = document.getElementById("addedModule");
        var opt = document.createElement("option");
        opt.innerHTML = selectedMod;
        addedModObj.appendChild(opt);
    }

    function removeModule(){
        var addedModObj = document.getElementById("addedModule");
        addedModObj.remove(addedModObj.selectedIndex);
    }

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );           
</script>    
</body>
</html>
