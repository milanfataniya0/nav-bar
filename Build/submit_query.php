<style>

    table{
        margin: 100px auto;
    }
    #my{
       
        width: 200px;;
    }

    @keyframes scale01 {

        0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.2);
      }

      100% {
        transform: scale(1.2);
       
      }
        
    }
    #anim:hover{
        animation: scale01 2s forwards;
        transition: transform 1.2s ease-in-out;
        color:black;
     
        border-radius:5px;
        box-shadow: 4px 5px 5px 8px rgb(8, 5, 5); 

    }

</style>
   
   
   <?php
        extract($_POST);

        echo"<table  id='anim'>
            <tr><th  colspan='2'><h1>Query</h1></th></tr>
            <th id='my'>Email:-</th>
             <td>$email01</td>
             <tr>
                 <th id='my2'>Subject:-</th>
             <td>$subject01</td>
             </tr>

                   <tr>
                 <th>Message:-</th>
             <td>$message01</td>
             </tr>
                
        </table>";
  
       
    ?>
