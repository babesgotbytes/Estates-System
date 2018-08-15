<?php
session_start();
include("db_Connection.php");

class notify extends Db_Connect{

      private $category;
      private $property;
      private $damage;

      public function __construct($category,$property,$damage){
        $this->category=$category;
        $this->property=$property;
        $this->damage=$damage;
          }
        public function getReport(){


             if(isset($_POST["damage"])){        


                //SQL query to search if report exists
            $query ="SELECT * FROM PROJECT.report WHERE category= ? AND property= ? AND damage=?";

            //connect to db
            $run_query=$this->connect()->prepare($query);

            //execute query
            $run_query->execute([$this->category,$this->property,$this->damage]);

            //get if there is a report in db
            if($run_query->rowCount()<1){


                    //if not found echo out some error js
                    echo "<script>alert('report already made')</script>";
                    echo "<script>window.open('Studentreport.php','_self')</script>";

            }else{

                    //if a user is found 
                    if($row = $run_query->fetch(PDO::FETCH_ASSOC)){

                            $_SESSION['category']=$row['category'];
                            $_SESSION['property']=$row['property'];
                            $_SESSION['report_id']=$row['report_id'];
                            $_SESSION['damage']=$row['damage'];





                    }

               }

        }
    }

?>




















































































































































































<script type="application/javascript">
    $document.ready(function () {
        function load_unseen_notification(view='') {
            $.ajax({url:"notification.php",
                method:"POST",
                data:{view:view},
                datatype:"json",
                success:function (data) {
                    $('.dropdown-menu').html(data.notifiction);
                    if|(data.unseen_notification>0){
                        $('.count').html(data.unseen_notification);
                    }

                }});

        }
        load_unseen_notification();
        $('#application_form').on('submit' ,function (event) {
            event.preventDefault();

        });
    });
</script>