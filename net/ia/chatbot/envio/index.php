<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                <form action="http://devn1.com/clientes/net/ia/chatbot/conversation_start.php" method="post">
                    <input type="hidden" value="d2hhdHNzLWZi" name="token" id="token" />
                    <div class="modal-body">
                        <div class="form-group-sm">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="txtTicketCelular">Telefone:</label>
                                    <input type="text" onkeyup="this.value=this.value.replace(/[-' 'çÇáÁ^àÀéèÉ+ÈíìÍÌóòÓÒúùÚÙñÑ~@&]/g,'')" class="form-control input-sm" name="convo_id" />
                                </div>
                                <div class="col-md-8">
                                    <label for="txtTicketNome">Mensagem</label>
                                    <textarea type="text" class="form-control input-sm" name="say" value="" id="txtTicketNome" /></textarea>

                                    <input type="text" name="format" value="html" style="display: none;" />
                                    <input type="text" name="iddobot" value="10" style="display: none;" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">                        
                        <button type="submit" class="btn btn-primary"  onselectstart="return false">ENVIAR</button>
                    </div>
                </form>
            </div><br><br>
            <button onclick="location.href='http://devn1.com/clientes/net/ia/chatbot/envio/'"  type="submit" class="btn btn-primary">NOVO</button>
        </div>
    </div>
</body>
</html>