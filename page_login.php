<header class="l-headerInner">
	<div class="u-container">
		<h1>Login / Cadastro</h1>
	</div>
</header>

<main id="page__inner" class="l-innerPage">
	<section class="s-login">
		<div class="u-container u-containerFlex">
			<div class="u-fw50 painel-box">
				<div class="painel-wrapper">
					<h2>Já sou cliente</h2>
					<div id="wd7" class="wd-profile-login wd-widget wd-widget-js" data-widget="profile_login" data-widget-js="{ &quot;handler&quot;: &quot;ProfileLogin&quot;, &quot;options&quot;: {} }">
						<!-- BEFORE -->
						<!-- CONTENT -->
						<input type="hidden" name="widget-base-url" value="/">
						<form action="" method="POST" class="js-login form-login">
							<div class="input-wrapper">
								<label for="widget75-email">E-mail:</label>
								<input type="text" name="Login.Email" class="email placeholder" id="widget75-email" value="" placeholder="">
							</div>
							<div class="input-wrapper">
								<label for="widget75-password">Senha:</label>
								<input type="password" id="widget75-password" name="Login.Password" class="password placeholder" placeholder="">
								<button type="submit" id="widget75-submit" name="Login.Submit">Entrar</button>
								<div class="load hidden"></div>
							</div>
							<a href="#" class="js-login-recoverpassword recover-password" title="Esqueci minha senha">
								<span class="icon"></span>Esqueci minha senha
							</a>
						</form>
					</div>
				</div>
			</div>
			<div class="u-fw50 painel-box">
				<div class="painel-wrapper">
					<h2>Quero criar uma conta</h2>
					<!-- CONTENT -->
					<form action="/cadastro" method="get" class="form-cadastro">
						<div class="input-wrapper">
							<label>Nome*</label>
							<input placeholder="Nome" class="text-name valid placeholder" type="text" size="40" id="AddOrSetCustomer-Name" name="AddOrSetCustomer.Name" maxlength="50" value="" data-required="false">
						</div>
						<div class="input-wrapper">
							<label>Sobrenome*</label>
							<input placeholder="Sobrenome" class="text-surname required valid placeholder" type="text" size="" id="AddOrSetCustomer-Surname" name="AddOrSetCustomer.Surname" maxlength="50" value="" data-required="true" aria-required="true">
						</div>
						<div class="input-wrapper">
							<label for="78-email-new">E-mail*</label>
							<input placeholder="Digite seu e-mail" type="text" class="email required placeholder" id="78-email-new" name="PreRegister.Email" maxlength="255" value="">
						</div>
						<div class="input-wrapper hide">
							<label class="u-dflex">
								<input type="checkbox" value="0" checked="">
								<span>Gostaria de receber novidades em primeira mão e acesso antecipado a todas as ofertas do site.</span>
							</label>
						</div>
						<button type="submit" class="register-now">
							<i class="icon"></i>
							<span>Continuar</span>
						</button>
						<p class="info-termos"> 			Ao registrar seus dados, você concorda com nossos
							<a href="#">Termos &amp; Condições</a>, e
							<a href="/conteudo/institucional/politica-de-privacidade" class="content-modal">Política de Privacidade e Cookies</a>.
						</p>
					</form>
				</div>
			</div>
			<div class="u-fw100 login-oauth">
				<p class="option">ou</p>
				<p class="login-fb"><strong>Entre ou crie uma conta usando:</strong></p>
				<div id="wd12" class="wd-profile-login-oauth  wd-widget wd-widget-js" data-widget-js="{ &quot;handler&quot;: &quot;ProfileLoginOauth&quot;, &quot;options&quot;: {} }">
					<input type="hidden" name="widget-base-url" value="/">
					<input type="hidden" name="url-current" value="/login">
					<input type="hidden" name="url-callback" value="/cadastro/Index">
					<div class="facebook-modal">
						<a title="Facebook" class="loginFacebook login-link" href="#"></a>
						<div class="wrapper-form-profile-login-oauth"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="l-modal l-modal__recovery">
		<div class="l-modal__close">
			<span class="caption">Fechar</span>
			<span class="x">X</span>
		</div>
		<div class="l-modal__content">
			<div class="u-container">
				<h2>Recuperação de senha</h2>
				<form method="post" class="recover-form" action="/Login/RecoverPassword">
					<div class="input-wrapper">
						<label for="Email">E-mail</label>
						<input type="text" name="Key" id="Email" size="50" maxlength="50">
					</div>
					<button type="submit" class="recover-password-button">Enviar</button>
					<p>* Informe o e-mail utilizado no seu cadastro.
						<br>* As instruções para alteração da senha serão enviadas para o seu e-mail
					</p>
					<ul class="js-result"></ul>
				</form>
			</div>
		</div>
	</div>
</main>