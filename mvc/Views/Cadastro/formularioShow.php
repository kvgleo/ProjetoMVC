<b>Email: </b> <?php 
                    echo $email = $_POST["email"];  
                    if (empty($email)) echo  "<font color='#ff0000'> Nome não preenchido </font>";?> 
<br>
<b>Senha:</b> <?php 
                    echo $senha = $_POST["password"]; 
                    if (empty($senha)) echo  "<font color='#ff0000'> Nome não preenchido </font>";?> 
<br>
<b>Sexo</b>: <?php echo $_POST["sex"];?> 
<br>
<b> Formação:</b> <?php 
                        $cont=0;
                        if(isset($_POST["EM"]))
                            echo "Ensino Médio";
                        else
                            $cont++;
                        if(isset($_POST["CP"]))
                            echo "Curso(s) Profissionalizante(s)";
                        else
                            $cont++;
                            
                        if(isset($_POST["CT"]))
                            echo " Curso(s) Técnico(s)";
                        else
                            $cont++;
                        if(isset($_POST["ES"]))
                            echo " Ensio Superior";
                        else
                            $cont++;
                        if($cont == 4)
                            echo "<font color='#ff0000'> Nenhuma formação </font>" ?>

<br>
<b>Estado:</b>  <?php echo $_POST["estados"];?> 
<br>
<b>Renda Mensal:</b> <?php echo $_POST["rm"];?>
<br>
<b>Comentário:</b>  <?php echo $comment = $_POST["comment"]; if (empty($comment)) echo  "<font color='#ff0000'> Nenhum comentario </font>";?> 
<br>

