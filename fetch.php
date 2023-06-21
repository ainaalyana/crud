<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .main{
            height: 70px;
            width: 100%;
            background-color: black;
        }
        #bell{
            animation: spin 2s linear infinite;
            transition: 2s;
        }
        @keyframes spin{
            0%{
                transform: rotate(0deg) ;
            }
            25%{
                transform: rotate(-20deg) ;
            }
            50%{
                transform: rotate(0deg) ;
            }
            75%{
                transform: rotate(-20deg) ;
            }
            100%{
                transform: rotate(0deg) ;
            }
        }
        #img{
            animation: rotate 2s linear infinite;
            transition: 2s;
        }
        @keyframes rotate{
            from{
               transform: scale(1.0);
               border: 1px solid red;
            }
            to{
                transform: scale(1.1);
                border: 5px solid red;
            }
        }

        @media screen and (max-width:375px){
            #head{
                font-size: 20px;
            }
        }
        @media screen and (max-width:414px){
            #head{
                font-size: 20px;
            }
        }
        @media screen and (max-width:540px){
            #head{
                font-size: 20px;
            }
        }
        .bell-box{
            height: 20px;
            width: 20px;
            background-color: red;
            position: relative;
            top: 20px;
            left:25px;
            z-index: 1000;
            border-radius: 50%;
            border: 2px solid white;
            color: white;
            padding: 10px;
        }
        /* #head2{
            position: relative;
            top:50%;
            left: 0%;
            transform: translate(-50%, -50%);
        } */
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="main" style="display:flex; justify-content:space-between; align-items:center; padding:20px">
            <div class="div1" >
           <h1 style="color:white; display:inline;" id="head">User Data Table</h1>
    </div>
           <div class="div4" style=" width:300px; display:flex; justify-content: space-between;">
           <img class="img-fluid" src="Cartoon-Avatar-White-Background-300x300.png" alt="" style="height:50px; width:50px; border-radius:50%;" id="img">
            <button class="btn btn-primary" style="width:100px"> <i class="fa fa-plus"></i> Add</button>
          <!-- <div class="divbell">
            <div class="bell-box">
            <h1 style="font-size:12px; font-weight:bold" id="head2">+9</h1>
            </div>
          </div> -->
          <i class="fa fa-bell" style="font-size: 40px; color:white;" id="bell"></i>
            <!-- <i class="fa fa-search" style="font-size: 25px; float:right !important; color:black; position:relative; top: 7px; left:-92%; "></i> -->
            <!-- <input  type="text" placeholder="" style="padding:5px; width:350px; border-radius:20px; border:none"> -->
           </div>
        </div>
        <table class="table table-striped table-bordered">
            <tr style="text-align:center;">
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Phone-Number</th>
                <th>User Location</th>
                <th>User Site</th>

            </tr>
            <tr style="text-align:center;">
              <td>1</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
     
            </tr>
           <tr style="text-align:center;">
              <td>1</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>


           <tr style="text-align:center;">
              <td>2</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>


           <tr style="text-align:center;">
              <td>3</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>


           <tr style="text-align:center;">
              <td>4</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>5</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>6</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>7</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>8</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>9</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>10</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>11</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>12</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>

           <tr style="text-align:center;">
              <td>13</td>
                <td>Aina</td>
                <td>abc@gmail.com</td>
                <td>0900000000000</td>
                <td>Karachi, Pakistan</td>
                <td>University</td>
                <td><button class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></td>
                <td><button class="btn btn-success" style="width:100px"> <i class="fa fa-pencil"></i> Edit</button></td>
                
            </tr>
            
</table>
    </div>
</body>
</html>