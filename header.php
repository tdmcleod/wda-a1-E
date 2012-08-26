<!doctype html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles/styles.css" />
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
        <script>
                function findme(){
                    navigator.geolocation.getCurrentPosition(doit,broken,{enableHighAccuracy:true});

                }
                
                function broken(){
                    
                }
                
                
                function submit_form(){
                    var form= this.getElementById("tracker");
                    form.submit();
                }
                
                function view_wines(){
                    var form = this.getElementById("viewer");
                    form.submit();
                }
                
                
                function doit(position){
                    var map_div = document.getElementById("maps");
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;
                    var LatLng = new google.maps.LatLng(lat,lng);
                    
                    console.log(LatLng);
                    
                    var map_options = {
                        center:LatLng,
                        zoom:18,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
   
                    };
                    
                    var map = new google.maps.Map(map_div,map_options);
                    
                    var marker_options = {
                        
                        position:LatLng,
                        map:map,
                        title:'RMIT'
                        
                    };
                    
                    
                    var marker = new google.maps.Marker(marker_options);
                }
                
                function get_wines(){
                    var name_string="";
                    var names=document.getElementsByName("wine_name");
                    for(var e=0;e<names.length;e++){
                        name_string = name_string + names[e].innerHTML+",";
                    }
                    
                    return name_string;
                }
                
                function tweet(){
                    var url = "utilities.php";
                    url = url+"?function=send_tweet&message="+get_wines();
                    var request = new XMLHttpRequest();
                    request.open("GET", url);
                    request.onreadystatechange = function(){
                        if(request.status==200){
                           display_results(request.responseText);
                        }
                    }
                    request.send(null);
                }
                
                
                function display_results(message){
                    
                  $(document).ready(function(){
                     var msg = "<div class='results_box' style='display:none;'>"+message+"<br /><button type='button' onclick='remove()' class='remove_button'>Ok</button></div>";
                     jQuery("body").append(msg);
                     jQuery(".results_box").show(1000);
                     
                  });
                }
                
                 
                 function remove(){
                     $(document).ready(function(){
                         jQuery('.results_box').hide(1000);
                            
                        });
                 }
                
                
            </script>
        
    </head>
    
    <body>
        
        <div class="container-all">
            <div class="header-container">
                <div class="header-inner">
                 
                    <div class="header-left">
                        <a href="index.php" style="text-decoration: none;color: #666;">The Winestore</a>
                    </div>
                    
                    <div class="header-right">
                        
                        
                    </div>
                    
                </div>
                
            </div>
            
         
            
        
        
        
   
    

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
