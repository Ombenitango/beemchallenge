<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <style>
    .add{
        width:100%;
        height:fit-content;
        overflow-x: scroll;
    }
    </style>
</head>
<body>
    <h1>Send messages to multiple customer <small>using beem api</small> </h1>
    <div class="add"></div>
   
  <div class="form-group">
    <label for="exampleInputEmail1">Phone number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Customer Phone number">
<br>
    <button type="submit" class="btn btn-primary"  id="add">Add</button>
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea3">Message</label>
  <textarea class="form-control" id="message" rows="7"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" id="send">Send</button>


<script>
document.querySelector('#add').addEventListener("click",()=>{
    
    let phoneNumber=document.querySelector('#exampleInputEmail1').value;
    if(phoneNumber==""){
        alert("Add atlest one number");
    }else {
        let apped=phoneNumber+",";
       let phoneArray=document.querySelector('.add');
        phoneArray.append(apped);
       
        
    }
})

document.querySelector('#send').addEventListener("click",()=>{
    let phoneArrays=document.querySelector('.add');
    let Message=document.querySelector('#message').value; 
     
     var ph=[];
     
     for(let i=0; i<phoneArrays.length; i++){
         ph[i]=phoneArrays.childNodes;
     }
     console.log(ph);
    $.ajax({
			url:_base_url_+'classes/message.php',
			method:'POST',
            data:{name:ph,message:Message},
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				alert(resp);
			}
		})
})
    
</script>

</body>
</html>