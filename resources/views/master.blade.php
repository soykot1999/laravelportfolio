<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOYKOT PORTFOLIO</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    {{View::make('header')}}
    @yield('content');
    {{View::make('footer')}}
    
</body>

<style>
    

/* header css*/
.navbar-style{
    font-size:15px;
    font-weight:bold;

    background-image: linear-gradient(to right, lightblue , lightgreen);
    height:50px;
    overflow:hidden;
}


/* content css*/

.background-image{
    width:100%;
    height:600px;
   
   
}

/* footer css*/
.footer-style{
    margin:0px;
    text-align:center;
    height:50px;
    background-image: linear-gradient(to right, lightblue , lightgreen);
    
    
    
}
.panel-footer{
    background-image: linear-gradient(to right, lightblue , lightgreen);
    justify-content: center;
    
  
    
}

.socials-footer{
    list-style:none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 3rem 0 3rem 0;

    
}
.socials-footer li{
    margin: 0 10px;
}
.socials a i{
    font-size:50px;
}
.socials-footer a:hover i{
    color:red;
}
.footer-bottom{
    background-image: linear-gradient(to right, lightblue , lightgreen);

}


.contact-content{
    height:450px;
    background-color:lightblue;
    border:1px solid green;
    
    
}

/* contact,portfolio,services body css*/
.container{
    height:600px;
    width:100%;
    font-family:Lucida Sans;

}
.div-left{

    padding-top:110px;
    padding-left:100px;
}
.div-right{
    
    
    padding-top:150px;
    padding-left:150px;
}

.div-right-contact{
    background-color:lightgreen;
    width: 700px;
    height:300px;
    margin: 50px auto;
    color: black;
    padding-top:60px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}
.div-right-services{
    background-color:lightblue;
    width: 700px;
    height:300px;
    margin: 50px auto;
    color: black;
    padding-top:60px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);

}

/*portfolio css*/

.portfolio-image{
    width:500px;
    height:500px;

}
.socials-portfolio{
    
    margin: 1rem 0 3rem 0;
    list-style:none;
    display: flex;
   

}
.socials-portfolio li{
    margin: 0 10px;
}
.socials-portfolio a:hover i{
    color:red;
}
.div3{
    text-align:center;
    
    height:100px;
}
.skill{
    
    width: 700px;
    margin: 50px auto;
    color: black;
    padding: 20px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.skill li{
    margin:20px 0;
    padding: 10px;
    list-style-type:none;
}
.bar{
    background: white;
    display:block;
    height:15px;
    border:1px solid rgba(0, 0, 0, 0.3);
    border-radius:10px;
    overflow:hidden;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.24);
    transition: all 0.3s cubic-beizer(.25, .8, ,25, 1);
}
.bar:hover{
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    
}
.bar span{
    height: 20px;
    float: left;
    background: linear-gradient(135deg, rgba(236,0,140,1)0%, rgba(252, 103, 103, 1)100%);

}
.html{
    width: 90%;
    animation: html 3s;

}
.css{
    width: 80%;
    animation: css 3s;

}
.php{
    width: 70%;
    animation: php 3s;

}

.laravel{
    width: 75%;
    animation: php 3s;
}
.javascript{
    width: 70%;
    animation: php 3s;
}
.bootstrap{
    width: 70%;
    animation: php 3s;
}

@keyframes html{
    0%{
        width: 0%;
    }
    100%{
        width: 90%;
    }
}

@keyframes css{
    0%{
        width: 0%;
    }
    100%{
        width: 80%;
    }
}

@keyframes php{
    0%{
        width: 0%;
    }
    100%{
        width: 70%;
    }
}
@keyframes laravel{
    0%{
        width: 0%;
    }
    100%{
        width: 75%;
    }
}
@keyframes javascript{
    0%{
        width: 0%;
    }
    100%{
        width: 70%;
    }
}

@keyframes bootstrap{
    0%{
        width: 0%;
    }
    100%{
        width: 70%;
    }
}



</style>
</html>