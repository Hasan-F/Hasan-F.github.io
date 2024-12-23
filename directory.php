<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://www.carelick.org/debug/img/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="https://www.carelick.org/debug/img/logo.png" type="image/x-icon" />
    <title>Carelick | Homepage</title>
    
    <!--UI Styles -->
    <link rel="stylesheet" type="text/css" href="https://www.carelick.org/debug/css/admin-page.css">
    <link rel="stylesheet" type="text/css" href="https://www.carelick.org/debug/css/style.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="drtoo.css">

    <style>
        /*----------event card---------*/
        .event-primary h2 {margin-top:10px}

        .nopadding {
            padding: 0 !important
        }
        time {
            display: inline-block;
            width: 100%;
            color: rgb(255, 255, 255);

            padding: 5px;
            text-align: center;
            text-transform: uppercase;
        }
        .events-card .panel-primary>.panel-heading {
            color: #fff;
            background-color: #ffffff;
            border-color: #ffffff;
            border-top: 2px solid darkred;
        }
        .events-card .panel {
            margin-bottom: 20px;
            border-radius: 4px;
            background-color: #ffffff;
            -webkit-box-shadow: 0 2px 6px 0 rgba(142, 141, 141, 0.3);
            box-shadow: 0 2px 6px 0 rgba(142, 141, 141, 0.3);
            border: none;
        }
        .events-card .panel .img-responsive  {
            display: block;
            max-width: 100%;
            height: 180px;
        }
        time.pink {
            background-color: rgb(197, 44, 102);
        }
        time.purple {
            background-color: rgb(165, 82, 167)
        }

        time.dkblue
        {
            background-color: #336699;
        }

        time.blue_green { background-color: #148aa5 }
        time.blue_violet { background-color: #3714a4}
        time.brown { background-color: #964B00}
        time.crimson { background-color: #a50516}
        time.deep_pink { background-color: #fb3c8f}
        time.forest_green { background-color: #1b4f15}
        time.fuchsia { background-color: #a51497}
        time.gray { background-color: #686868}
        time.green { background-color: #3aa03a}
        time.hotpink { background-color: #ff0080}
        time.lemon { background-color: #fee233}
        time.ligh_blue { background-color: #8bbdeb}
        time.light_red { background-color: #fc6a6c}
        time.lime { background-color: #c1fd33}
        time.lime_green { background-color: #2bfd2f}
        time.magenta { background-color: #fc1cad}
        time.maroon { background-color: #7f2b14}
        time.midnight { background-color: #000066}
        time.olive { background-color: #2b4726}
        time.orange { background-color: #fd7222}
        time.orange_red { background-color: #fc331c}
        time.orange_yellow { background-color: #ffcc00}
        time.peach { background-color: #FFE5B4}
        time.pink { background-color: #fc5ab8}
        time.purple { background-color: #af31f2}
        time.red { background-color: #fc0d1b}
        time.red_orange { background-color: #d7462c }
        time.salmon { background-color: #f69e94}
        time.tan { background-color: #f2ddbf}
        time.teal { background-color: #2b8a6d}
        time.violet { background-color: #6b28ce}
        time.violet_blue { background-color: #6041fa}
        time.white { background-color: #ffffff}
        time.yellow { background-color: #feee35}
        time.yellow_green { background-color: #defd35}
        time.yellow_orange { background-color: #fec42e}

        .time {
            background-color: rgb(165, 82, 167);
        }

        time > span {
            display: none;
        }

        time > .day {
            display: block;
            font-size: 4em;
            font-weight: 100;
            line-height: 1;
        }

        time > .month {
            display: block;
            font-size: 24pt;
            font-weight: 900;
            line-height: 1;
        }
        .nopadding {padding:0 !important;margin:0!important;}
        .panel-primary > .panel-footer {
            color: #fff!important;
            background-color: #ffffff;
            border-color: #ffffff;
        }
        .panel-primary > .panel-footer p,.panel-primary a {
            color: #212121;
            font-weight: 400;
        }
    </style>
    <style>
        #snackbar_error {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #FF5733;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 9999;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar_error.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }
        .preview {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px; } }

        .preview-pic {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
    </style>
</head>

<script>
    function show_snackbar(e) {
        var x = document.getElementById("snackbar");
        x.className = "show";
        $('#snackbar').html(e);
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    function show_snackbar_error(e) {
        var x = document.getElementById("snackbar_error");
        x.className = "show";
        $('#snackbar_error').html(e);
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
</script>

<body class="sidebar-is-reduced sidebar-is-expanded homepage" style="background-color: white;">
<div id="snackbar"></div>
<div id="snackbar_error"></div>
<?php
    include_once 'header.php'
    ?>


<script type="text/javascript">


    var controller = 'Auth';
    var base_url = 'https://www.carelick.org/';

    function getEventDetails(el) {

        $.ajax({
            'url': base_url +  controller + '/getEventDetails',
            'type': 'POST', //the way you want to send data to your URL
            'dataType': "json",
            data: {
                eventId: el
            },
            success: function (data) {
                if (data.status==200) {
                    venue=data.address+","+data.city+","+data.zipcode;
                    regTime=data.event_reg_from+"-"+data.event_reg_to;
                    eventTime=data.event_duration_from+"-"+data.event_duration_to;
                    $('#upcomingTitles').text(data.title);
                    $('#upcomingRegistration').text(regTime);
                    $('#upcomingDate').text(eventTime);
                    $('#upcomingVenues').text(venue);
                    $('#upcomingComments').text(data.comment);
                    eventImage=data.eventImage;
                    $('#eventImage').attr('src', eventImage);
                    if(data.eventType=='Past'){
                        $('#eventDetailsButtons').hide();
                    }else{
                        $('#eventDetailsButtons').show();
                    }

                }
                else {
                    show_snackbar_error('No Event Found');
                    eventList();
                }
            }

        });
    }

    function viewFulImage() {
                    url1=$('#eventImage').attr('src');
                    $('#fullImage').attr('src',url1);
    }
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>
    .tr_colors{
        background-color: darkred !important;
        color: white !important;
    }
    .myUL li a {
        border: 1px solid darkred;
        border-top: none;
        background-color: darkred;
        padding: 6px 12px;
        text-decoration: none;
        color: #FFFFFF;
        display: block;
    }
    .myUL li a:hover:not(.header) {
        background-color: darkred;
    }
    .myUL{
        list-style-type: none;
        max-height: 210px !important;
        overflow: scroll !important;
        overflow-x: hidden !important;
        overflow-y: initial !important;
        position: absolute !important;
        width: 100%;
        z-index: 9999;
        margin-left: -30px;
    }
    .myUL{
        display: none;
    }
</style>
<script>
    /*set_member_type*/
    function set_member_profession(value){
        $('.member_profession').val(value);
    }

    /*set_member_suggestion*/
    function getSuggestionName(memId){
        name=$('#sugg_'+memId).text();
        $('#memberNameId').val(name);
        $('#memberNameById').val(memId);
        $('#myUL').hide();
        $('#myUL').html('');
    }

    /*set_member_age*/
    function set_member_age(value){
        $('.member_age').val(value);
    }
</script>


            <div class="container directory_search">
                <div class="row directory-row">
                        <div class="col-md-12" >
                            <h3 class="page-title" style="margin-bottom: 5px;">Directory Search <h5>Search our registered members</h5></h3>
                            <br><br>
                                <div id="error" style="color: red"></div>
                            <form id="searchForm" method="POST">
                            <div class="row" >
                                <div class="col-md-3" style="color:#161616;">
                                    <span>Name</span>
                                    <div class="form-group">
                                        <input type="text" name="member_id" id="memberNameById" value="" hidden/>
                                        <input  type="text" name="member_name" placeholder="Name" id="memberNameId" onclick="show_sugg_li()" value="" onkeyup="searchSuggestionName(this.value);" class="member_name form-control focus" autocomplete="off"/>
                                        <ul id="myUL" class="myUL"></ul>
                                    </div>
                                </div>
                                <div class="col-md-3" style="color:#161616;">
                                    <span>City</span>
                                    <div class="form-group">
                                        <input type="text" name="member_city" value="" placeholder="City" class="member_city form-control focus" >
                                    </div>
                                </div>

                                <div class="col-md-3"style="color:#161616;">
                                    <span>State</span>
                                    <div class="form-group">
                                        <input  type="text" name="member_state" value="" placeholder="State" class="member_state form-control focus" >
                                    </div>
                                </div>
                                <div class="col-md-3"style="color:#161616;">
                                    <span>Country</span>
                                    <div class="form-group">
                                        <input  type="text" name="member_country" value="" placeholder="Country" class=" member_country form-control focus" >
                                    </div>
                                </div>
                                <div class="col-md-3" style="color:#161616;">

                                    <div class="form-group">
                                        <div class="wrap-select">
                                            <div  id="dd5" class="wrapper-dropdown-3 dir-search-list">
                                                <input  type="text" name="member_profession" placeholder="Name" class="member_profession" hidden>
                                                <span>Select Profession </span>                                                <ul style="background-color: #5f5f5f;" class="dropdown">
                                                    <li ><a href='javascript:void(0)' onclick='set_member_profession("");'>Select Profession</a></li>

                                                    <li><a href='javascript:void(0)' onclick='set_member_profession(1);'>Accountant</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(31);'>Agriculture</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(2);'>Banking</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(3);'>Business</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(36);'>Cbn</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(4);'>Dentist</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(5);'>Doctor(MD)</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(6);'>Doctor(PhD)</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(7);'>DSP</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(24);'>Engineer</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(8);'>Health Care</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(35);'>Home Maker</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(9);'>Housewife</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(10);'>Insurance</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(11);'>IT</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(12);'>Journalist</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(32);'>Laboratory Officer ( Quality Management) </a></li><li><a href='javascript:void(0)' onclick='set_member_profession(13);'>Lawyer</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(14);'>Librarian</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(15);'>Management</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(25);'>Other</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(16);'>Owner/Principal</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(17);'>Pharmacist</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(28);'>Pharmest</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(18);'>Physician</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(29);'>Professor</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(33);'>Quality Lead</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(19);'>Realtor</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(34);'>Retired</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(20);'>Student</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(21);'>Surgeon</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(22);'>Teacher</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(23);'>Technician</a></li><li><a href='javascript:void(0)' onclick='set_member_profession(30);'>Trading And Sales Head </a></li><li><a href='javascript:void(0)' onclick='set_member_profession(37);'>Working In Ksa As A Sales Head</a></li>                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"style="color:#161616; margin-top: 5%">
                                        <input type="checkbox"  name="family_included" class="family_included" value="1" id="includeMembers"> <label for="includeMembers" style="font-weight: 500;"> Include Family Members</label>
                                    </div>
                                </div>


                            <div  class="col-md-3" >
                                <select  class="form-control" name="showLimits" id="showLimits" onchange="searchNow(1)">
                                    <option value="10">10 Per Page</option>
                                    <option value="20">20 Per Page</option>
                                    <option value="50">50 Per Page</option>
                                    <option value="100">100 Per Page</option>
                                    <option value="150">150 Per Page</option>
                                    <option value="200">200 Per Page</option>
                                    <option value="250">250 Per Page</option>

                                </select>
                            </div>

                                <div class="col-md-3" style="padding-top: 8px;">
                                    <div class="form-group"><!--onclick="search_now();"-->
                                        <button type="button" onclick="searchNow(1);"  class="btn btn-primary submit-0btn search_now_button" style="padding: 7px 25px; background-color: darkred;" value="Search"><i class="fa fa-search"></i> Search <span class="search_now_fa_spin_icon"></span></button>
                                    </div>
                                </div>

                            </div>
                            
                            
                            </form>
                        </div>

                    <div class="row">
                        <div class="col-md-12">
                        
                        <!--<h3 class="page-title" style="padding-right: 5px; display: inline;">Search Result</h3>-->
                        
                        
                        </div>
                        <div class="col-md-12">

                            <div class="col-md-12 col-sm-12 result-box">

                                <div class="user-data-table" style="margin-bottom: 80px">
                                    <table class="table table_color table-striped table-condensed ">
                                        <thead>
                                        <tr class="tr_colors">
                                            <th width="20%"><span>Name</span></th>
                                            <th width="15%"><span>City</span></th>
                                            <th width="20%"><span>State</span></th>
                                            <th width="20%"><span>Country</span></th>
                                            <th width="5%" style="height: 44px;"><span>Email</span></th>
                                        </tr>
                                        </thead>
                                        <tbody class="tbodyScroll show_all_members">
                                        </tbody>
                                    </table>
                                    <div id="pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<button type="button" hidden class="email_modal" data-toggle="modal" data-target="#email_modal"></button>

<!--update news modal popup-->
<div class="modal fade modal-style " id="email_modal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Mail</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 30px;">
                        <br>
                        <div class="form-group">
                            <span class="">Email-id</span>
                            <input type="text" placeholder="email-id" class="form-control focus all_email_ids" readonly>
                        </div>
                        <div class="form-group">
                            <span class="">Subject</span>
                            <input type="text" placeholder="Subject" class="form-control focus email_subject" >
                        </div>
                        <div class="form-group">
                            <span class="">Message</span>
                            <textarea placeholder="Message" class="form-control focus email_message" ></textarea>
                        </div>
                        <div class="form-group">
                            <b style="color: red" class="email_error_message"></b>
                        </div>
                        <div class="row"><br>
                            <div class="col-md-12 text-center" style="display: flex;justify-content: space-between;">

                                <button type="button" onclick="send_email_all()" class="btn btn-primary submit-0btn" >Send</button>&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-primary btn-border close_modal" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    <style>
        .table-fixed thead {
            width: 100%;
        }
        .table-fixed tbody {
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
        }
        .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
            display: block;
        }
        .table-fixed tbody td, .table-fixed thead > tr> th {
            float: left;
            border-bottom-width: 0;
        }

    </style>
    <!--hide and show li-->
    <script>
        function show_sugg_li(){
            $('#myUL').show();
        }

        $(document).ready(function() {
            $(".container").click(function(e){
                $("#myUL").hide();
            });
        });
    </script>
    <!--directory search-->
    <script>

        var controller = 'Welcome';
        var base_url = 'https://www.carelick.org/';
        var page=1;


         function searchNow(page) {
            var member_country = $('.member_country').val();
            var member_state = $('.member_state').val();
            var member_city = $('.member_city').val();
            var member_name = $('.member_name').val();
            var member_profession = $('.member_profession').val();
            var showLimits=$('#showLimits').val();
             if($('input[type=checkbox]').prop('checked')){
                 family_included=1
             }else {
                 family_included=0
             }
             $('#error').html('');
            if(member_country!='' || member_state !='' || member_city !='' || member_name!='' || member_profession!='') {

                $('.search_now_fa_spin_icon').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:16px"></i>\n');
                $(".search_now_button").attr("disabled", true);

                $.ajax({
                    'url': base_url + 'Welcome/directorySearchWeb/'+page,
                    'type': 'POST', //the way you want to send data to your URL
                    'dataType': "json",
                    data: {
                        'member_country':member_country,
                        'member_state':member_state,
                        'member_city':member_city,
                        'member_name':member_name,
                        'member_profession':member_profession,
                        'family_included':family_included,
                        'showLimit':showLimits
                    },
                    success: function (data) {
                        if (data.status == 200) {

                            $('.show_all_members').html(data.data);
                            $('#pagination').html(data.pagination);
                            $('.search_now_fa_spin_icon').html('');
                            $(".search_now_button").attr("disabled", false);

                        } else {

                            $('.show_all_members').html(data.data);
                            $('#pagination').html('');
                            $('.search_now_fa_spin_icon').html('');
                            $(".search_now_button").attr("disabled", false);
                        }
                    }
                });
            }else{
                $('.show_all_members').html('');
                $('#pagination').html('');
                $('#error').html("* Fill any of the field").show();
            }
        }


        $("#searchForm").on('submit', function (e) {
                var member_country = $('.member_country').val();
                var member_state = $('.member_state').val();
                var member_city = $('.member_city').val();
                var member_name = $('.member_name').val();
                var member_profession = $('.member_profession').val();
                var pages=1;
                var family_included = 0;
            //$('.add_error').html('');
            e.preventDefault();
            //$('.add_fa_spin_icon').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>\n');
           // $(".add_button").attr("disabled", true);
            if(member_country!='' || member_state !='' || member_city !='' || member_name!='' || member_profession!='') {

                $.ajax({
                    type: 'POST',
                    url: base_url + 'Welcome/directorySearchWeb/'+pages,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    'dataType': "json",
                    success: function (data) {
                        if (data.status == 200) {
                            $('.show_all_members').html(data.data);
                            $('#pagination').html(data.pagination);
                        } else {
                            $('.show_all_members').html(data.data);
                            $('#pagination').html('');
                        }
                    }
                });
            }else{
                $('.show_all_members').html('');
                $('#error').html("* Fill any of the field").show();
            }
        });


        $(document).on("click", ".pagination li a", function(event){
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            searchNow(page);

        });



        $('#selectAll').click(function (e) {
            $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
        });

        $(document).ready(function() {

            $('#selectAll').click(function (e) {
                $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
            });


        });
        function searchSuggestionName(suggestionName){
            $('#memberNameById').val('');
            if(suggestionName.length >2){
                $.ajax({
                    'url': base_url + 'Auth/getDirectoryMemberSuggestion',
                    'type': 'post', //the way you want to send data to your URL
                    'dataType': "json",
                    'data': {
                        'suggestionName': suggestionName
                    },
                    'success': function (data) { //probably this request will return anything, it'll be put in var "data"
                        if (data.status == 200) {
                            $('#myUL').show();
                            $('#myUL').html(data.list);
                        } else {
                            $('#myUL').show();
                            $('#memberNameById').val('');
                            $('#myUL').html('');
                        }
                    }
                });
            }else{
                $('#myUL').html('').hide();
                $('#memberNameById').val('');

            }
        }
    </script>

    <!--email_outlook_selected-->
    <script>

        function email_outlook_selected(mem_id){

            $('.submit_errors').html('');

            var all_member_ids = mem_id;//$("input[name=selected_members]:checked").map(
//                function () {return this.value;}).get().join(",");

            if(all_member_ids){

                $.ajax({
                    'url': base_url + 'Auth/get_email_selected_outlook',
                    'type': 'post', //the way you want to send data to your URL
                    'dataType': "json",
                    'data': {
                        'selected_member_ids': all_member_ids
                    },
                    'success': function (data) { //probably this request will return anything, it'll be put in var "data"

                        if (data.status == 200) {
                            location.href = base_url+'login';
                            //location.href = 'mailto:'+data.data
                        } else {
                            show_snackbar_error('Something Went Wrong,Please Try Again Later.')
                        }
                    }
                });
            }else{
                $('.submit_errors').html('* Select Members To Send Email.');
            }
        }

    </script>

    <!--Ameen code for directory search dropdown - admin panel-->
    <script>
        $("#dd5").click(function(e){

            e.stopPropagation();
            $(".dropdown-common").show();
        });
        $(document).click(function(){
            $(".dropdown-common").hide();
            $('#dd5').removeClass('active');
        });



    </script>



<footer style="margin-top: 10%;">

    <div class="container">
        <div class="row" >
            <div class="col-sm-5 footer-one footnote" style="padding-right: 15%; font-size: 17px;">
                <h5 class="foot-heading" style="font-weight: bold;">Contact Us</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="name-email" style="padding-right: 50px;" >
                            <p>Salman Akhtar</p>
                            <p> salman@mafna.com</p>
                        </div>
                        <br>
                        <div class="name-email" >
                            <p>Saleem Muhammad</p>
                            <p> saleem@mafna.com</p>
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="name-email">
                            <p>Masih Sabihuddin</p>
                            <p> msabihuddin@gmail.com</p>
                        </div>
                        <br>
                        <div class="name-email">
                            <p>Ahmad Makki</p>
                            <p> makki212@hotmail.com</p>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-sm-4 footer-two footnote" style="padding-right: 15%; font-size: 17px;">
                <!-- <h5 class="foot-heading" style="font-weight: bold;">Address</h5> -->
                <div class="address-foot">
                    <p><strong>Address:</strong></p>
                    <p>475 Sheldon Drive, Cambridge, Ontario, N1T 2B7</p><br>
                    <span><strong>Phone:</strong> (519) 624-4622 </span><br>
                    <span><strong>Fax: </strong> (519) 624-9824</span><br>
                </div>
            </div>
            
            <div class="col-sm-3 social-footer-icons footnote">
                <h5 class="foot-heading" style="font-weight: bold; ">Socials</h5>
                <div class="social-icons icon-foot">
                    <a  style="display: inline-block; background-color: #161616; width: 20%;" href="https://www.facebook.com/Carelick-Family-260826064432616" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                    <a  style="display: inline-block; background-color: #161616; width: 20%;"href="#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                    <a  style="display: inline-block; background-color: #161616; width: 20%;"href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                    <a  style="display: inline-block; background-color: #161616; width: 20%;"href="mailto:admin@carelick.org"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                </div> <br>
            </div>

        </div>
    </div>
    <br>
    <br>
    <hr>
    <br>
    <p style="font-size: 16px;">Copyright © 2024 Carelick Association for Development Inc. - All Rights Reserved</p>
</footer>

<p class="imglist" style="max-width: 1000px;white-space: nowrap;overflow-x: auto;" hidden></p>

<!--script-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script src='https://use.fontawesome.com/2188c74ac9.js'></script>-->
<script src="https://www.carelick.org/debug/plugins/OwlCarousel/dist/owl.carousel.min.js"></script>
<script src="https://www.carelick.org/debug/plugins/WOW-master/dist/wow.js"></script>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.js"></script>-->
<script type="text/javascript" src="https://www.carelick.org/debug/js/main.js"></script>


<!--<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

<script type="text/javascript">
    $(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
    });

</script>

</body>

</html>