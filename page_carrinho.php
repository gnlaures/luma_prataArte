<header class="l-headerInner">
	<div class="u-container">
		<h1>Cadastro</h1>
	</div>
</header>

<main id="page__inner" class="l-innerPage">
	<section class="s-cadastro">
		<div class="u-container">
			<form method="post">
				<div class="customer-data painel-box" id="alterar-conta">
					<fieldset class="customer-type-data">
						<div class="content">
							<div class="input-wrapper customer-type-person">
								<div class="input-group customer-type-radio">
									<input type="radio" id="customer-type-person" name="AddOrSetCustomer.CustomerType" value="Person" checked="checked">
									<label for="customer-type-person">Pessoa Física</label>
									<input type="radio" id="customer-type-company" name="AddOrSetCustomer.CustomerType" value="Company">
									<label for="customer-type-company">Pessoa Jurídica</label>
								</div>
							</div>
							<div class="input-wrapper input-wrapper-name addorsetcustomer-name">
								<label class="field-title" for="AddOrSetCustomer-Name"> Nome: </label>
								<input class="text-name" type="text" size="40" id="AddOrSetCustomer-Name" name="AddOrSetCustomer.Name" maxlength="50" value="" data-required="false">
							</div>
							<div class="customer-type customer-type-person">
								<input type="hidden" name="ExtendedProperties[0].EntityMetadataID" value="5">
								<input type="hidden" name="ExtendedProperties[0].Name" value="documentos">
								<div class="input-wrapper input-wrapper-surname addorsetcustomer-surname">
									<label class="field-title" for="AddOrSetCustomer-Surname"><span class="required">*</span> Sobrenome:</label>
									<input class="text-surname required" type="text" size="" id="AddOrSetCustomer-Surname" name="AddOrSetCustomer.Surname" maxlength="50" value="" data-required="true">
								</div>
								<div class="input-wrapper input-wrapper-birthdate addorsetcustomer-birthdate">
									<label class="field-title" for="AddOrSetCustomer-BirthDate"><span class="required">*</span> Data de Nascimento: </label>
									<input class="text-birthdate required birthdate-masked birthdate-masked" type="tel" size="" id="AddOrSetCustomer-BirthDate" name="AddOrSetCustomer.BirthDate" value="" maxlength="10" data-required="true" "="">
								</div>
								<div class="input-wrapper input-wrapper-gender addorsetcustomer-gender" data-required="true">
									<label class="field-title" for="AddOrSetCustomer-Gender"> * Sexo: </label>
									<select class="select-gender" id="AddOrSetCustomer-Gender" name="AddOrSetCustomer.Gender" data-required="true">
										<option value="">Selecione</option>
										<option value="F" reference="F">Feminino</option>
										<option value="M" reference="M">Masculino</option>
									</select>
								</div>
								<div class="input-wrapper input-wrapper-cpf addorsetcustomer-cpf">
									<label class="field-title" for="AddOrSetCustomer-Cpf"> <span class="required">*</span> CPF: </label>
									<input class="text-cpf required" type="tel" size="" id="AddOrSetCustomer-Cpf" name="AddOrSetCustomer.Cpf" maxlength="14" value="" data-required="true">
								</div>
								<input type="hidden" name="AddOrSetCustomer.ExtendedProperties[0].EntityMetadataID" value="5">
								<input type="hidden" name="AddOrSetCustomer.ExtendedProperties[0].Name" value="documentos">
								<div class="input-file input-wrapper input-wrapper-documentos addorsetcustomer-extendedproperties-0-value">
									<label class="field-title" for="AddOrSetCustomer-ExtendedProperties-0-Value">Documentos: </label>
									<div id="wd20" class="wd-metadata-file-for wd-widget-js u-dflex u-jcsb" data-widget-js="{ &quot;handler&quot;: &quot;MetadataFileFor&quot;, &quot;options&quot;: {} }">
										<select style="width:30%;margin-right: 10px" class="file-type-option select-documentos" id="AddOrSetCustomer-ExtendedProperties-0-Value_Option" name="AddOrSetCustomer.ExtendedProperties[0].Option" "="">
										<option value="">Selecione</option>
										<option value="1361" reference="">cpf</option>
										<option value="1362" reference="">cnpj</option>
										</select>
										<input class="wd-file-input file-documentos " type="file" id="fk-AddOrSetCustomer-ExtendedProperties-0-Value" size="" accept=".pdf, .doc, .docx, .txt, .xls, .xlsx, .csv, .rtf , .bmp, .png, .jpg , .aif, .iff, .mp4, .mp3, .mpa, .wav, .wma" value="" data-max-size="2" data-required="false">
										<input style="display:none" class="wd-file-value file-documentos" type="text" name="AddOrSetCustomer.ExtendedProperties[0].Value" value="">
										<input style="display:none" class="wd-file-name file-documentos" type="text" name="AddOrSetCustomer.ExtendedProperties[0].FileName" value="">
									</div>
								</div>
							</div>
							<div class="customer-type customer-type-company" style="display: none">
								<input type="hidden" name="ExtendedProperties[1].EntityMetadataID" value="4">
								<input type="hidden" name="ExtendedProperties[1].Name" value="SiteTaxPayer">
								<input type="hidden" name="ExtendedProperties[2].EntityMetadataID" value="5">
								<input type="hidden" name="ExtendedProperties[2].Name" value="documentos">
								<div class="input-wrapper input-wrapper-tradingname addorsetcustomer-tradingname">
									<label class="field-title" for="AddOrSetCustomer-TradingName"><span class="required">*</span> Razão Social: </label>
									<input class="text-tradingname required" type="text" size="" id="AddOrSetCustomer-TradingName" name="AddOrSetCustomer.TradingName" maxlength="50" value="" data-required="true">
								</div>
								<div class="input-wrapper input-wrapper-cnpj addorsetcustomer-cnpj">
									<label class="field-title" for="AddOrSetCustomer-Cnpj"> <span class="required">*</span> CNPJ: </label>
									<input class="text-cnpj required" type="tel" size="" id="AddOrSetCustomer-Cnpj" name="AddOrSetCustomer.Cnpj" maxlength="18" value="" data-required="true">
								</div>
								<input type="hidden" name="AddOrSetCustomer.ExtendedProperties[1].EntityMetadataID" value="4">
								<input type="hidden" name="AddOrSetCustomer.ExtendedProperties[1].Name" value="SiteTaxPayer">
								<div class="input-wrapper input-wrapper-sitetaxpayer addorsetcustomer-extendedproperties-1-value">
									<label class="field-title" for="AddOrSetCustomer-ExtendedProperties-1-Value"><span class="required">*</span> Inscrição Estadual: </label>
									<input class="text-sitetaxpayer required" type="text" size="" id="AddOrSetCustomer-ExtendedProperties-1-Value" name="AddOrSetCustomer.ExtendedProperties[1].Value" maxlength="100" value="" data-required="true">
								</div>
								<input type="hidden" name="AddOrSetCustomer.ExtendedProperties[2].EntityMetadataID" value="5">
								<input type="hidden" name="AddOrSetCustomer.ExtendedProperties[2].Name" value="documentos">
								<div class="input-file input-wrapper input-wrapper-documentos addorsetcustomer-extendedproperties-2-value">
									<label class="field-title" for="AddOrSetCustomer-ExtendedProperties-2-Value">Documentos: </label>
									<div id="wd30" class="wd-metadata-file-for u-dflex u-jcsb wd-widget-js" data-widget-js="{ &quot;handler&quot;: &quot;MetadataFileFor&quot;, &quot;options&quot;: {} }">
										<select style="width:30%;margin-right:10px;" class="file-type-option select-documentos" id="AddOrSetCustomer-ExtendedProperties-2-Value_Option" name="AddOrSetCustomer.ExtendedProperties[2].Option" "="">
										<option value="">Selecione</option>
										<option value="1361" reference="">cpf</option>
										<option value="1362" reference="">cnpj</option>
										</select>
										<input class="wd-file-input file-documentos " type="file" id="fk-AddOrSetCustomer-ExtendedProperties-2-Value" size="" accept=".pdf, .doc, .docx, .txt, .xls, .xlsx, .csv, .rtf , .bmp, .png, .jpg , .aif, .iff, .mp4, .mp3, .mpa, .wav, .wma" value="" data-max-size="2" data-required="false">
										<input style="display:none" class="wd-file-value file-documentos" type="text" name="AddOrSetCustomer.ExtendedProperties[2].Value" value="">
										<input style="display:none" class="wd-file-name file-documentos" type="text" name="AddOrSetCustomer.ExtendedProperties[2].FileName" value="">
									</div>
								</div>
							</div>
							<div class="input-wrapper input-wrapper-email addorsetcustomer-email">
								<label class="field-title" for="AddOrSetCustomer-Email"><span class="required">*</span> E-mail: </label>
								<input class="text-email required" type="text" size="40" id="AddOrSetCustomer-Email" name="AddOrSetCustomer.Email" maxlength="100" value="" data-required="true">
							</div>
							<div class="input-wrapper addorsetcustomer-contact-phone">
								<label class="field-title" for="AddOrSetCustomer-Contact-Phone"> Telefone Fixo: </label>
								<input type="tel" size="14" id="AddOrSetCustomer-Contact-Phone" name="AddOrSetCustomer.Contact.Phone" value="" maxlength="20" class="optional phone-masked" data-required="false">
								<small>Ex: DDD + Telefone</small>
							</div>
							<div class="input-wrapper addorsetcustomer-contact-cellphone">
								<label class="field-title" for="AddOrSetCustomer-Contact-CellPhone"> Telefone Celular: </label>
								<input type="tel" size="15" id="AddOrSetCustomer-Contact-CellPhone" name="AddOrSetCustomer.Contact.CellPhone" value="" maxlength="20" class="optional cell-masked cellPhone" data-required="false">
								<small>Ex: DDD + Telefone</small>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="address-data painel-box">
					<fieldset>
						<span class="wd-subtitle">Endereço</span>
						<div>
							<input type="hidden" name="AddOrSetAddress[0].ID" value="">
							<input type="hidden" name="AddOrSetAddress[0].IsMainAddress" value="">
							<input type="hidden" name="AddOrSetAddress[0].SetAsBillingAddress" value="">
						</div>
						<div class="input-wrapper input-wrapper-name addorsetaddress-0-name">
							<label class="field-title" for="AddOrSetAddress-0-Name">
								<span class="required">*</span> Identificação:
							</label>
							<input class="text-name required" type="text" size="40" id="AddOrSetAddress-0-Name" name="AddOrSetAddress[0].Name" maxlength="50" value="" data-required="true">
							<small>ex: Escritório, Casa, etc.</small>
						</div>
						<div class="input-wrapper input-wrapper-contactname addorsetaddress-0-contactname">
							<label class="field-title" for="AddOrSetAddress-0-ContactName"> Nome do destinatário: </label>
							<input class="text-contactname" type="text" size="40" id="AddOrSetAddress-0-ContactName" name="AddOrSetAddress[0].ContactName" maxlength="100" value="" data-required="false">
						</div>
						<div class="input-wrapper input-wrapper-postalcode addorsetaddress-0-postalcode">
							<label class="field-title" for="AddOrSetAddress-0-PostalCode"><span class="required">*</span> CEP: </label>
							<input class="text-postalcode required" type="tel" size="9" id="AddOrSetAddress-0-PostalCode" name="AddOrSetAddress[0].PostalCode" maxlength="10" value="" data-required="true">
							<small> <a href="http://www.buscacep.correios.com.br/" class="buscaCepCorreios" target="_blank">DESCUBRA SEU CEP</a></small>
						</div>
						<div class="input-wrapper input-wrapper-addressline addorsetaddress-0-addressline">
							<label class="field-title" for="AddOrSetAddress-0-AddressLine"> <span class="required">*</span> Endereço: </label>
							<input class="text-addressline required" type="text" size="40" id="AddOrSetAddress-0-AddressLine" name="AddOrSetAddress[0].AddressLine" maxlength="100" value="" data-required="true">
						</div>
						<div class="input-wrapper input-wrapper-number addorsetaddress-0-number">
							<label class="field-title" for="AddOrSetAddress-0-Number">
								<span class="required">*</span> Número: </label>
							<input class="text-number required" type="text" size="4" id="AddOrSetAddress-0-Number" name="AddOrSetAddress[0].Number" maxlength="50" value="" data-required="true">
						</div>
						<div class="input-wrapper input-wrapper-addressnotes addorsetaddress-0-addressnotes">
							<label class="field-title" for="AddOrSetAddress-0-AddressNotes"> Complemento: </label>
							<input class="text-addressnotes" type="text" size="40" id="AddOrSetAddress-0-AddressNotes" name="AddOrSetAddress[0].AddressNotes" maxlength="50" value="" data-required="false">
						</div>
						<div class="input-wrapper input-wrapper-neighbourhood addorsetaddress-0-neighbourhood">
							<label class="field-title" for="AddOrSetAddress-0-Neighbourhood"><span class="required">*</span> Bairro: </label>
							<input class="text-neighbourhood required" type="text" size="40" id="AddOrSetAddress-0-Neighbourhood" name="AddOrSetAddress[0].Neighbourhood" maxlength="100" value="" data-required="true">
						</div>
						<div class="input-wrapper input-wrapper-city addorsetaddress-0-city">
							<label class="field-title" for="AddOrSetAddress-0-City">
								<span class="required">*</span> Cidade: </label>
							<input class="text-city required" type="text" size="40" id="AddOrSetAddress-0-City" name="AddOrSetAddress[0].City" maxlength="100" value="" data-required="true">
						</div>
						<div class="input-wrapper input-wrapper-state addorsetaddress-0-state" data-required="true">
							<label class="field-title" for="AddOrSetAddress-0-State"> * Estado: </label>
							<select class="select-state" id="AddOrSetAddress-0-State" name="AddOrSetAddress[0].State" data-required="true">
								<option value="">Selecione</option>
								<option value="AC" reference="AC">Acre</option>
								<option value="AL" reference="AL">Alagoas</option>
								<option value="AP" reference="AP">Amapá</option>
								<option value="AM" reference="AM">Amazonas</option>
								<option value="BA" reference="BA">Bahia</option>
								<option value="CE" reference="CE">Ceará</option>
								<option value="DF" reference="DF">Distrito Federal</option>
								<option value="ES" reference="ES">Espírito Santo</option>
								<option value="GO" reference="GO">Goias</option>
								<option value="MA" reference="MA">Maranhao</option>
								<option value="MT" reference="MT">Mato Grosso</option>
								<option value="MS" reference="MS">Mato Grosso do Sul</option>
								<option value="MG" reference="MG">Minas Gerais</option>
								<option value="PA" reference="PA">Pará</option>
								<option value="PB" reference="PB">Paraíba</option>
								<option value="PR" reference="PR">Paraná</option>
								<option value="PE" reference="PE">Pernambuco</option>
								<option value="PI" reference="PI">Piauí</option>
								<option value="RJ" reference="RJ">Rio de Janeiro</option>
								<option value="RN" reference="RN">Rio Grande do Norte</option>
								<option value="RS" reference="RS">Rio Grande do Sul</option>
								<option value="RO" reference="RO">Rondônia</option>
								<option value="RR" reference="RR">Roraima</option>
								<option value="SC" reference="SC">Santa Catarina</option>
								<option value="SP" reference="SP">Sao Paulo</option>
								<option value="SE" reference="SE">Sergipe</option>
								<option value="TO" reference="TO">Tocantins</option>
							</select>
						</div>
						<div class="input-wrapper input-wrapper-landmark addorsetaddress-0-landmark">
							<label class="field-title" for="AddOrSetAddress-0-Landmark"> Referência: </label>
							<input class="text-landmark" type="text" size="40" id="AddOrSetAddress-0-Landmark" name="AddOrSetAddress[0].Landmark" maxlength="100" value="" data-required="false">
						</div>
						<input type="hidden" id="AddOrSetAddress-0-SetAsShippingAddress" name="AddOrSetAddress[0].SetAsShippingAddress" value="True">
					</fieldset>
				</div>
				<div class="account-data painel-box" id="alterar-senha">
					<span class="account-data-titulo">Cadastrar Senha</span>
					<fieldset class="contact-data">
							<div class="input-wrapper addorsetcustomer-password" data-required="true">
								<label class="field-title" for="AddOrSetCustomer-Password"> * Senha: </label>
								<input type="password" size="14" id="AddOrSetCustomer-Password" name="AddOrSetCustomer.Password" maxlength="20" data-required="true">
							</div>
							<div class="input-wrapper">
								<label class="field-title" for="AddOrSetCustomer-Password-check">Repita a senha:</label>
								<input type="password" size="14" id="AddOrSetCustomer-Password-check" name="AddOrSetCustomer.Password_Check" data-required="true">
							</div>
						</fieldset>
				</div>
			</form>
		</div>
	</section>
</main>