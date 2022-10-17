<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Td</title>
    <style>

    </style>
</head>
<body>
    <h4 class="text-center py-5 "> 🎉✔ Talel Mejri Dsi22 🎉✔</h4>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                         <div class="card-header">
                                Exerice 1 :
                         </div>
                         <div class="card-body">
                            mavar : invalid (car manque $)     <br>
                            $mavar : ✔    <br>
                            $var5 : ✔     <br>
                            $_mavar : ✔  <br>
                            $_5var : ✔  <br>
                            $__élément1 : ✔  <br>
                            $hotel4*  : invalid (* iterdit) <br>
                     
                     </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                         <div class="card-header">
                          Exercice 2 :
                         </div>
                         <div class="card-body">
                            <?php   
                            function tirage(){
                                    do{
                                        $a=rand(10,100);
                                        $b=rand(10,100);
                                        //echo "$a | $b <br>";
                                      }while(($a%2==0) || ( $b%2!=0));
                                    echo $a .",". $b;
                            }
                            tirage();
                             ?>
                        </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                         <div class="card-header">
                            Exercice 3 : 
                         </div>
                         <div class="card-body">
                             <?php 

                                $list_amis=array(
                                    'mejri'=>array(
                                        'prenom'=>'talel',
                                        'Ncin'=>'13650110',
                                        'ville'=>'bahra'
                                    ),
                                    'chlendi'=>array(
                                        'prenom'=>'youssef',
                                        'Ncin'=>'13659110',
                                        'ville'=>'zarzis'
                                    ),
                                    'hkimi'=>array(
                                        'prenom'=>'amine',
                                        'Ncin'=>'13653110',
                                        'ville'=>'el omran'
                                    ),
                                    'maamer'=>array(
                                        'prenom'=>'saif',
                                        'Ncin'=>'13652110',
                                        'ville'=>'bahra'
                                    ),
                                    'ahmed'=>array(
                                        'prenom'=>'ghassen',
                                        'Ncin'=>'13658110',
                                        'ville'=>'benzert'
                                    ),
                                );
                                 echo "ForEach :";
                                foreach($list_amis as $key=>$amis){
                                    echo "<div> <strong> $key : </strong>";
                                        foreach($amis as $ami){
                                           echo " $ami ";
                                        }
                                   echo "</div>";
                                };
                                /*echo "For :";
                              
                                for( $i=1;$i<count($list_amis);$i++){
                                     echo $list_amis[$i];
                                     for($j=1;$j<$list_amis[$j];$j++){
                                           echo 
                                     };
                                };*/

                              ?>
                     </div>
              </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-2">
                <div class="card">
                         <div class="card-header">
                                Exercice 4 :
                         </div>
                         <div class="card-body">
                             <?php 
                                    $amis=array(
                                        'youssef'=>"blue",
                                        'hkimi'=>"brown",
                                        'saif'=>"yellow",
                                        'tekto'=>'red',
                                        'hama'=>"black"
                                    );

                                    echo "<table class='table'>";
                                    foreach($amis as $key=>$ami){
                                        echo '<tr class="monami text-center text-white fw-bolder" id="'.$ami.'"><td> '.$key.' <td><tr>';
                                    }
                                    echo "</table>";
                                    echo "
                                    <script>
                                        all_monami=document.querySelectorAll('.monami');
                                        all_monami.forEach(monami=>{
                                            monami.style.backgroundColor=monami.id;
                                        })
                                    </script>
                                    ";
                                 ?>
                     </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                         <div class="card-header">
                         Exercice 5  :
                         </div>
                         <div class="card-body">
                             <?php 
                                $mois=array(1=>'janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','September','October','Nouvember','Décember');
                                $colour=array(1=>"blue", "white"," red", "yellow"," grey", "lime", "lightblue"," fuchsia", "lightgrey", "olive"," pink" , "purple");
                                echo "<table class='table table-bordered'>";
                                for($i=1;$i<=count($mois);$i++){
                                    echo "<td bgColor=whitesmoke colspan='1'>$i</td><td class='w-100'  bgColor=$colour[$i] colspan='4'>$mois[$i]<td>";
                                    ($i%3==0) ? print "<tr></tr>" : '';
                                }
                                echo "</table>";
                             ?>
                     </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                         <div class="card-header">
                                Exercie 6:
                         </div>
                         <div class="card-body">
                             <?php 
                                    $list_semaine=array(
                                        'Monday'=>'lundi',
                                        'Tuesday'=>'mardi',
                                        'Wednesday'=>'Mercredi',
                                        'Thursday'=>'Jeudi',
                                        'Friday'=>'Vendredi',
                                        'Saturday'=>'Samedi',
                                        'Sunday'=>'Dimanche'
                                    );
                                    echo "<table>";
                                        foreach($list_semaine as $key=>$jour ){
                                            echo "<tr><td>Anglais :$key </td><td class='mx-5'>Francais : $jour</td></tr>";
                                        }
                                    echo "</table>";
                                ?>
                     </div>
              </div>
            </div>
        </div>
    </div>




    <div class="footer pt-5 mt-5 pb-5 text-center bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                     <div class="info">
                        <img class="mb-4 rounded-circle img-thumbnail shadow-sm " width="80px" height="80px"  src="./images/talel.jpg" alt="">
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem odit harum nulla ipsa accusamus
                        </p>
                         <div class="copyright">
                            create by <span>mejri talel</span>
                            <div>&copy;2022-<span>lbezz</span></div>
                         </div>
                    </div>
                
                
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="links">
                        <h5 class="text-light mb-4 mt-4">Links</h5>
                        <ul class="list-unstyled 1h-lg">
                            <li>Home</li>
                            <li>Our services</li>
                            <li>Portfolio</li>
                            <li>testimonials</li>
                            <li>Support</li>
                            <li>Terms and Condition</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2">
                    <h5 class="text-light mt-4 mb-4 1h-lg">About Us</h5>
                    <ul class="list-unstyled">
                        <li>Sign in</li>
                        <li>Register</li>
                        <li>About Us</li>
                        <li>Blog</li>
                        <li>Contact Us</li>
                    </ul> 
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="contact">
                        <h5 class="text-light mt-4">Contact Us</h5>
                        <p class="1h-lg mt-3 mb-5">Get in touch with us via mail phone.we are waiting for your call or message</p>
                        <a class="btn rounded-pill main-btn w-100" href="#">talelmejri8@gmail.com</a>
                        <ul class="d-flex mt-5 list-unstyled gap-3">
                           <li>
                            <a class="d-block text-dark" href="#">
                                <i class="fa-brands fa-facebook p-2"></i>
                            </a>
                           </li>
                           <li>
                            <a class="d-block text-dark" href="#">
                                <i class="fa-brands fa-github p-2"></i>
                            </a>
                           </li>
                           <li>
                            <a class="d-block text-dark" href="#">
                                <i class="fa-brands fa-instagram p-2"></i>
                            </a>
                           </li>
                           <li>
                            <a class="d-block text-dark" href="#">
                                <i class="fa-brands fa-twitter p-2"></i>
                            </a>
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

   
</body>
</html>
