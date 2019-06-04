<?php 
// redirect


function redirect($url){
	return header("Location: $url");
}
function make_query($sql){
    global $connection;
    $result=mysqli_query($connection,$sql);
    return $result;
    }
function confirm_query($result){
    global $connection;
    if(!$result){
       die("Query Failed" .mysqli_error($connection));
    }
}
function fetch_array($result){
    return mysqli_fetch_array($result);
}
function primary_validate($username,$password){
    if(!($username && $password)){
        return redirect('404.php');
    }
}
function page_not_found(){
	return redirect('404.php');
}

        
function processform(){
    // this will fetch the data
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        primary_validate($username,$password);
        $query1 = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result1 = make_query($query1);
        $data = fetch_array($result1);
       // echo $data;
        if($data){
            return redirect('home.php');
        }
        else{
            return redirect('404.php');
        }
        
        
        }
    }
            
function add_member($name,$department,$address,$mobile,$room,$password){
    if($name && $department && $address && $mobile && $password){
    $insertsql = "INSERT INTO member (name, department, address,mobile,room,password) VALUES ('$name', '$department', '$address','$mobile','$room','$password')";
    $result3=make_query($insertsql);
        if($result3){
            echo "<script>alert('successfully added record'); </script>";
          // echo $result3; 
            //redirect('add_doctor.php');
        }

    }
    else{
        redirect('404.php');
    }
    
    
}

function add_pdf($name,$department,$address,$mobile,$room,$payment){
    // require the file
    

    require_once '/opt/lampp/htdocs/hostel_management/vendor/autoload.php';
    // Create an instance of the class:
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML("<!doctype html>
    <html>
    <head>
        <meta charset='utf-8'>
        <title>Money recipt</title>
        
        <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }
        
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        
        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
        
        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        
        .rtl table {
            text-align: right;
        }
        
        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
        </style>
    </head>
    
    <body>
        <div class='invoice-box'>
            <table cellpadding='0' cellspacing='0'>
                <tr class='top'>
                    <td colspan='2'>
                        <table>
                            <tr>
                                <td class='title'>
                                    <img src='https://www.sparksuite.com/images/logo.png' style='width:100%; max-width:300px;'>
                                </td>
                                
                                <td>
                                    Invoice #: 123<br>
                                    Created: January 1, 2015<br>
                                    Due: February 1, 2015
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr class='information'>
                    <td colspan='2'>
                        <table>
                            <tr>
                                <td>
                                    Sparksuite Hostel, Inc.<br>
                                    12345 Sunny Road<br>
                                    Sunnyville, CA 12345
                                </td>
                                
                                <td>
                                    $name.<br>
                                    $mobile<br>
                                    $address
                                    <h4>room : $room</h4>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr class='heading'>
                    <td>
                        Payment Method
                    </td>
                    
                    <td>
                        Cash #
                    </td>
                </tr>
                
                <tr class='details'>
                    <td>
                        Cash
                    </td>
                    
                    <td>
                        $payment
                    </td>
                </tr>
                
                <tr class='heading'>
                    <td>
                        Item
                    </td>
                    
                    <td>
                        Price
                    </td>
                </tr>
                
                <tr class='item'>
                    <td>
                        House Rent
                    </td>
                    
                    <td>
                        $1500.00
                    </td>
                </tr>
                
                <tr class='item'>
                    <td>
                        Food
                    </td>
                    
                    <td>
                        $1000.00
                    </td>
                </tr>
                
                <tr class='item last'>
                    <td>
                        Electricity and Gas
                    </td>
                    
                    <td>
                        $500.00
                    </td>
                </tr>
                
                <tr class='total'>
                    <td></td>
                    
                    <td>
                       Total: $3000.00
                    </td>
                </tr>
            </table>
        </div>
    </body>
    </html>");





    // Output a PDF file directly to the browser
    $mpdf->Output();
}




function add_new_member(){
    // this will fetch the data
    if (isset($_POST['add'])){
        $name = $_POST['name'];
        $department = $_POST['department'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $room = $_POST['room'];
        $password = $_POST['password'];
        $payment = $_POST['payment'];

        

        add_member($name,$department,$address,$mobile,$room,$password);

        add_PDF($name,$department,$address,$mobile,$room,$payment);
        
    }

    // her goes the pdf functionality


}


function payment_status(){
    
}

function search_member(){
    if (isset($_POST['search'])){
        $name = $_POST['name'];
    }
  $query7 = "SELECT * FROM member WHERE name LIKE '%$name%'";
  $result7 = make_query($query7);
  
  
  while($data7 = mysqli_fetch_assoc($result7)){
    echo 'result';        
}



}

?>