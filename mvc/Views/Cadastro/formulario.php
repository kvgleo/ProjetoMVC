
				<p> <h1> Página Formulário: </h1> </p>
				<form action="?m=c&a=cs" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="email" type="text" class="form-control" name="email" placeholder="Digite seu nome...">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password" type="password" class="form-control" name="password" placeholder="Digite a senha...">
					</div>
					<br>
					<p> <label><input type="radio" name="sex" value="Masculino" checked> Masculino</label>
					<p> <label><input type="radio" name="sex" value="Feminino"> Feminino</label>
					<br>
					<br>
					<p> <b>Formação: </b> </p>
					<p> <label class="checkbox-inline"><input type="checkbox" name="EM">Ensino Médio </label> </p>
					<p> <label class="checkbox-inline"><input type="checkbox" name="CP">Cursos Profissionalizantes </label> </p>
					<p> <label class="checkbox-inline"><input type="checkbox" name="CT">Cursos Técnicos </label> </p>
					<p> <label class="checkbox-inline"><input type="checkbox" name="ES">Ensino Superior </label> </p>
					<br>
					<b> Selecione seu Estado </b>
					<select name="estados">		
						<option selected >RS</option>
						<option>SP</option>
						<option>MG</option>
						<option>AM</option>
						<option>RN</option>
						<option>RR</option>
						<option>RJ</option>
						<option>ES</option>
						<option>GO</option>
						<option>RO</option>
						<option>CE</option>
						<option>AP</option>
						<option>AL</option>
						<option>MT</option>
						<option>BA</option>
						<option>PR</option>
						<option>AC</option>
						<option>DF</option>
						<option>MS</option>
						<option>SC</option>
						<option>SE</option>
						<option>TO</option>
						<option>PI</option>
						<option>PE</option>
						<option>MA</option>
						<option>PA</option>
						<option>PB</option>

																
					</select>
					<br>
					<br>
					<b> Quantidade de renda mensal:  </b>
					<br>
					<br>
					<select size =3 name="rm">
						<option selected> 1 salário mínimo</option>
						<option> 2 salários mínimos</option>
						<option> 3 salários mínimos</option>
						<option> 4 salários mínimos</option>
						<option> 5 salários mínimos</option>
						<option> 6 salários mínimos</option>
						<option> 7 salários mínimos</option>
						<option> 8 salários mínimos</option> 
						<option> 9 salários mínimos</option>
						<option> 10 salários mínimos</option>
					</select>
					<br>
					<br>
					<p> <b>Deixe um Comentário: </b></p>
					<textarea rows="4" cols="50"placeholder="Digite deu comentário..." name="comment"></textarea>
					<br>
					


					<p><button type="submit" class="btn btn-primary">Enviar </button></p>
					<br>
				</form>

