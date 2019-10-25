<?php
function getmodule($module)
{
  require 'hacktheme/'.$module.'.php';
}

session_start();
include 'config.php';
$counter = mysql_query("SELECT counter FROM counter");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Themes</title>


  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <style>
  .jumbotron{
    padding: 2rem 10rem;
  }
</style>
</head>

<body background="BG1.jpg" style="background-repeat: no-repeat;height:100%; background-position: center; background-size: cover;background-attachment: fixed; ">


<br><br>
<!-- Page Content 0-->
<div class="container">

  <!-- Jumbotron Header
      <header class="jumbotron my-4">-->
  <h1 class="display-3" style="color:white;font-family:OCR A Std;font-weight:100;font-size:50px;">CATEGORY A</h1>
  <p class="lead" style="color:white;font-family:OCR A Std;font-weight:100;font-size:20px;">Those candidates who are here to make some real life project and want to change the course of human history, refer to this group. Considerable bonus points will be awarded for choosing Category A.</p>
  <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->

  <br>
  <!-- Page Features -->
  <div class="row text-center">

    <div class="col-lg-3 col-md-12 mb-4">
      <div class="card">
        <!--<img class="card-img-top" src="http://placehold.it/500x325" alt="">-->
        <div class="card-body">
          <br>
          <h4 class="card-title">Challenges in Agriculture Sector</h4>


          <p class="card-text">Agriculture sector is the most important sector in Indian economy. But the sector faces a lot of challenges like natural calamities, irrigation problems, very less amount paid to the farmers and huge debt. Do you think that you can design an idea which can positively affect this social problem?</p>
        </div>
        <div class="card-footer">
          <h5> Remaining:<span style="color:red">
		 <?php echo mysql_result($counter, 0);?>
		  </h5></span>
         <?php 
                    if(mysql_result($counter,0)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=a1' class='btn btn-primary'>Select theme</a>";
                    }
                ?>   
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">

        <div class="card-body">
          <br>
          <h4 class="card-title">Indian Combat and Defence</h4>
          <br>

          <p class="card-text">Indian army is considered as the third largest army in this world and our expenditure on defense has been increasing every year. Whether its internal enemy or external, a solution is required. We have come to a point where we consider weapons as the final solution. But does it provide an answer to every problem?</p>
        </div>
        <div class="card-footer">
          <h5> Remaining:<span style="color:red"><?php echo mysql_result($counter, 1);?></span>
		 </h5>
          <?php 
                    if(mysql_result($counter,1)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=a2' class='btn btn-primary'>Select theme</a>";
                    }
                ?>            </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <div class="card-body"><br>
          <h4 class="card-title">Cyber Bullying</h4><br><br>
          <p class="card-text">Social media has become the most important part of our lives nowadays. But with very trend comes its side-effects. With the advantage that no one can see you face to face; the cyberspace has become the place where all kinds of hatred and bullying is done. A large number of youngsters become a victim of cyber bullying every day, is there any solution for it?</p>
        </div>
        <div class="card-footer">
          <h5> Remaining: <span style="color:red"><?php echo mysql_result($counter, 2);?></span>
		 
		  </h5>
         <?php 
                    if(mysql_result($counter,2)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=a3' class='btn btn-primary'>Select theme</a>";
                    }
                ?>            </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">

        <div class="card-body">
          <br>
          <h4 class="card-title">Food & Water conservation</h4><br>
          <p class="card-text">Food and water are the most important amenities required by us as humans. We can see a large amount of food being thrown away after parties. We can see people wasting water by not turning off the tap. In today’s world, not everyone can afford these amenities and their judicial should be of utmost importance. Do you think your idea can bring out a solution to the issue?</p>
        </div>
        <div class="card-footer">
          <h5>Remaining: <span style="color:red"><?php echo mysql_result($counter, 3);?></span>
		 
		  </h5>
            
         <?php 
                    if(mysql_result($counter,3)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=a4' class='btn btn-primary'>Select theme</a>";
                    }
                ?>            </div>
      </div>
    </div>



  </div>
  <!-- /.row -->


  <!-- Page Content 1-->
  <div class="container">
    <center>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4" align="text-center">
        </div>
        <div class="col-lg-3 col-md-6 mb-4" align="text-center">
          <div class="card">
            <div class="card-body"><br>
              <h4 class="card-title">Vigilantism and spread of fake news</h4><br>
              <p class="card-text">Whether it’s Naxals in Chhattisgarh or stone pelters in Kashmir, the biggest weapon they use to induce fear is FAKE NEWS. Both the vigilantism and fake news have moved hand in hand for a long time. There needs to be a line between good journalism and publishing hoax for money (which is the new trend). It’s high time to stand against fake news as we have stood against vigilantism, before it’s too late.</p>
            </div>
            <div class="card-footer">
              <h5> Remaining: <span style="color:red"><?php echo mysql_result($counter, 4);?></span>
		 
			  </h5>
              <?php 
                    if(mysql_result($counter,4)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=a5' class='btn btn-primary'>Select theme</a>";
                    }
                ?>                </div>
          </div>
        </div>

    </center>





    <div class="col-lg-4 col-md-6 mb-4" align="text-center">
    </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <br><br>
  <!-- Page Content 2-->
  <div class="container">

    <h1 class="display-3" style="color:white;font-family:OCR A Std;font-weight:100;font-size:50px;">CATEGORY B</h1>

    <p class="lead" style="color:white;font-family:OCR A Std;font-weight:100;font-size:20px;">Those candidates who are here to make innovations refer to this group.</p>

    <br>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-12 mb-4">
        <div class="card">
          <div class="card-body"><br>
            <h4 class="card-title">Artificial Intelligence</h4><br><br>
            <p class="card-text">Recently the world was in shock, as two AI machines were made to talk to each other and their conversation was recorded. They had some pretty interesting thoughts about the world and humanity.  In the field of computer science, artificial intelligence (AI), sometimes called machine intelligence, is intelligence demonstrated by machines, in contrast to the natural intelligence displayed by humans and other animals. AI is the hot trend in the technical field but should we be threatened?</p>
          </div>
          <div class="card-footer">
            <h5> Remaining:<span style="color:red"> <?php echo mysql_result($counter, 5);?></span>
		 
			</h5>
            <?php 
                    if(mysql_result($counter,5)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=b1' class='btn btn-primary'>Select theme</a>";
                    }
                ?>            </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <div class="card-body"><br>
            <h4 class="card-title">Blockchain</h4><br><br>
            <p class="card-text">Bitcoin almost touched the value of $20,000 in December 2017. Bitcoin and every other cryptocurrency works on blockchain technology. A blockchain, originally block chain, is a growing list of records, called blocks, which are linked using cryptography. Each block contains a cryptographic hash of the previous block, a timestamp, and transaction data (generally represented as a merkle tree root hash).</p>
          </div>
          <div class="card-footer">
            <h5> Remaining:<span style="color:red"><?php echo mysql_result($counter, 6);?></span>
		 
		</h5>
           <?php 
                    if(mysql_result($counter,6)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=b2' class='btn btn-primary'>Select theme</a>";
                    }
                ?>       </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <div class="card-body"><br>
            <h4 class="card-title">Industrial IOT</h4><br>
            <p class="card-text">It is said that the future of IoT has the potential to be limitless. The Industrial Internet of Things originally described the IoT(Internet of   Things) as it is used across several industries such as manufacturing, logistics, oil and gas, transportation, energy/utilities, mining and metals, aviation and other industrial sectors and in use cases which are typical to these industries.</p>
          </div>
          <div class="card-footer">
            <h5> Remaining:<span style="color:red"> <?php echo mysql_result($counter, 7);?><span>
		 </h5>
           <?php 
                    if(mysql_result($counter,7)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=b3' class='btn btn-primary'>Select theme</a>";
                    }
                ?>         </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <div class="card-body"><br>
            <h4 class="card-title">Cloud</h4><br>
            <p class="card-text">Cloud market is projected to be of the highest value in the coming decade. Simply put, cloud computing is the delivery of computing services—servers, storage, databases, networking, software, analytics, intelligence and more—over the Internet (“the cloud”) to offer faster innovation, flexible resources and economies of scale. You typically pay only for cloud services you use, helping lower your operating costs, run your infrastructure more efficiently and scale as your business needs change.</p>
          </div>
          <div class="card-footer">
            <h5> Remaining:<span style="color:red"><?php echo mysql_result($counter, 8);?></span>
		 
			</h5>
            <?php 
                    if(mysql_result($counter,8)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=b4' class='btn btn-primary'>Select theme</a>";
                    }
                ?>          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->




  <!-- Page Content 3-->
  <div class="container">
    <center>

      <!-- Page Features -->
      <div class="row text-center justify-content-center">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <div class="card-body"><br>
              <h4 class="card-title">Data Science</h4><br>
              <p class="card-text">Data science has been giving quite a lot of amazing job opportunities recently. With the advent of AI, cloud and big data; this particular branch has advanced a lot too. Data science is a multidisciplinary blend of data inference, algorithm development, and technology in order to solve analytically complex problems.</p>
            </div>
            <div class="card-footer">
              <h5> Remaining:<span style="color:red"><?php echo mysql_result($counter, 9);?></span>
		 </h5>
              <?php 
                    if(mysql_result($counter,9)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=b5' class='btn btn-primary'>Select theme</a>";
                    }
                ?>            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <div class="card-body"><br>
              <h4 class="card-title">Choose Your Own</h4>
              <p class="card-text">If you did not find any of the given options exciting, then don’t worry. You have the chance of working on a project of your choice. So, let’s code!!!!!</p>
            </div>
            <div class="card-footer">
              <h5> Remaining:<span style="color:red"><?php echo mysql_result($counter, 10);?></span>
		  </h5>
             <?php 
                    if(mysql_result($counter,10)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='./select.php?id=b6' class='btn btn-primary'>Select theme</a>";
                    }
                ?> </div>
          </div>
        </div>

        <!-- /.row -->
    </center>
    </div>
    <!-- /.container -->

  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark" style="width: 100%">
    <!-- <div class="container-fluid">-->
    <p class="m-0 text-center text-white">Copyright &copy;UPES-CSI 2019</p>
</div>
<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

