<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Td</title>
    <style>

    </style>
</head>
<body>
    <h4 class="text-center py-5 "> πβ Talel Mejri Dsi22 πβ</h4>
    <div class="container py-3">
         <h4>Tp 1</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                         <div class="card-header">
                                Exerice 1 :
                         </div>
                         <div class="card-body">
                            mavar : invalid (car manque $)     <br>
                            $mavar : β    <br>
                            $var5 : β     <br>
                            $_mavar : β  <br>
                            $_5var : β  <br>
                            $__Γ©lΓ©ment1 : β  <br>
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
                                        echo '<tr class="monami text-center text-white fw-bolder" style="background-color:'.$ami.'"><td>'.$key.'<td><tr>';
                                    }
                                    echo "</table>";
                                    /*echo "
                                    <script>
                                        all_monami=document.querySelectorAll('.monami');
                                        all_monami.forEach(monami=>{
                                            monami.style.backgroundColor=monami.id;
                                        })
                                    </script>
                                    ";*/
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
                                $mois=array(1=>'janvier','FΓ©vrier','Mars','Avril','Mai','Juin','Juillet','Aout','September','October','Nouvember','DΓ©cember');
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
        <h4>Trvail a rendre :</h4>
        <div class="row">
            <div class="col-md-4">
                 <div class="card">
                     <div class="card-header">
                          exercice 1:
                    </div>
                    <div class="card-body">
                        <?php 
                            echo '$d : True'."<br>";
                            echo '$e : False'."<br>";
                            echo '$f : True '."<br>";
                           
                            ?>
                   </div>
                 </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                     <div class="card-header">
                          exercice 2:
                    </div>
                    <div class="card-body">
                        <?php
                           echo '$x,$y,$z a le mΓ©me valeur `PHP5`';
                        ?>
                   </div>
                 </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                     <div class="card-header">
                          exercice 3:
                    </div>
                    <div class="card-body">
                            <?php 
                                for($i=6;$i<=100;$i++){
                                    if($i%3==0 && $i%5==0){
                                        echo "$i"."|";
                                     }
                                }
                            ?>
                   </div>
                 </div>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-4">
                <div class="card">
                     <div class="card-header">
                          exercice 4:
                    </div>
                    <div class="card-body">
                            <?php 
                                function factoriel(int $a):int{
                                    $fact=1;
                                    for($i=2;$i<=$a;$i++){
                                        $fact*=$i;
                                    }
                                    return $fact;
                                }
                                echo "
                                    <form action='index.php' method='POST'>
                                        <input type='number' name='fact' class='mb-2 form-control' placeholder='donner un entier'>
                                        <button class='btn btn-outline-success py-2' name='btn'>Calculer facturiel</button>
                                    </form>
                                ";
                                if(isset($_POST['btn'])){
                                   echo "<h4 class='text-center mt-2'>". $_POST['fact'] ."!=".factoriel((int)$_POST['fact']) ."</h4>";
                                }

                            ?>
                   </div>
                 
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                     <div class="card-header">
                          exercice 5:
                    </div>
                    <div class="card-body">
                            <?php 
                                echo "<table>";
                                 for($i=0;$i<=10;$i++){
                                    echo "<tr><td> $i * 13 = ".(int)13*$i."</td></tr>";
                                 }
                                
                                echo "</table>";
                            ?>
                   </div>
                 
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                     <div class="card-header">
                          exercice 6:
                    </div>
                    <div class="card-body">
                            <?php 
                            echo "<table class='table table-bordered'>";
                            echo "<td>*</td>";
                             for($i=0;$i<=10;$i++){
                                echo "<td>$i</td>";
                             }
                             for($i=0;$i<=10;$i++){
                                echo "<tr>";
                                echo "<td>$i</td>";
                                for($j=0;$j<=10;$j++){
                                    echo "<td>".$i*$j."</td>";
                                }
                             }
                            echo "</table>";
                            ?>
                   </div>
                 
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Exercice 7
                    </div>
                    <div class="card-body">
                        <?php
                           $tab[1]=rand(10,100);
                           while(count($tab)<50){
                                $a=rand(10,100);
                                if(!in_array($a,$tab)){
                                    array_push($tab,$a);
                                }
                           } 
                           $max=$tab[1];
                           $min=$tab[1];
                           for($i=1;$i<=count($tab);$i++){
                                if($max<$tab[$i]){
                                  $max=$tab[$i];
                                }
                                if($min>$tab[$i]){
                                  $min=$tab[$i];
                                }
                           };
                           echo "<table  class='table table-bordered'>";
                            for($i=1;$i<=count($tab);$i++){
                               if($tab[$i]==$max){
                                    echo "<td style='background-color:red'>$tab[$i]</td>";
                                }else if($tab[$i]==$min){
                                    echo "<td style='background-color:green'>$tab[$i]</td>";
                                  
                                }else{
                                    echo '<td>'.$tab[$i].'</td>';
                                }
                             
                                ($i%25==0) ? print ('<tr></tr>') : '';
                            }
                           echo '</table>';
                           echo "<h5 class='text-center'>la maximum de tableau est : $max la minimum est :  $min </h5>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="card">
                    <div class="card-header">
                        Exercice 8
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="card">
                    <div class="card-header">
                         Exercice 9
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="card">
                    <div class="card-header">
                         Exercice 10
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="card">
                    <div class="card-header">
                         Exercice 11
                    </div>
                    <div class="card-body">

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
