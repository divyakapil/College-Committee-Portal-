<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <style>
       .header {
    background-color: white;
    padding: 20px;
    text-align: left;
}
        h3{
            text-align: right;
        }
        
        body{
            background-image: url("bro.jpg");
        }
        
        
        
        
        
         <style> 
b1 {
   
   
    position: relative;
    -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 5s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    from {left: 0px;}
    to {left: 200px;}
}

@keyframes mymove {
    from {left: 0px;}
    to {left: 200px;}
}
       </style>
        
        
        
    </style>
<body>

    <div class="header">
    
    <h1 text-align="left;">ISTE-RAIT</h1>
        <img src="logoiste.png" width="150" height="120" align="left">
        <br>
    
        <h2 style="text-align:center;font-size:200%;font-family:courier,cursive";>"With the new day comes new strength and new thoughts"
</h2>
  <h3>
      -Eleanor Roosevelt.</h3>
</div>
  
    
    
<div class="container">
  <h1>Workshops</h1>
  
  <div class="panel-group" id="accordion">
    <?php
        include 'connect.php';
        $get_work_query = "SELECT * from workshop where event_type='workshop'";
        $workshops = mysqli_query($conn, $get_work_query);
        while($row = mysqli_fetch_assoc($workshops)) {
        echo '<div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$row['workshopid'].'">'.$row['name'].'</a>
            </h2>
          </div>
          <div id="collapse'.$row['workshopid'].'" class="panel-collapse collapse">
            <div class="panel-body">
                <h4>
                '.$row['description'].'
                </h4>
                <h4>
                  <a href="/comm/register_event_form.php?event_id='.$row['workshopid'].'" >Click here</a>
                </h4>
                </div>
              </div>
            </div>';    
        }
    ?>
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Python</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <h4>
            ISTE offers training programs in Python.These are live assisted remote,interactive
            workshops.Participants will gain hands-on experience in Python through a series
            of practice sessions and quizzes.
            </h4>
            <h4> <a href="work_r.html" >Click here</a></h4>
            </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Java</a>
        </h2>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><h4>
            This workshop mainly focuses on the students eager to learn Java from Basic.
            Java is one of the world's most important and widely used computer languages,and
            it has held this distinction for many years.Unlike some other computer languages
            whose influence has weared with passage of time,while Java's has grown. 
            The duration of this workshop will be 1 day ,with 3 Sessions,3 hours each,
            properly divided into theory and hand on practical sessions.
            </h4>
            <h4> <a href="work_java.html" >Click here</a></h4>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Blender</a>
        </h2>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><h4>Blender is a professional,free and open-source 3D computer graphics
        software toolset used for creating animated films,visual effects,art,3D printed models,interactive
        3D applications and video games.Blender's features include 3D modeling,UV unwrapping,texturing,
        raster graphics editing,rigging and skinning,fluid and smoke simulation,soft body simulation.
            It also features an integrated game engine.</h4>
            <h4> <a href="work_blender.html" >Click here</a></h4></div>
      </div>
    </div>-->
  </div> 
</div>
    
    
    
    
    
<div class="container">
  <h1>Seminars</h1>
  <div class="panel-group" id="accordion">
      <?php
        include 'connect.php';
        $get_work_query = "SELECT * from workshop where event_type='seminar'";
        $workshops = mysqli_query($conn, $get_work_query);
        while($row = mysqli_fetch_assoc($workshops)) {
        echo '<div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$row['workshopid'].'">'.$row['name'].'</a>
            </h2>
          </div>
          <div id="collapse'.$row['workshopid'].'" class="panel-collapse collapse">
            <div class="panel-body">
                <h4>
                '.$row['description'].'
                </h4>
                <h4>
                  <a href="/comm/register_event_form.php?event_id='.$row['workshopid'].'" >Click here</a>
                </h4>
                </div>
              </div>
            </div>';    
        }
    ?>
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Design and Analysis of Algorithm</a>
        </h2>
      </div>
      <div id="collapse4" class="panel-collapse collapse in">
          <div class="panel-body"> <h4>Design and Analysis of Algorithm is very important for designing
        algorithm to solve different types of problems in the branch of computer science and information
        technology.It will intro us with fundamental concepts of Designing Strategies,Complexity analysis
        of Algorithms,followed by problems on Graph Theory and Sorting methods.</h4>
              <h4><a href="sem_design.html" >Click here</a></h4></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Cloud Computing</a>
        </h2>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
          <div class="panel-body"><h4>Cloud computing is shared pools of configurable computer system resources
        and higher-level services that can be rapidly provisioned with minimal management effort,often over the
        Internet.Cloud computing relies on sharing of resources to achieve coherence and economies of scale,similar
        to a public utility.</h4>
              <h4> <a href="sem_cloud.html" >Click here</a></h4>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Hadoop</a>
        </h2>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body"><h4>Hadoop is a collection of open-source software utilities that
        facilitate using a network of many computers to solve problems involving massive amounts
        of data and computation.It provides a software framework for distributed storage and
            processing of big data using the MapReduce programming model.</h4>
            <h4> <a href="sem_hadoop.html" >Click here</a></h4></div>
      </div>
    </div>-->
  </div> 
</div>
    
    
    
    
    
    
    
    
    
    
   <div class="container">
  <h1>Events</h1>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Technical</a>
        </h2>
      </div>
      <div id="collapse7" class="panel-collapse collapse in">
        <div class="panel-body">
            <h4><li>Battlegrounds</li></h4>
            <h4><li>Techtonic</li></h4>
              <h4> <a href="form1.html" target="_blank">Click here</h4>
          </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Semi-Technical</a>
        </h2>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body"><h4>
            <li>Treasure Frenzy</li>  
            <li>RoboLand</li>   
            <li>Laser Strike</li>  
            <li>Tech Debate</li>  
            </h4>
             <h4> <a href="form1.html" target="_blank">Click here</h4>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Fun Event</a>
        </h2>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">
            <h4>
          <li>PubG</li>
          <li>Fifa19</li>
            </h4>
              <h4> <a href="form1.html" target="_blank">Click here</h4>
          </div>
      </div>
    </div>
  </div> 
</div>
     
    
    
    
    
    
    
    
    
    
</body>
</html>
