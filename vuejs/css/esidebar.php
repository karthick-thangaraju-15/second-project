 <?php 
    $requestUri = $_SERVER['REQUEST_URI'];

   # Remove query string
    
   # Note that delimeter is '/'
    $arr = explode('/', $requestUri);
    $count = count($arr);

     $url= $arr[$count -1]; 
     ?>

<style type="text/css">

  a{

    font-family: 'Lato',sans-serif;

  }

  #sidebar ul li a:hover 

  {

    background:linear-gradient(110deg, #53900f8a 60%, #a4a61e94 60%);color: #fff;transform: scale(1.1);
  }

</style>

<link rel="stylesheet" href="css/font-awesome-sidebar.css">

<link rel="stylesheet" href="css/sidebar-w3.css">

<div id="sidebar" >

<div id="sidebar" style="font-family: Lato,sans-serif;">

<div class="w3-sidebar w3-bar-block w3-light-black w3-card" style="

  padding: 10px;

  box-shadow: 2px 2px 4px #5ac8fa;background: linear-gradient(110deg, #fff 60%, #bcbd22 60%);"><br>

<!--<button class="w3-button w3-block w3-left-align" style="font-size:14px; color: #000;" >

     <a  href="edashboard.php">

 <i class="left fa fa-home" style="font-size:18px; color: #173DEC;"></i> Dashboard</a> 

  </button>-->

  

  <ul class="navbar-nav">

    <?php if($url=='call_entry.php')
     {?>

    <li class="nav-itme" style="background:linear-gradient(110deg, #53900f8a 60%, #a4a61e94 60%);color: #fff;transform: scale(1.1);">

      <a class="nav-link" href="call_entry.php">

        <i class="left fa fa-phone"   style="font-size:18px;color: #1f6421"></i>

      Call's Entry

      </a>
    </li> 


    <br><br><?php } else {?>


 <li class="nav-itme" >

      <a class="nav-link" href="call_entry.php">

        <i class="left fa fa-phone"   style="font-size:18px;color: #1f6421"></i>

      Call's Entry

      </a>
    </li> 
<br><br>





    <?php } ?>
     <?php if($url=='Report8.php')
     {?>
     <li class="nav-itme" style="background:linear-gradient(110deg, #53900f8a 60%, #a4a61e94 60%);color: #fff;transform: scale(1.1);">

      <a class="nav-link" href="Report8.php">

        <i class="left fa fa-phone"   style="font-size:18px;color: #1f6421"></i>

      Vehicle's Entry

      </a>

    </li> 
  <?php } else { ?>


<li class="nav-itme" >

      <a class="nav-link" href="Report8.php">

        <i class="left fa fa-phone"   style="font-size:18px;color: #1f6421"></i>

      Vehicle's Entry

      </a>

    </li> 



  <?php } ?>

  </ul>

  

<br>

  <!--< <button class="w3-button w3-block w3-left-align" style="font-size:14px; color: #292b2c;" >

     <a  href="call_pending.php">

 <i class="fa fa-folder-open" style="font-size:18px; color: #173DEC;"></i>  Report</a> 

  </button>

	

 button class="w3-button w3-block w3-left-align" style="font-size:14px; color: #000;" onclick="myadmin_a()">

 <i class="fa fa-folder-open" style="font-size:18px; color:#173DEC;"></i> Entries <i class="fa fa-caret-down"></i>

  </button>-->



  <!--<div id="demoadmin_a" class="w3-hide w3-white w3-card">

  <a href="Call_entry.php" class="w3-bar-item w3-button"><i class="left zmdi zmdi-phone"  style="font-size:12px; color: #173DEC  ;"></i> Make Call Entry</a>-->

 <!-- <a href="client.php" class="w3-bar-item w3-button"><i class="left zmdi zmdi-male-female"  style="font-size:15px; color: #989898;"></i> Customer's</a> 

  </div><br>--> 

  

 <!--<button class="w3-button w3-block w3-left-align" onclick="myServices()" style="font-family:'Open Sans', sans-serif;">

<i class="fa fa-folder-open" style="font-size:15px; color: #949494;"></i> Reports <i class="fa fa-caret-down"></i>

  </button>

  <div id="demoservice" class="w3-hide w3-white w3-card">

    <a href="" class="w3-bar-item w3-button" style="font-size:13px "><i class="left zmdi zmdi-dribbble"  style="font-size:15px; color: #989898;"></i> Report1</a>

	 <a href="" class="w3-bar-item w3-button" style="font-size:13px "><i class="left zmdi zmdi-dribbble"  style="font-size:15px; color: #989898;"></i> Report2</a>

	<a href="" class="w3-bar-item w3-button" style="font-size:13px "><i class="left zmdi zmdi-dribbble" style="font-size:15px; color: #989898;"></i> Report3</a>

	</div>-->

	

   <!-- <button class="w3-button w3-block w3-left-align"  onclick="myServices1()" style="font-size:13px "><i class="left zmdi zmdi-time-restore" style="font-size:15px; color: #989898;"></i> Attendance <i class="fa fa-caret-down"></i>

  </button>

  <p id="demoservice1" class="w3-hide w3-white w3-card">

    <a href="js_attendance_neg.php" class="w3-bar-item w3-button" style="font-size:12px;font-weight: 600  "><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> Employee Attendance</a>

    <a href="monthview.php" class="w3-bar-item w3-button" style="font-size:12px;font-weight: 600  "><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> Month View</a>

  </p>-->

  <!--<button class="w3-button w3-block w3-left-align"  onclick="myServices2()" style="font-size:13px "><i class="left zmdi zmdi-library" style="font-size:15px; color: #989898;"></i> Project <i class="fa fa-caret-down"></i>

  </button>

  <p id="demoservice2" class="w3-hide w3-white w3-card">

    <a href="viewproject.php" class="w3-bar-item w3-button" style="font-size:12px;font-weight: 600  "><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> All Project</a>

    <a href="daily_activity.php" class="w3-bar-item w3-button" style="font-size:12px;font-weight: 600  "><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> Daily Activity</a>

  </p>

   <button class="w3-button w3-block w3-left-align"  onclick="myServices3()" style="font-size:13px "><i class="left zmdi zmdi-card-giftcard" style="font-size:15px; color: #989898;"></i> Voucher <i class="fa fa-caret-down"></i>

  </button>

  <p id="demoservice3" class="w3-hide w3-white w3-card">

    <a href="voucher_emp.php" class="w3-bar-item w3-button" style="font-size:12px;font-weight: 600 "><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> Create New</a>

   

  </p>

    <a href="feedback_view.php" class="w3-bar-item w3-button" 

  </div><br>

 

     <button class="w3-button w3-block w3-left-align"  onclick="myaccount()" style="font-family:'Open Sans', sans-serif;" ><i class="fa fa-folder-open" style="font-size:15px; color: #949494;"></i> Accounts <i class="fa fa-caret-down"></i>

  </button>

  <div id="demoacconts" class="w3-hide w3-white w3-card">

     <a href="accounts.php" class="w3-bar-item w3-button" style="font-size:13px "><i class="left zmdi zmdi-assignment-check"  style="font-size:15px; color: #989898;"></i> accounts</a>

  <button class="w3-button w3-block w3-left-align"  onclick="myaccount1()" style="font-size:13px "><i class="fa fa fa-inr" style="font-size:15px; color: #989898;"></i> Payment <i class="fa fa-caret-down"></i>

  </button>

  <p id="demoacconts1" class="w3-hide w3-white w3-card">

      <a href="bill.php" class="w3-bar-item w3-button" style="font-size:12px;font-weight: 600 "><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> Bill</a>

      <a href="invoice.php" class="w3-bar-item w3-button" style="font-size:12px;font-weight: 600 "><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> Invoice</a>

      <a href="payment.php" class="w3-bar-item w3-button" style="font-size:12px;font-weight: 600 "><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> Payment</a>

  </p>

   <a href="salary_advance.php" class="w3-bar-item w3-button" style="font-size:13px "><i class="left fas fa-edit"  style="font-size:15px; color: #989898;"></i> Salary Advance</a>

    <a href="salary.php" class="w3-bar-item w3-button" style="font-size:13px "><i class=" fa fa-tag"  style="font-size:15px; color: #989898;"></i> Payslip</a>

  </div><br>

   <button class="w3-button w3-block w3-left-align" onclick="myStock()" style="font-family:'Open Sans', sans-serif;" >

  <i class="fa fa-folder-open" style="font-size:15px; color: #949494;"></i> CMS <i class="fa fa-caret-down"></i>

  </button>

<div id="demoStock" class="w3-hide w3-white w3-card">

    <a href="branch.php" class="w3-bar-item w3-button" style="font-size:12px;"><i class="left zmdi zmdi-codepen"  style="font-size:15px; color: #989898;"></i> Branch</a>

          <a  class="w3-bar-item w3-button"  href="cms_association_category.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen" style="font-size:15px;color: #989898"></i> Association</a>

          <a  class="w3-bar-item w3-button" href="cms_lead_source.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen " style="font-size:15px;color: #989898"></i> Lead Source</a>

        <a  class="w3-bar-item w3-button" href="cms_need_for.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen " style="font-size:15px;color: #989898"></i> Need For</a>

          <a  class="w3-bar-item w3-button" href="cms_action.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen " style="font-size:15px;color: #989898"></i> Action</a>

        <a  class="w3-bar-item w3-button" href="cms_nature_of_projectwork.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen " style="font-size:15px;color: #989898"></i> Nature of Project Work</a>

        <a  class="w3-bar-item w3-button" href="cms_nature_of_work.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen" style="font-size:15px;color: #989898"></i> Nature of Work</a>

          <a  class="w3-bar-item w3-button" href="cms_units.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen " style="font-size:15px;color: #989898"></i> Units</a>

        <a  class="w3-bar-item w3-button" href="cms_machine_details.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen" style="font-size:15px;color: #989898"></i> Machine Details</a>

          <a  class="w3-bar-item w3-button" href="cms_expense_category.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen" style="font-size:15px;color: #989898"></i>Expense Category</a>

        <a  class="w3-bar-item w3-button" href="cms_bill_category.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen " style="font-size:15px;color: #989898"></i> Bill Category</a>

        <a  class="w3-bar-item w3-button" href="cms_campaign_category.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen" style="font-size:15px;color: #989898"></i> Campaign Category</a>

          <a  class="w3-bar-item w3-button" href="cms_type_of_industry.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen" style="font-size:15px;color: #989898"></i> Type of Industry</a>

		<a  class="w3-bar-item w3-button" href="cms_type_of_industry.php" style="font-size:12px;"><i class="left zmdi zmdi-codepen" style="font-size:15px;color: #989898"></i> Docs Required</a>  

          <br/><br/><br/><br/><br/>   

</div>-->



</div>



</div>

</div>

<script>

function myAccFunc() {

    var x = document.getElementById("demoAcc");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myreport() {

    var x = document.getElementById("demoreport");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

  

     function mycms() {

    var x = document.getElementById("cms");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myStock() {

    var x = document.getElementById("demoStock");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function myaccount() {

    var x = document.getElementById("demoacconts");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myaccount1() {

    var x = document.getElementById("demoacconts1");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function myServices() {

    var x = document.getElementById("demoservice");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function myServices1() {

    var x = document.getElementById("demoservice1");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myServices2() {

    var x = document.getElementById("demoservice2");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myServices3() {

    var x = document.getElementById("demoservice3");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function myadmin_a() {

    var x = document.getElementById("demoadmin_a");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function myadmin_a() {

    var x = document.getElementById("demoadmin_a");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}





function my_view() {

    var x = document.getElementById("demo_view");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function my_view() {

    var x = document.getElementById("demo_view");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function myDropFunc() {

    var x = document.getElementById("demoDrop");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function myDropFunc1() {

    var x = document.getElementById("demoDrop1");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



function myDropFunc_admin_1() {

    var x = document.getElementById("demoDrop_admin_1");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-light-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-light-blue", "");

    }

}

function myDropFunc_admin_2() {

    var x = document.getElementById("demoDrop_admin_2");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myDropFunc_admin_3() {

    var x = document.getElementById("demoDrop_admin_3");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myDropFunc_admin_4() {

    var x = document.getElementById("demoDrop_admin_4");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myDropFunc_admin_5() {

    var x = document.getElementById("demoDrop_admin_5");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}

function myDropFunc_admin_6() {

    var x = document.getElementById("demoDrop_admin_6");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

        x.previousElementSibling.className += " w3-blue";

    } else { 

        x.className = x.className.replace(" w3-show", "");

        x.previousElementSibling.className = 

        x.previousElementSibling.className.replace(" w3-blue", "");

    }

}



</script>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>





