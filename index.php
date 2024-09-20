<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <title>To DO</title>
    <style>
        .container-fluid{
            position: absolute;
            top: 0;
            bottom:0;
            left: 0;
            right:0;
            background-color: whitesmoke;
            height:100vh;
            width: 100vw;
            display: flex;
            justify-content:center;
            align-items:center
        }
        .row{
            height: 70vh;
            width: 75vw;
            padding: 20px 0px;
            background-color: white;
           overflow: scroll;
} 
        
        h1{
            text-align: center;
            font-family: "Sofadi One", system-ui;
            
        }
        .form_div{
            display: flex;
            justify-content:center;
            align-items:center
           
        }
       .text{
        width: 70%;
        background-color: whitesmoke;
       }
       .sub{
        background-color: black;
        color: white;
       }
       .sub,.text{
padding: 12px 4px;
outline:none;
border:none;
/* border-radius:6px; */
       }
       #task{
        display: flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
      
       p{
    padding: 12px 4px;
    background-color: whitesmoke;
    width: 90%;
    display: flex;
            justify-content:space-between;
            align-items:start;
            text-align:justify;
    }
    .cross-btn{
        /* float: right; */
        outline:none;
        border:none;
        background-color: black;
        color:white;
        cursor:pointer;
        font-weight:bold;
        margin: 0px 9px;
    }
    
    </style>
</head>
<div class="container-fluid ">
<div class="row scroll">
<h1>To DO List</h1>

<form action="" id="form">
    <div class="form_div">
    <input type="text" class="text" require>
    <input type="submit" value="submit" class="sub" >
    </div>
   </form>
<div id="task">
<!-- <div id="task-1">

</div> -->
</div>
</div>
</div>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
function abs(event){

event.preventDefault()
let todo=document.getElementsByClassName("text")[0].value;
const para = document.createElement("p");
const node = document.createTextNode(todo);
para.appendChild(node);
const element = document.getElementById("task");
element.appendChild(para);

const crossBtn = document.createElement("button");
crossBtn.textContent = "✖"; // Unicode character for cross
crossBtn.className = "cross-btn";
crossBtn.onclick = function() {
    para.remove();
};
para.appendChild(crossBtn);
document.getElementsByClassName("text")[0].value = "";

}
let form=document.getElementById("form");
form.addEventListener("submit",abs);
</script>
</body>
</html>