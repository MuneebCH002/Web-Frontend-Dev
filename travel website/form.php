<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        table{
            /* border: 2px solid black; */
            background-color:transparent;
            color: white;       }
            body {
         background-image: url('banner2.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;  
         background-size: cover;}
            
        #form{
            position: absolute;
            top: 30%;
            left:40%;
            
            
        }
        h1{
           
            color: aliceblue;
            position: absolute;
            /* top: 30px; */
            padding-left: 220px;
            padding-top: 50px;
        }
        #bt{
            background-color: gray;
            border: none;
            color: white;
            padding: 20px;
            border-radius: 15px;

        }

        
    </style>
</head>
<body>
    <h1>Travel is the only thing you buy that makes you richer</h1>
    
    
    <form action="#" method="get" name="Registor_Form" id="form">
        
        <table  >
            <tr>
                <td><label >User Name*</label></td>
                <br>
                <td><input type="text" name="myname" required placeholder="name"></td>
            </tr>
            <br>
            <tr>
                <td><label>Password*</label></td>
                <td><input type="text" name="fname" required placeholder="Password"></td>
            </tr>
            
            <tr>
                
                
                <td><a href="http://localhost/project/travel%20website/travel%20website/"><button type="button" class="Login-btn" >login</button></a></td>
            </tr>
        </table>
         
    </form>
</body>
</html>