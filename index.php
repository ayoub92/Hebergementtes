<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<H1>Khadam</H1>
<div>
        <img src="img/we-are-proud.jpg "height="350" width="1200">
    </div>
    <div class="container-fluid" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form name="sig" action="#" id="monFormulair" class="form-horizontal" >
                    <div class="form-group">
                        <label class="col-xs-2 control-label" for="nom">Nom</label>
                        <div class="col-xs-10">
                            <input type="text" id="nom" class="form-control" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label" for="prenom">Prenom</label>
                        <div class="col-xs-10">
                            <input type="text" id="prenom" class="form-control" placeholder="Prenom">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label class="col-xs-2 control-label" for="adresse">Adresse</label>
                        <div class="col-xs-10">
                            <textarea  id="adresse" rows = "4" class="form-control" placeholder="Adresse"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label" for="phone">Téléphone</label>
                        <div class="col-xs-10">
                            <input type="text" id="phone" class="form-control" placeholder="+212">
                        </div>
                    </div>     
                    <div class="form-group">
                        <label class="col-xs-2 control-label" for="email">E-mail</label>
                        <div class="col-xs-10">
                            <input type="email" id="email" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label" for="message">Message</label>
                        <div class="col-xs-10">
                            <textarea  id="message" rows = "5" class="form-control" placeholder="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <span data-message="errorForm" ></span>
                            <input type="submit" class="btn btn-primary pull-right qtion1" value="Ajouter"  />
                        </div>
                    </div>
                </form>
            </div>
        </div>

<?php
echo ('salam');
?>
</body>
</html>