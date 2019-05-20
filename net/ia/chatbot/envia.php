<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Consulta</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body onselectstart="return false" >
    <div class="container">
        <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="conversation_start.php" method="post">
                    <input type="hidden" value="d2hhdHNzLWZi" name="token" id="token" />
                    <div class="modal-body">
                        <div class="form-group-sm">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="txtTicketCelular">Telefone:</label>
                                    <input type="text" onkeyup="this.value=this.value.replace(/[-' 'çÇáÁ^àÀéèÉÈíìÍÌóòÓÒúùÚÙñÑ~@&]/g,'')" class="form-control input-sm" name="convo_id" />
                                    <label for="txtTicketCelular">Nome:</label>
                                    <input type="text" class="form-control input-sm" name="nome_cliente">
                                </div>
                                <div class="col-md-8">
                                    <label for="txtTicketNome">IdBot</label>
                                    <input type="text" name="iddobot" value="40" class="form-control input-sm">
                                    <label for="txtTicketNome">Mensagem</label>
                                    <textarea type="text" class="form-control input-sm" name="say" value="" id="txtTicketNome" /></textarea>

                                    <input type="text" name="format" value="html" style="display: none;" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">                        
                        <button type="submit" class="btn btn-primary"  onselectstart="return false">ENVIAR</button>
                    </div>
                </form>
            </div><br><br>
<input class="btn btn-primary"type="button" value="RECARREGAR" onClick="history.go(0)"> 
        </div>
    </div>
</body>
</html>